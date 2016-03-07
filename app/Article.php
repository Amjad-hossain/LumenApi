<?php namespace App;

use Illuminate\Database\Eloquent\Model;



/**
 * @SWG\Definition(required={"title", "content"}, @SWG\Xml(name="Pet"))
 */
class Article extends Model {

    /**
     * @SWG\Property(format="string")
     * @var string
     */
    protected $fillable = ['title', 'content'];
}
 