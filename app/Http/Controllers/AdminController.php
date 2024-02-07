<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class AdminController extends Controller
{
    public function dashboard(){
        $news_count = News::count();
        return view('admin.dashboard', compact('news_count'));
    }
}
