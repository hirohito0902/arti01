<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\User;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class BookmarkController extends Controller
{
    public function store($paperId) {
        $user = \Auth::user();
        if (!$user->is_bookmark($paperId)) {
            $user->bookmark_papers()->attach($paperId);
        }
        return back();
    }
    public function destroy($paperId) {
        $user = \Auth::user();
        if ($user->is_bookmark($paperId)) {
            $user->bookmark_papers()->detach($paperId);
        }
        return back();
    }
}
