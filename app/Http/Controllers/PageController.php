<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function beranda(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function tentang_kami(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function layanan_kami(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function tim_kami(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function artikel(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function kontak(){
        $news = News::paginate(4);
        return view('welcome', compact('news'));
    }

    public function layananKami(){
        return view('layanan-kami');
    }

    public function timKami(){
        return view('tim-kami');
    }

    public function artikelById($id){
        $artikel = News::findOrFail($id);
        return view('artikel', compact('artikel'));
    }
}
