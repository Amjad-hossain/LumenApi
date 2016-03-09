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
     *     summary="Find All Articles",
     *     description="Returns article overview.",
     *     operationId="index",
     *     produces={"application/xml", "application/json"},
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/article/{id}",
     *     summary="Find All Articles",
     *     description="Returns article overview.",
     *     operationId="index",
     *     produces={"application/xml", "application/json"},
     *     tags={"Article"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
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
    public function getArticle($id){

        $article  = Article::find($id);
        return response()->json($article);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="api/article",
     *     summary="Save Articles",
     *     description="",
     *     operationId="saveArticle",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     tags={"Article"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="Articles that needs to be added to the store",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/Article"),
     *     ),
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

    public function saveArticle(Request $request){

        $article = Article::create($request->all());

        return response()->json($article);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *   path="api/article/{id}",
     *   tags={"Article"},
     *   summary="Delete article",
     *   description="",
     *   operationId="deleteArticle",
     *     consumes={"application/xml", "application/json", "multipart/form-data", "application/x-www-form-urlencoded"},
     *     produces={"application/xml", "application/json"},
     *     tags={"Article"},
     *     @SWG\Parameter(
     *         description="Article id to delete",
     *         in="path",
     *         name="id",
     *         required=true,
     *         type="integer",
     *         format="int64"
     *     ),
     *
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid pet value"
     *     )
     * )
     */
    public function deleteArticle($id){
        $article  = Article::find($id);

        $article->delete();

        return response()->json('success');
    }

    /**
     * @SWG\Put(
     *     path="api/article/{id}",
     *     tags={"Article"},
     *     operationId="updateArticle",
     *     summary="Update an existing article",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="id",
     *         in="path",
     *         description="Id to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="Article object that needs to be added to the store",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/Article"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateArticle(Request $request,$id){
        $article  = Article::find($id);

        $article->title = $request->input('title');
        $article->content = $request->input('content');

        $article->save();

        return response()->json($article);
    }

}

