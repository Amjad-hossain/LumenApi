<?php

namespace App\Http\Controllers;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ArticleController
 *
 * @package App\Http\Controllers
 */
class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/article",
     *     description="Returns article overview.",
     *     operationId="api.article.index",
     *     produces={"application/json"},
     *     tags={"Article"},
     *     @SWG\Response(
     *         response=200,
     *         description="Article overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(){

        $articles  = Article::all();
        return response()->json($articles);

    }

    public function getArticle($id){

        $article  = Article::find($id);
        return response()->json($article);
    }

    public function saveArticle(Request $request){

        $article = Article::create($request->all());

        return response()->json($article);

    }

    public function deleteArticle($id){
        $article  = Article::find($id);

        $article->delete();

        return response()->json('success');
    }

    public function updateArticle(Request $request,$id){
        $article  = Article::find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        return response()->json($article);
    }

}

