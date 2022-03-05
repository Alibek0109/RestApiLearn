<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::get();
        return view('welcome', ['data' => $countries]);
    }

    public function country() {
        return response()->json(Country::get(), 200);
    }

    public function countryById($id) {
        $country = Country::find($id);
        if(is_null($country) ) {
            return response()->json(['error' => true, 'message' => 'Not found'], 404);
        }
        return response()->json(Country::find($id), 200);
    }

    public function countrySave(Request $request) {
        $country = Country::create($request->all());
        return response()->json($country, 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function countryEdit(Request $request, Country $country)
    {
        $country->update($request->all());
        return response()->json($country, 200);
    }

    public function countryDelete(Request $request, Country $country)
    {
        $country->delete();
        return response()->json('', 204);
    }
}
