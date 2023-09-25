<?php

namespace App\Classes\Search\Filters\Property;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FeatureFilter
{
    public static function apply (Builder $query, Request $request){
        if ($request->features) {
            $query->whereHas('features', function ($q) use ($request) {
                $q->whereIn('features.id', $request->features);
            });
        }
        return $query;
    }
}