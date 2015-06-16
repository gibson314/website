<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Article;

use Carbon\Carbon;
//time


class ArticlesController extends Controller
{
    //
    public function index() {


        //$articles = Article::orderBy('published_at', 'desc') -> get();
        $articles = DB::query ('select * from articles');
        return view('articles.index', compact ('articles'));
    }

    public function show ($id) {

        $article = Article::find ($id);

        if (is_null ($article)) {
            abort (404);
        }

      // $article = Article :: findOrFail($id);
        return view ('articles.show', compact ('article'));
    }

    public function create () {
        return view ('articles.create');
    }


    public function store () {
        //$input = Request::all();

        $input['published_at'] = Carbon::now();

        Article::create ($input);

        return redirect ('about');
    }
}
