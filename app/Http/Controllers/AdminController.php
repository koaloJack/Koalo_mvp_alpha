<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Topic;
use App\SearchString;

class AdminController extends Controller
{
    //

  public function createTopic($topic){

    $input= new Topic;
    $input->topic=$topic;
    $input->save();

    return view('welcome');
  }
  public function createSearchString($searchString,$topic_ID){

    $input= new SearchString;
    $input->table_id=$topic_ID;
    $input->searchstring=$searchString;
    $input->save();

    return view('welcome');
  }

}
