<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pollingController extends Controller
{
    public function getpuresult(){
        return response()->json(
        DB::select('select polling_unit_id,polling_unit_name, ward_name, lga_name,state_name from polling_unit join
         ward on(polling_unit.ward_id = ward.ward_id) join lga on (polling_unit.lga_id = lga.lga_id) join states on (lga.state_id = states.state_id) order by
         polling_unit.uniqueid,polling_unit.ward_id,polling_unit.lga_id, lga.state_id')
        );
    }
    public function getallpuresult(){
        return response()->json(
        DB::select('select * from announced_pu_results')
        ); 
    }
    public function getalllga(){
        return response()->json(
        DB::select('select * from lga')
        ); 
    }
    
    public function getallstate(){
        return response()->json(
        DB::select('select * from state')
        );
    }
    public function getallparties(){
        return response()->json(
        DB::select('select * from party')
        );
    }
    public function getallward(){
        return response()->json(
        DB::select('select * from ward')
        );
    }
    public function getallpu(){
        return response()->json(
        DB::select('select * from polling_unit')
        );
    }
    public function getlgabystate(Request $request){
        $stateid = $request->id;
        return response()->json(
        DB::select('select * from lga where state_id ='.$state_id.'')
        );
    }

    public function getlgaresltbypu(Request $request){
        $lgaid = $request->id;
        return response()->json(
            DB::select('select sum(party_score), party_abbreviation, lga_id from announced_pu_results join polling_unit on 
            ( announced_pu_results.polling_unit_uniqueid = polling_unit.uniqueid) group by party_abbreviation, lga_id where lga_id = '.$lgaid.'')
            );
    }


}
