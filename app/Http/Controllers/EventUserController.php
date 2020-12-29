<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\point;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eu = EventUser::where('user_id',Auth::id())->get();
//        dd($eu);
        return view('user.event.index', compact('eu'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $points = point::all();
        $dosens = dosen::all();
        $datas = Event::all();
        return view('user.event.adddata', compact('dosens', 'datas', 'points'));
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
//        Event::create($request->all());
//        User::create($request->all());
        EventUser::create($request->all());
        $points = point::all();
        $dosens = dosen::all();
        $datas = Event::all();
        return view('user.event.adddata', compact('dosens', 'datas', 'points'));


//        $this->validateData($request);
//        $attend = Auth::user()->attends_user()->syncWithoutDetaching($request->event_id, ['is_approved' => '0']);
//        return empty($attend) ? redirect()->back()->with('Fail', "Failed to submit request")
//            : redirect()->back()->with('Success', 'Request Submitted');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateData (Request $request){
        return $request->validate([
            'event_id'=>'required',
        ]);
    }
}
