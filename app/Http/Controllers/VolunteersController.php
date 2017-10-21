<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Mission;
use App\Volunteer;
use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function session($volunteerid){
         Session::put('volunteerid', $volunteerid);
         return redirect()->action('VolunteersController@index');
     }


     public function index()
     {
         $missions = Mission::where('status', 1)->get();
         $volunteers = Volunteer::all();
         return view('volunteer.index', compact('missions', 'volunteers'));
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
    public function store(Mission $mission, Volunteer $volunteer)
    {
        DB::table('volunteerlist')->insert([
            'mission_id' => $mission->id,
            'volunteer_id' => Session::get('volunteerid')
        ]);

        return redirect()->action('MissionsController@show', ['mission' => $mission->id]
);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Volunteer $volunteer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //
    }
}
