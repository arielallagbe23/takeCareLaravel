<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\RealCommande;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function addArticle() 
    {
        return view('add-article');
    }

    public function storeArticle(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $articleimage = $request->file('file');
        $imageName = time().'.'.$articleimage->extension();
        $articleimage->move(public_path('images'),$imageName);

        $nbarticlecmd = $request->nbarticlecmd;
      
        $article = new Article();
        $article->name = $name;
        $article->price = $price;
        $article->description = $description;
        $article->articleimage = $imageName;

        $realcommande = new RealCommande();

        $realcommande->nbarticlecmd = $nbarticlecmd;
        
        $article->save();
        return back()->with('article_added','Article record has been inserted');
    }

    public function allArticles() 
    {
        $articles = Article::all();
        $articles = DB::table('articles')
        ->orderBy('name','asc')
        ->get();
        return view('all-article',compact('articles'));
        //return response()->json($articles, 200);

    }

    public function allArticles2() 
    {
        $articles = Article::all();
        $articles = DB::table('articles')
        ->orderBy('name','asc')
        ->get();

        return response()->json($articles, 200);
    }

    public function getImage($imageName)
    {
        return response()->file(public_path('images')."/".$imageName);
    }

    public function deleteArticle($id)
    {
        $article = Article::where('id', $id)->delete();
        return back()->with('article_deleted','Article deleted successfully !');
    }

    public function updateArticle(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $description = $request->description;
        $articleimage = $request->file('file');
        $imageName = time().'.'.$articleimage->extension();
        $articleimage->move(public_path('images'),$imageName);
       

        $article = Article::find($request->id);
        
        $article->name = $name;
        $article->price = $price;
        $article->description = $description;
        $article->articleimage = $imageName;
      
        $article->save();
        return back()->with('article_updated','article updated successfully');
    }

    public function editArticle($id)
    {
        $article = Article::find($id);
        return view ('edit-article',compact('article'));
    }




}

