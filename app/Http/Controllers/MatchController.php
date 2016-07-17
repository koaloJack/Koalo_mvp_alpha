<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;
use App\Search_String;
use App\Topic;


class MatchController extends Controller
{
    //
    public function searchHandling($searchstring,$user_id){
        $wcstring="%";
        $wcstring .=$searchstring;
        $wcstring .="%";
        $result = DB::table('searchstrings')->where('searchstring', 'like',  $wcstring)
                        ->get();
        $id=$user_id;


        return view("result")->with('search',$result);

    }
}
