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
        $feed = Feed::orderBy('id', 'desc')->paginate(3);
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
}
