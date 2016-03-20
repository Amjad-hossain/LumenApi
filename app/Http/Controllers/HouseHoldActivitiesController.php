<?php

namespace App\Http\Controllers;

use Log;
use App\HouseHoldActivities;
use App\InjuryMortality;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class HouseHoldActivitiesController
 *
 * @package App\Http\Controllers
 */
class HouseHoldActivitiesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/household",
     *     summary="Find All HouseHoldActivitiess",
     *     description="Returns HouseHoldActivities overview.",
     *     operationId="index",
     *     produces={"application/xml", "application/json"},
     *     tags={"HouseHoldActivities"},
     *     @SWG\Response(
     *         response=200,
     *         description="HouseHoldActivities overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(){

        Log::info('index:: Showing All HouseHoldActivities: ');
        $HouseHoldActivitiess  = HouseHoldActivities::all();
        return response()->json($HouseHoldActivitiess);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/household/{household_unique_code}",
     *     summary="Find All HouseHoldActivitiess",
     *     description="Returns HouseHoldActivities overview.",
     *     operationId="index",
     *     produces={"application/xml", "application/json"},
     *     tags={"HouseHoldActivities"},
     *     @SWG\Parameter(
     *         name="household_unique_code",
     *         in="path",
     *         description="household_unique_code to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="HouseHoldActivities overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function getHouseHoldActivities($id){

        Log::info('getHouseHoldActivities:: Get HouseHoldActivities by household_unique_code: '.$id);
        $HouseHoldActivities  = HouseHoldActivities::where('household_unique_code', $id)->get();
        return response()->json($HouseHoldActivities);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Post(
     *     path="api/household",
     *     summary="Save HouseHoldActivitiess",
     *     description="",
     *     operationId="saveHouseHoldActivities",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     tags={"HouseHoldActivities"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="HouseHoldActivitiess that needs to be added to the store",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/HouseHoldActivities"),
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="HouseHoldActivities overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */

    public function saveHouseHoldActivities(Request $request){
        Log::info('saveHouseHoldActivities:: request: '.$request);
        Log::info('saveHouseHoldActivities:: Save HouseHoldActivities.');
        $HouseHoldActivities = HouseHoldActivities::create($request->all());
        return response()->json($HouseHoldActivities);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Delete(
     *   path="api/household/{id}",
     *   tags={"HouseHoldActivities"},
     *   summary="Delete HouseHoldActivities",
     *   description="",
     *   operationId="deleteHouseHoldActivities",
     *     consumes={"application/xml", "application/json", "multipart/form-data", "application/x-www-form-urlencoded"},
     *     produces={"application/xml", "application/json"},
     *     tags={"HouseHoldActivities"},
     *     @SWG\Parameter(
     *         description="HouseHoldActivities id to delete",
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
    public function deleteHouseHoldActivities($id){

        Log::info('deleteHouseHoldActivities:: Delete HouseHoldActivities by id.');
        $HouseHoldActivities  = HouseHoldActivities::find($id);
        $HouseHoldActivities->delete();
        return response()->json('success');
    }

    /**
     * @SWG\Put(
     *     path="api/household/characteristics/{household_unique_code}",
     *     tags={"HouseHoldActivities"},
     *     operationId="updateHouseHoldActivities",
     *     summary="Update an existing HouseHoldActivities",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="household_unique_code",
     *         in="path",
     *         description="household_unique_code to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="HouseHoldActivities object that needs to be added to the store[c01-c11]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/HouseHoldActivities"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="HouseHold not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateHouseHoldCharacteritics(Request $request,$id){
        Log::info('updateHouseHoldCharacteritics:: request: '.$request);
        Log::info('updateHouseHoldActivities:: Update HouseHoldActivities by household_unique_code: '.$id);
        $HouseHoldActivities  = HouseHoldActivities::where('household_unique_code', $id)
            ->update(['c01'=> $request->input('c01'),
                'c02'=> $request->input('c02'),
                'c03'=> $request->input('c03'),
                'c04'=> $request->input('c04'),
                'c05'=> $request->input('c05'),
                'c06'=> $request->input('c06'),
                'c07'=> $request->input('c07'),
                'c08'=> $request->input('c08'),
                'c09'=> $request->input('c09'),
                'c10'=> $request->input('c10'),
                'c11'=> $request->input('c11')
             ]);
        Log::info('updateHouseHoldActivities:: HouseHold Characteritics updated');

        return response()->json($HouseHoldActivities);
    }

    /**
     * @SWG\Put(
     *     path="api/household/injurymorbidity/{household_unique_code}",
     *     tags={"HouseHoldActivities"},
     *     operationId="updateHouseHoldActivities",
     *     summary="Update an existing HouseHoldActivities",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="household_unique_code",
     *         in="path",
     *         description="household_unique_code to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="HouseHoldActivities object that needs to be added to the store[e01-e33]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/HouseHoldActivities"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="HouseHold not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateInjuryMorbidity(Request $request,$id){

        Log::info('saveHouseHoldActivities:: request: '.$request);
        Log::info('updateInjuryMorbidity:: Update Injury Morbidity by id.');

        $HouseHoldActivities  = HouseHoldActivities::where('household_unique_code', $id)
            ->update(['e01'=> $request->input('e01'),
                'e02'=> $request->input('e02'),
                'e03'=> $request->input('e03'),
                'e04'=> $request->input('e04'),
                'e05'=> $request->input('e05'),
                'e06'=> $request->input('e06'),
                'e07'=> $request->input('e07'),
                'e08'=> $request->input('e08'),
                'e09'=> $request->input('e09'),
                'e10'=> $request->input('e10'),
                'e11'=> $request->input('e11'),
                'e12'=> $request->input('e12'),
                'e13'=> $request->input('e13'),
                'e14'=> $request->input('e14'),
                'e15'=> $request->input('e15'),
                'e16'=> $request->input('e16'),
                'e17'=> $request->input('e17'),
                'e18'=> $request->input('e18'),
                'e19'=> $request->input('e19'),
                'e20'=> $request->input('e20'),
                'e21'=> $request->input('e21'),
                'e22'=> $request->input('e22'),
                'e23'=> $request->input('e23'),
                'e24'=> $request->input('e24'),
                'e25'=> $request->input('e25'),
                'e26'=> $request->input('e26'),
                'e27'=> $request->input('e27'),
                'e28'=> $request->input('e28'),
                'e29'=> $request->input('e29'),
                'e30'=> $request->input('e30'),
                'e31'=> $request->input('e31'),
                'e32'=> $request->input('e32'),
                'e33'=> $request->input('e33')
            ]);

        Log::info('updateInjuryMorbidity:: HouseHold InjuryMorbidity updated');
        return response()->json($HouseHoldActivities);
    }


    /**
     * @SWG\Put(
     *     path="api/household/suicideattemptactivity/{household_unique_code}",
     *     tags={"HouseHoldActivities"},
     *     operationId="updateHouseHoldActivities",
     *     summary="Update an existing HouseHoldActivities",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="household_unique_code",
     *         in="path",
     *         description="household_unique_code to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="HouseHoldActivities object that needs to be added to the store[[g01-g03]]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/HouseHoldActivities"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="HouseHold not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateHouseHoldSuicideAttemptActivity(Request $request,$id){
        Log::info('updateHouseHoldCharacteritics:: request: '.$request);
        Log::info('updateHouseHoldActivities:: Update HouseHoldActivities by household_unique_code: '.$id);
        $HouseHoldActivities  = HouseHoldActivities::where('household_unique_code', $id)
            ->update(['g01'=> $request->input('g01'),
                'g02'=> $request->input('g02'),
                'g03'=> $request->input('g03')
            ]);
        Log::info('updateHouseHoldActivities:: HouseHold suicide attempt activity updated');

        return response()->json($HouseHoldActivities);
    }

    /**
     * @SWG\Put(
     *     path="api/household/deathconfirmation/{household_unique_code}",
     *     tags={"HouseHoldActivities"},
     *     operationId="updateHouseHoldActivities",
     *     summary="Update an existing HouseHoldActivities",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *     @SWG\Parameter(
     *         name="household_unique_code",
     *         in="path",
     *         description="household_unique_code to filter by",
     *         required=true,
     *         type="string",
     *         @SWG\Items(type="string"),
     *         collectionFormat="multi"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="HouseHoldActivities object that needs to be added to the store[d01-d07]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/HouseHoldActivities"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="HouseHold not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateHouseHoldDeathConfirmation(Request $request,$id){
        Log::info('updateHouseHoldDeathConfirmation:: request: '.$request);
        Log::info('updateHouseHoldDeathConfirmation:: Update HouseHoldActivities by household_unique_code: '.$id);
        $HouseHoldActivities  = HouseHoldActivities::where('household_unique_code', $id)
            ->update(['d01'=> $request->input('d01'),
                'd02'=> $request->input('d02'),
                'd03'=> $request->input('d03'),
                'd04'=> $request->input('d04'),
                'd05'=> $request->input('d05'),
                'd06'=> $request->input('d06'),
                'd07'=> $request->input('d07')
            ]);
        Log::info('updateHouseHoldDeathConfirmation:: HouseHold DeathConfirmation updated');

        return response()->json($HouseHoldActivities);
    }



}

