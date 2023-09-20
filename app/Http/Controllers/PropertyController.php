<?php

namespace App\Http\Controllers;

use App\Classes\Search\Property\PropertySearch;
use Illuminate\Http\Request;



class PropertyController extends Controller
{
    public function filter(Request $request)
    {
       $query =(new PropertySearch)->filter($request);

       return response()->json($query->get());
    }
}
