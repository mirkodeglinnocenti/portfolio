<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [1,2,3,4,5,6,7,8,9,10];

        return response()->json([
            'response'=>'true',
            'result' => $data
        ]);
    }

}
