<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookshelf;

class BookshelfController extends Controller
{
    public function index(Bookshelf $bookshelf)
    {
        return $bookshelf->get();
    }
}
