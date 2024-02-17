<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{

    public function viewsNews(Request $request){

        if(News::count() == 0){
            return view('admin.news.viewNoNews');
        }else{
            $result = $request->input('search');
            if($result){
                $newss = News::where('title','like','%' .request('search'). '%')->paginate(6);
            } else{
                $newss = News::paginate(6);
            }

            return view('admin.news.viewAllNews', compact('newss','result'));
        }
    }

    public function viewNewsById($id){
        $news = News::findOrFail($id);
        return view('admin.news.viewNewsById', compact('news'));
    }

    public function createNews(){
        return view('admin.news.createNews');
    }

    public function storeNews(Request $request){
        $messages = [
            'title.required' => 'Judul artikel harus diisi.',
            'image.required' => 'Gambar artikel harus dipilih.',
            'description.required' => 'Isi artikel harus dipilih.',
            'author.required' => 'Penulis artikel harus dipilih.',
            'date.required' => 'Tanggal artikel harus dipilih.'
        ];

        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required'
        ], $messages);

        $extension = $request->file('image')->getClientOriginalExtension();

        $titleSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title), '-'));

        $imageNameSlug = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
        $imageNameSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $imageNameSlug), '-'));

        $combinedSlug = $titleSlug . '-' . $imageNameSlug . '.' . $extension;

        $fileName = time() . '-' . $combinedSlug;

        $request->file('image')->storeAs('/public/news', $fileName);

        News::create([
            'title' => $request->title,
            'image' => $fileName,
            'description' => $request->description,
            'author' => $request->author,
            'date' => $request->date
        ]);

        $articleTitle = $request->title;

        return redirect(route('viewsNews'))->with('success', "Artikel '$articleTitle' telah berhasil ditambahkan!");
    }



    public function editNews($id){
        $news = News::findOrFail($id);
        return view('admin.news.editNews',compact('news'));
    }

    public function updateNews(Request $request, $id){
        $messages = [
            'title.required' => 'Judul artikel harus diisi.',
            'description.required' => 'Isi artikel harus dipilih.',
            'author.required' => 'Penulis artikel harus dipilih.',
            'date.required' => 'Tanggal artikel harus dipilih.'
        ];

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'required',
            'date' => 'required'
        ], $messages);

        $news = News::findOrFail($id);

        $image = $request->file('image');

        if($image){
            Storage::delete('/public/news/'. $news->image);
            $extension = $request->file('image')->getClientOriginalExtension();
            $titleSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->title), '-'));
            $imageNameSlug = pathinfo($request->file('image')->getClientOriginalName(), PATHINFO_FILENAME);
            $imageNameSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $imageNameSlug), '-'));
            $combinedSlug = $titleSlug . '-' . $imageNameSlug . '.' . $extension;
            $fileName = time() . '-' . $combinedSlug;
            $request->file('image')->storeAs('/public/news', $fileName);
            $news->update([
                'image' => $fileName,
            ]);
        }

        $news->update([
            'title' => $request->title,
            'description' => $request->description,
            'author' => $request->author,
            'date' => $request->date
        ]);

        $articleTitle = $request->title;
        return redirect(route('viewsNews'))->with('success', "Artikel '$articleTitle' telah berhasil diperbaharui!");
    }

    public function deleteNews($id){
        News::destroy($id);
        return redirect(route('viewsNews'));
    }
}
