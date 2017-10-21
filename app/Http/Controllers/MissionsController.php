<?php

namespace App\Http\Controllers;

use DB;
use App\Mission;
use App\Equipment;
use App\Volunteer;
use Illuminate\Http\Request;

class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Mission::all();
        return view('mission.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mission.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('missions')->insert([
            'name' => $request->name,
            'details' => $request->details,
            'req_from_date' => $request->from_date,
            'req_to_date' => $request->to_date,
            'lat' => $request->lat,
            'lon' => $request->lon,
            'access_token' => 'bleh',
            'unit' => 'Iloilo Central Health Unit',
            'contact_person' => 'James Ledesma',
            'contact_no' => '09xx-xxx-xxx',
            'status' => 1
        ]);

        return redirect()->action('MissionsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        $equipments = DB::table('equipments')
            ->leftjoin('equipmentlist', function($join){
                $join->on('equipments.mission_id', '=', 'equipmentlist.mission_id');
            })
            ->get();

        $equipments = $equipments->where('mission_id', $mission->id);

        $volunteers = DB::table('volunteers')
            ->leftjoin('volunteerlist', function($join){
                $join->on('volunteers.id', '=', 'volunteerlist.volunteer_id');
            })
            ->get();

        $volunteers = $volunteers->where('mission_id', $mission->id);
        return view('mission.view', compact('mission', 'equipments', 'volunteers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function auth(Mission $mission)
    {
        return view('mission.auth', compact('mission'));
    }

    public function edit(Mission $mission)
    {
        return view('mission.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
