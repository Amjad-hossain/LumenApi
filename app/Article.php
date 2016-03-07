<?php namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Article
 *
 * @package App
 *
 * @SWG\Definition(
 *   definition="Article",
 *   required={"title"}
 * )
 *
 */
class Article extends Model {

    /**
     * @SWG\Property(format="string")
     * @var string
     */
    protected $fillable = ['title', 'content'];
}
 