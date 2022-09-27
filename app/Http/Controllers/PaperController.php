<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;


class PaperController extends Controller
{
    
    public function index(Paper $paper)
    {
        return view('papers/index')->with(['papers' => $paper->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function bookshelf()
    {
        return view('papers/bookshelf');
    }
    
       public function search()
    {
        return view('papers/search');
    }
    
    public function submission()
    {
        return view('papers/submission');
    }
}

