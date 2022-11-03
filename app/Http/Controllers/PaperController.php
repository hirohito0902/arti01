<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\User;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
    
    /*public function search()
    {
        return view('papers/search');
    }*/
    
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
        /*$request->upload_file->storeAs('public/', $file_name);*/
        
        /*$paper = new Paper();
        $paper->title = $file_name;
        $paper->path = '/storage/' . $file_name;
        $paper->save();*/
        
       
        $paper = new Paper();
        $paper->title = $file_name;
        $path = Storage::disk('s3')->putFile('/test1', $request->upload_file, 'public');
        $paper->path = Storage::disk('s3')->url($path);
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
    
    /*public function showRedirect()
    {
        return redirect(asset('storage/88lkgWEKU5Va66URtPbJ58xb0we9HilDG7BRTBiR.pdf'));
    }*/
    
    public function show(Paper $paper)
    {
        return view('papers/show')->with(['paper' => $paper]);
    }
    
    
    
    
    public function search(Request $request)
    {
        // ユーザー一覧をページネートで取得
        $papers = Paper::paginate(20);
        
        $search = $request->input('search');

        // クエリビルダ
        $query = Paper::query();

       // もし検索フォームにキーワードが入力されたら
        if ($search) {

            // 全角スペースを半角に変換
           /*$spaceConversion = mb_convert_kana($search, 's');

            // 単語を半角スペースで区切り、配列にする（例："山田 翔" → ["山田", "翔"]）
            $wordArraySearched = preg_split('/[\s,]+/', $spaceConversion, -1, PREG_SPLIT_NO_EMPTY);


            // 単語をループで回し、ユーザーネームと部分一致するものがあれば、$queryとして保持される
            foreach($wordArraySearched as $value) {
                $query->where('name', 'like', '%'.$value.'%');
            }
            
            $users = $query->paginate(20);*/
            $query->where('title', 'LIKE', "%{$search}%");
        }
        $papers = $query->get();

        // ビューにusersとsearchを変数として渡す
        return view('papers.search')
            ->with([
                'papers' => $papers,
                'search' => $search,
            ]);
    }
    
    public function bookmark_papers()
    {
        $papers = \Auth::user()->bookmark_papers()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'papers' => $papers,
        ];
        return view('papers.bookshelf', $data);
    }
    
    public function delete(Paper $paper)
    {
        $paper->delete();
        return redirect('papers/detail');
        
    }
    
}



