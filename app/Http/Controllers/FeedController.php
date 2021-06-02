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
    // Método para crear artículo
    public function createArticle(){
        return view('articles.createArticle');
    }

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
}
