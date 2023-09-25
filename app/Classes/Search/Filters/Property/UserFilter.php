<?php

namespace App\Classes\Search\Filters\Property;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class UserFilter
{
    /* public static function apply (Builder $query, Request $request){
        
        if ($request->user) {
            $query->where('user_id', $request->user);
        }
        
        return $query;
    } */

    public static function apply(Builder $query, Request $request)
    {
        if ($request->input('user')) { // Accede al valor del parámetro "user"
            $query->where('user_id', $request->input('user')); // Usar input() para obtener el valor
        }
        
        return $query;
    }
}