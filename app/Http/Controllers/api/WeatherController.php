<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Weather;
use Illuminate\Http\Request;
use App\Http\Resources\Weather as WeatherResources;
use App\Http\Resources\WeatherCollection;

class WeatherController extends Controller
{
    protected $clasificacion;

    public function __construct (Weather $weather)
    {
        $this->weather = $weather;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* traer datos  */
        $weather = Weather::all();
        return response()->json($weather);
       

        /* return new WeatherCollection($weather); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* crear */
        $weather = Weather::create($request->all());
        return response()->json(new WeatherResources($weather));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function show(Weather $weather)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weather $weather)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Weather  $weather
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weather $weather)
    {
        //
    }
}
