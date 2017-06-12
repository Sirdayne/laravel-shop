<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Review;

class PagesController extends Controller
{   
    public function index(){
        $reviews = Review::orderBy('created_at', 'desc')->get();

        $seo = $this->seo('index');

        return view('pages.index', compact('reviews', 'seo') );
    }

    public function about(){
        return view('pages.about', ['seo' => $this->seo('about')] );
    }
    
    public function types(){
        return view('pages.types', ['seo' => $this->seo('types')] );
    }
    
    public function jalousie(){
        return view('pages.jalousie', ['seo' => $this->seo('jalousie')] );
    }

    public function sew(){
        return view('pages.sew', ['seo' => $this->seo('sew')] );
    }

    public function decor(){
        return view('pages.decor', ['seo' => $this->seo('decor')] );
    }

    public function wallpapers(){
        return view('pages.wallpapers', ['seo' => $this->seo('wallpapers')] );
    }

    public function floor(){
        return view('pages.floor', ['seo' => $this->seo('floor')] );
    }

    public function business(){
        return view('pages.business', ['seo' => $this->seo('business')] );
    }

    public function dealers(){
        return view('pages.dealers', ['seo' => $this->seo('dealers')] );
    }

    public function contacts(){
        return view('pages.contacts', ['seo' => $this->seo('contacts')] );
    }

    public function seo($page)
    {
        $seo['title'] = trans("seo.{$page}_title");
        $seo['description'] = trans("seo.{$page}_description");
        //$seo['keywords'] = trans("seo.{$page}_keywords");

        return $seo;
    }
}
