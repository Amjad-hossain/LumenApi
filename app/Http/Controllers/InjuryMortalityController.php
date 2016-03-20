<?php

namespace App\Http\Controllers;

use Log;
use App\InjuryMortality;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class InjuryMortalityController
 *
 * @package App\Http\Controllers
 */
class InjuryMortalityController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/injuryactivity",
     *     summary="Find All InjuryActivity",
     *     description="Returns InjuryActivity overview.",
     *     operationId="index",
     *     produces={"application/xml", "application/json"},
     *     tags={"InjuryActivity"},
     *     @SWG\Response(
     *         response=200,
     *         description="InjuryActivity overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function index(){

        Log::info('index:: Showing All InjuryActivities: ');
        $InjuryMortality  = InjuryMortality::all();
        return response()->json($InjuryMortality);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @SWG\Get(
     *     path="api/injuryactivity/{household_unique_code}",
     *     summary="Find All InjuryActivity",
     *     description="Returns InjuryActivity overview.",
     *     operationId="getInjuryActivities",
     *     produces={"application/xml", "application/json"},
     *     tags={"InjuryActivity"},
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
     *         description="InjuryActivity overview."
     *     ),
     *     @SWG\Response(
     *         response=401,
     *         description="Unauthorized action.",
     *     )
     * )
     */
    public function getInjuryActivities($id){

        Log::info('getInjuryActivities:: Get InjuryActivities by household_unique_code: '.$id);
        $InjuryMortality  = InjuryMortality::where('household_unique_code', $id)->get();
        return response()->json($InjuryMortality);
    }
    /**
     * @SWG\Post(
     *     path="api/injuryactivity",
     *     tags={"InjuryActivity"},
     *     operationId="updateInjuryActivity",
     *     summary="Update an existing InjuryActivity",
     *     description="",
     *     consumes={"application/json", "application/xml"},
     *     produces={"application/xml", "application/json"},
     *
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="household_unique_code is mandatory otherwise you will loose data object that needs to be added to the store[f01-f33]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/InjuryMortality"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="InjuryMortality not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function createInjuryMortality(Request $request){

        Log::info('createInjuryMortality:: request: '.$request);
        Log::info('createInjuryMortality:: Update Injury Morbidity by id.');


            if (empty($request->input('household_unique_code'))) {
                Log::info('household_unique_code:: empty: ');
            }
        Log::info('household_unique_code:: request: '.$request);
        $InjuryMortality = InjuryMortality::create( $request->all());

        Log::info('createInjuryMortality:: HouseHold InjuryMorbidity updated');
        return response()->json($InjuryMortality);
    }


    /**
     * @SWG\Put(
     *     path="api/injuryactivity/roadtransportinjury/{household_unique_code}",
     *     tags={"InjuryActivity"},
     *     operationId="updateInjuryActivity",
     *     summary="Update an existing InjuryActivity",
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
     *         description="InjuryActivity object that needs to be added to the store[h01-h09]",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/InjuryMortality"),
     *     ),
     *     @SWG\Response(
     *         response=400,
     *         description="Invalid household_unique_code supplied",
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="InjuryMortality not found",
     *     ),
     *     @SWG\Response(
     *         response=405,
     *         description="Validation exception",
     *     ),
     *     security={{"petstore_auth":{"write:pets", "read:pets"}}}
     * )
     */
    public function updateInjuryMortalityForRoadTransportInjuryActivity(Request $request,$id){
        Log::info('updateInjuryMortalityForRoadTransportInjuryActivity:: request: '.$request);
        Log::info('updateInjuryMortalityForRoadTransportInjuryActivity:: Update InjuryMortality for RoadTransportInjuryActivity by household_unique_code: '.$id);
        $InjuryMortality  = InjuryMortality::where('household_unique_code', $id)
            ->update(['h01'=> $request->input('h01'),
                'h02'=> $request->input('h02'),
                'h03'=> $request->input('h03'),
                'h04'=> $request->input('h04'),
                'h05'=> $request->input('h05'),
                'h06'=> $request->input('h06'),
                'h07'=> $request->input('h07'),
                'h08'=> $request->input('h08'),
                'h09'=> $request->input('h09')
            ]);
        Log::info('updateInjuryMortalityForRoadTransportInjuryActivity:: InjuryMortality DeathConfirmation updated');

        return response()->json($InjuryMortality);
    }

}

