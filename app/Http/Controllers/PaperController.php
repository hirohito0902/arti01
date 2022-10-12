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
    /*
    public function submission()
    {
        return view('papers/submission');
    }
    */
    public function register()
    {
        return view('papers/register');
    }
    
    
    public function upload() {
        return view('papers/submission');
    }

    public function action(Request $request) {
        $request->validate([
            'upload_file' => 'required'
        ]);

        $dir = 'sample';
                // storage/app/upfiles配下にアップロード
        $file_name =$request->upload_file->getClientOriginalName();
        $request->upload_file->storeAs('public/', $file_name);
        
        $paper = new Paper();
        $paper->title = $file_name;
        $paper->path = '/storage/' . $file_name;
        $paper->save();
        
        return redirect('/papers/submission');
    }
    
    public function logout()
    {
        return view('/papers/logout');
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
    }
    
    public function detail(Paper $paper)
    {
        return view('papers/detail')->with(['papers' => $paper->get()]);
    }
    
    public function showRedirect()
    {
        return redirect(asset('storage/88lkgWEKU5Va66URtPbJ58xb0we9HilDG7BRTBiR.pdf'));
    }
}

