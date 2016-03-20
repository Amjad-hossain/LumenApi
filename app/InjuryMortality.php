<?php namespace App;

use Illuminate\Database\Eloquent\Model;



/**
 * @SWG\Definition(required={"title", "content"}, @SWG\Xml(name="InjuryMortality"))
 */

class InjuryMortality extends Model {

    /**
     * @SWG\Property(format="string")
     * @var string
     */

    protected $fillable = [
        'household_unique_code','f01','f02','f03','f04','f05','f06','f07','f08','f09','f10','f11',
        'f12','f13','f14','f15','f16','f17','f18','f19','f20','f21','f22',
        'f23','f24','f25','f26','f27','f28','f29','f30','f31','f32','f33',
        'h01','h02','h03','h04','h05','h06','h07','h08','h09'
    ];
}