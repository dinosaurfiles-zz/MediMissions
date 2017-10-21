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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mission  $mission
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        // $equipments = Equipment::where('mission_id', $mission->id)->get();
        // $equipmentlist = DB::table('equipmentlist')->where('mission_id', $mission->id)->get();

        $equipments = DB::table('equipments')
            ->leftjoin('equipmentlist', function($join){
                $join->on('equipments.mission_id', '=', 'equipmentlist.mission_id');
            })
            ->get();

        $volunteers = DB::table('volunteers')
            ->leftjoin('volunteerlist', function($join){
                $join->on('volunteers.id', '=', 'volunteerlist.volunteer_id');
            })
            ->get();

        // dd($equipments);

        // $equipmentlisting = DB::table('equipmentlist')->where('mission_id', $mission->id)->get();
        // dd($equipments);
        // $data = array(
        //     'mission' => $mission,
        //     'equipments' => $equipments,
        // );
        // error_log($equipments);
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
