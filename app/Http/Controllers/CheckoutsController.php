<?php

namespace App\Http\Controllers;


use App\Customer;
use App\Order;
use App\Country;
use App\Http\Requests;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Image;



class CheckoutsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $countries=Country::orderBy('name','ASC')->get();


        return view('checkout2',compact('countries'));
    }
    public function getStates($id) {
        $states = \DB::table("states")->where("country_id",$id)->pluck("name","id");

        return json_encode($states);

    }
    
   }