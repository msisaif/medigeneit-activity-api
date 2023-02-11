<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        $activity = Activity::query()
            ->create($request->data);

        return response([
            "message"   => "success",
            "data"      => $activity,
        ], 201);
    }
}
