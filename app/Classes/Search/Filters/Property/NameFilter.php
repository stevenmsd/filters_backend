<?php

namespace App\Classes\Search\Filters\Property;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class NameFilter
{
    public static function apply (Builder $query, Request $request){
        
        if ($request->name) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }
        
        return $query;
    }
}