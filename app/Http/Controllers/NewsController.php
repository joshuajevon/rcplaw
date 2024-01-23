<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function viewsNews(){
        $newss = News::all();
        return view('admin.news.viewAllNews', compact('newss'));
    }

    public function viewNewsById($id){
        $news = News::findOrFail($id);
        return view('admin.news.viewNewsById', compact('news'));
    }

    public function createNews(){
        return view('admin.news.createNews');
    }

    public function storeNews(Request $request){
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required'
        ]);

        $fileName = time() . '-' . $request->title . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('/public/image',$fileName);

        News::create([
            'title' => $request->title,
            'image' => $fileName,
            'description' => $request->description,
            'author' => $request->author,
            'date' => $request->date
        ]);
        return redirect(route('viewsNews'));
    }
}
