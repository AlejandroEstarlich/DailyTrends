<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\feed;
use App\Traits\ScrapingTrait;

class HomeController extends Controller
{
    use ScrapingTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $elMundo = $this->scrapingElMundo();
        $elPais = $this->scrapingElPais();

        $feed = Feed::orderBy('updated_at', 'desc')->paginate(3);
        return view('home', array(
            'feeds' => $feed,
            'elMundo' => $elMundo,
            'elPais' => $elPais
        ));
    }
}
