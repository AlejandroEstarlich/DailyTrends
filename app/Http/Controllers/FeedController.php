<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

use App\Models\Feed;
use App\Models\User;
use Symfony\Component\Mime\MimeTypes;

class FeedController extends Controller
{
    // Copiado el método de feed por precaución
    public function index()
    {
        $feed = Feed::orderBy('created_at', 'desc')->paginate(3);
        return view('home', array(
            'feeds' => $feed
        ));
    }

    // Método para crear artículo
    public function createArticle(){
        return view('articles.createArticle');
    }

    // Método para guardar el artículo
    public function saveArticle(Request $request){
        // Validar formulario
        $validatedData = $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $feed = new Feed();
        $user = \Auth::user();
        $feed->publisher = $user->id;
        $feed->title = $request->input('title');
        $feed->body = $request->input('body');

        // Subida de la imagen
        $image = $request->file('image');
        if($image){
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));
            $feed->image = $image_path;
        }

        $feed->save();

        return redirect()->route('home')->with(array(
            'message' => 'El artículo se ha publicado correctamente'
        ));
    }

    // Método para obtener la imagen
    public function getImage($filename){
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);
    }

    // Método para obtener el detalle del artículo
    public function getArticle($feedId){
        $feed = Feed::find($feedId);
        return view ('articles.feedDetail', array(
            'detail' => $feed,
        ));
    }

    public function delete($articleId){
        $user = \Auth::user();
        $feed = Feed::find($articleId);

        if($user && $feed->publisher == $user->id || $user->role == 'admin'){
            // Eliminar imagen
            if($feed->image){
                Storage::disk('images')->delete($feed->image);
            }
        
            // Borramos articulo
            $feed->delete();
            $message = array('message' => 'Artículo eliminado correctamente');
        } else {
            $message = array('message' => 'El artículo no se ha eliminado');
        }

        return redirect()->route('home')->with($message);
    }

    public function edit($feedId){
        $user = \Auth::user();
        $feed = feed::findOrFail($feedId);
        if($user && $feed->publisher == $user->id || $user->role == 'admin'){
            return view ('articles.editArticle', array(
                'feed' => $feed,
            ));
        } else {
            return redirect()->route('home')->with(array('message' => 'No tienes permiso para modificar este artículo'));
        }
    }

    public function update($feedId, Request $request){
        $validatedData = $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $user = \Auth::user();
        $feed = feed::findOrFail($feedId);

        $feed->publisher = $user->id;
        $feed->title = $request->input('title');
        $feed->body = $request->input('body');

        // Subida de la imagen
        $image = $request->file('image');
        if($image){
            $image_path = time() . $image->getClientOriginalName();
            \Storage::disk('images')->put($image_path, \File::get($image));
            $feed->image = $image_path;
        }

        $feed->update();

        return redirect()->route('home')->with(array(
            'message' => 'El artículo se ha actualizado correctamente'
        ));
    }

    public function search($search = null){

        if(is_null($search)){
            $search = \Request::get('search');

            return redirect()->route('searchArticle', array('search' => $search));
        }
        $feeds = Feed::where('title', 'LIKE', '%'.$search.'%')->orderBy('updated_at', 'desc')->paginate(6);
        return view('articles.search', array(
            'feeds' => $feeds,
            'search' => $search
        ));
    }
}
