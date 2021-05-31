<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


class ScrapingController extends Controller
{
    // Vamos a definir la función para extraer datos de El Mundo
    public function extractCover(Client $client){
        $urlWeb = 'https://www.elmundo.es/';
        $crawler = $client->request('GET', $urlWeb);

        if($urlWeb == "https://www.elmundo.es/"){
            $crawler->filter(".ue-c-cover-content__body")->each(function($articleNode){
            
                $titleNode = $articleNode->filter(".ue-c-cover-content__main .ue-c-cover-content__headline-group")->first();
                $publisherNode = $articleNode->filter(".ue-c-cover-content__main .ue-c-cover-content__list-inline .ue-c-cover-content__byline-list .ue-c-cover-content__byline-item .ue-c-cover-content__byline-name")->first();
                
                $articleSource = "El Mundo";

                echo $titleNode->text();
                echo "<br>";
                echo $publisherNode->text();
                echo "<br>";
                echo $articleSource;
                echo "<br>";
                
                // Extraemos el enlace del artículo
                $titleHtml = $titleNode->html();
                preg_match("/href=\"(.*?)\"/i", $titleHtml, $matches);
                $linkNode = $matches[1]; 
            
            });

        } elseif ($urlWeb == "https://elpais.com/"){
            $crawler->filter(".c.story_card")->each(function($articleNode){
                $titleNode = $articleNode->filter(".c_h.headline")->first();
                $publisherNode = $articleNode->filter(".c_b.byline")->first();

                $articleSource = "El País";

                echo $titleNode->text();
                echo "<br>";
                echo $publisherNode->text();
                echo "<br>";
                echo $articleSource;
                echo "<br>";
                
                // Extraemos el enlace del artículo
                $titleHtml = $titleNode->html();
                preg_match("/href=\"(.*?)\"/i", $titleHtml, $matches);
                $linkNode = "https://elpais.com" . $matches[1]; 
            });
        }
    }


    // Función para ver el detalle del articulo, no utilizada porque El país es de pago
    public function extractDetail(Client $client, String $url){
        $crawler = $client->request('GET', $url);
        $crawler->filter(".ue-l-article__main-column")->each(function($articleNode){
            $titleNode = $articleNode->filter("h1")->first();
            $resumeNode = $articleNode->filter(".ue-c-article__standfirst")->first();
            $imageNode = $articleNode->filter(".ue-c-article__media-img-container")->first();
            $contentNode = $articleNode->filter(".ue-l-article__body.ue-c-article__body p")->first();
            
            echo $titleNode->text();
            echo "<br>";
            echo $resumeNode->text();
            echo "<br>";
            echo $contentNode->text();
            echo "<br>";
            echo $imageNode->html();
            echo "<br>";
            echo $contentNode->text();
        });
    }
}
