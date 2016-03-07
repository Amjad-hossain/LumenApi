<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="/",
 *     host="localhost:8080/",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Rest API",
 *         @SWG\Contact(name="Md Amjad hossain", url=""),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */

class Controller extends BaseController
{
    //
}
