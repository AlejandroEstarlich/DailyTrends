<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ScrapingController extends Controller
{
    public function scrapingElMundo()
    {
    	$results = array();
        $client = new Client();
        $urlWeb = 'https://www.elmundo.es/';
        $page = $client->request('GET', $urlWeb);

        $page->filter(".ue-l-cover-grid .ue-l-cover-grid__column.size9of12 .ue-c-cover-content__main")->each(function($new){
            $titleHtml = $new->filter('.ue-c-cover-content__headline-group')->html();
            preg_match("/href=\"(.*?)\"/i", $titleHtml, $matches);
            $linkNode = $matches[1];

            $autorNode = $new->filter('.ue-c-cover-content__list-inline')->text();
            preg_match('/Redacción: [a-zA-Z áéíóúÁÉÍÓÚñÑ]+ | [a-zA-Z]+.+[a-zA-Z]+ /i', $autorNode, $publish);
            $autor = $publish[0];


            $this->results[0][] = $new->filter('.ue-c-cover-content__headline-group')->text();
            $this->results[1][] = $autor;
            $this->results[2][] = $linkNode;
            $this->results[3][] = "El Mundo";

        });

        $elMundo = $this->results;

        return $elMundo;
    }

    public function scrapingElPais()
    {
        $pais = array();
        $client = new Client();
        $urlWeb = 'https://elpais.com/';
        $page = $client->request('GET', $urlWeb);

        $page->filter('.b.b__3ad.c_chain.\|.row.margin_bottom_sm .story_card')->each(function($new){
            $titleHtml = $new->filter('.c_h.headline')->html();
            $autorNode = $new->filter('.byline')->text();
            
            preg_match("/href=\"(.*?)\"/i", $titleHtml, $matches);
            $linkNode = $matches[0];

            $this->pais[0][] = $new->filter('.c_h.headline')->text();
            $this->pais[1][] = $autorNode;
            $this->pais[2][] = "https://elpais.com".$linkNode;
            $this->pais[3][] = "El País";

        });

        $elPais = $this->pais;

        return $elPais;
    }
}
