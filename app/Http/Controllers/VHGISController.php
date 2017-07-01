<?php

namespace App\Http\Controllers;

use App\Bounds;
use App\Event;
use App\NamePlace;
use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VHGISController extends Controller
{
    public function getHomeVHGIS(){
    	return view('welcome');
    }

    public function getBoundsByYear(Request $request){
    	$input = $request->input();
    	if($input == null){
    		$year = "-700";
    	}else{
    		$year = $input['year'];
    	}

    	$result = Bounds::select("*")->where('year', '<=', $year)->orderBy('year', 'desc')
    								->skip(0)->take(1)
    								->get();
    	return response()->json(["result" => $result[0]]);
    }

    public function getHistoryName(Request $request){
    	$input = $request->input();
    	if($input == null){
    		$year = "-700";
    	}else{
    		$year = $input['year'];
    	}
        $list_name = NamePlace::select('name', 'year', 'place_id')->where('year', '<=', $year)
                            ->orderBy('place_id', 'ASC')
                            ->orderBy('year', 'ASC')->get();

        $id = -1;
        $index = -1;
        $rs = array();
    	foreach ($list_name as $key => $value) {
    		if($value->place_id != $id){
                $o = new \stdClass();
                $o->lat = $value->place->lat;
                $o->long = $value->place->long;
                $o->year = $value->year;
                $o->name = $value->name;
                array_push($rs, $o);

                $id = $value->place_id;
                $index++;
            }else{
                $rs[$index]->year = $value->year;
                $rs[$index]->name = $value->name;
            }
    	}
    	return response()->json(["result" => $rs]);
    }

    public function getEventList(Request $request){
        $input = $request->input();
        if($input == null){
            $time = "-700";
        }else{
            $year = $input['year'];
            $month = $input['month'];
            $day = $input['day'];
            $size = $input['size'];
        }
        //year
        switch ($size) {
        case 1: //year
            $time = $year;
            $list_event = Event::select('*')->whereYear('time_end', '>=', $time)
                            ->whereYear('time_start', '<=', $time)
                            ->orderBy('place_id', 'ASC')
                            ->orderBy('time_start', 'ASC')->get();
            break;
        case 2:
            $time_1 = $year."-".$month."-1";
            if($month < 12){    
                $time_2 = $year."-".($month + 1)."-1";
            }else{
                $time_2 = ($year+1)."-1-1";
            }
            $list_event = Event::select('*')
                            ->where('time_start', '<', $time_2)
                            ->where('time_end', '>', $time_1)
                            ->orderBy('place_id', 'ASC')
                            ->orderBy('time_start', 'ASC')->get();
            break;
        case 3:
            $time = $year."-".$month."-".$day;
            $list_event = Event::select('*')->where('time_end', '>=', $time)
                            ->where('time_start', '<=', $time)
                            ->orderBy('place_id', 'ASC')
                            ->orderBy('time_start', 'ASC')->get();
            break;
        }
    
        foreach ($list_event as $key => $value) {
            $value->place;
        }
        return response()->json(["result" => $list_event]);
    }
}
