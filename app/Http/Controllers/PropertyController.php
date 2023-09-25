<?php

namespace App\Http\Controllers;

use App\Classes\Search\SearchBuilder;
use Illuminate\Http\Request;
use App\Models\Property;



class PropertyController extends Controller
{
    public function filter(Request $request)
    {
       /* $query =(new PropertySearch)->filter($request); */

       $builder = new SearchBuilder('Property',$request);
       $query = $builder->filter();
       return response()->json($query->get());
    }
}
