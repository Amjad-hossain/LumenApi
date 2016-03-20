<?php namespace App;

use Illuminate\Database\Eloquent\Model;



/**
 * @SWG\Definition(required={"title", "content"}, @SWG\Xml(name="HouseHoldActivities"))
 */
class HouseHoldActivities extends Model {

    /**
     * @SWG\Property(format="string")
     * @var string
     */
    protected $fillable = ['household_unique_code', 'name', 'sex', 'date_of_birth', 'maritial_status', 'education', 'relation_with_hh', 'occupasion', 'smoking', 'bettle_nut_chew', 'swimming', 'responder', 'injury_last_six', 'how_many_injury_last_six', 'interviewer_code'
        ,'c01','c02','c03','c04','c05','c06','c07','c08','c09','c10','c11',
        'e01','e02','e03','e04','e05','e06','e07','e08','e09','e10','e11',
        'e12','e13','e14','e15','e16','e17','e18','e19','e20','e21','e22',
        'e23','e24','e25','e26','e27','e28','e29','e30','e31','e32','e33',
        'g01','g02','g03','d01','d02','d03','d04','d05','d06','d07'
    ];
}