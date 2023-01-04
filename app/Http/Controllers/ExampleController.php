<?php

namespace Modules\Task\Http\Controllers;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function test()
    {
        return response()->json([
            'hello' => 'hadi ass'
        ]);
    }
}
