<?php

namespace App\Http\Controllers;

use App\Models\Battery;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BatteryController extends Controller
{
    public function __construct()
    {
        // check for authorization
        $this->middleware('auth:api');
    }

    public function index()
    {
        try {
            $battries = Battery::all();
            return response()->json([
                'message' => 'success',
                'data' => $battries
            ], 200);
        } catch (Exception $e) {
            // TODO: system logging
            return response()->json([
                'message' => 'failed to get all data'
            ], 501);
        }
    }

    public function store(Request $request)
    {
        // data validation
        $validator = Validator::make($request->all(), [
            'name' =>   'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
