<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventUser;
use App\Models\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = EventUser::all();
        return view('admin.event.index',compact('events'));
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
        $user = User::findOrFail($request->user_id);
        $attend = $user->attends_user()->syncWithoutDetaching($request->event_id, ['is_approved' => '0']);
        return empty($attend) ? redirect()->back()->with('Fail', "Failed to add new guest")
            : redirect()->back()->with('Success', 'Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $ev = EventUser::all();
//        return view('admin.event.detail',compact('ev'));
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

    public function approve($id, Request $request){
        $event = EventUser::where('id', $request->event_id)->first();
        $event->update([
            'is_approved' => '1',
        ]);

        return empty($event) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Approved');
    }

    public function decline($id, Request $request){
        $event = EventUser::where('id', $request->event_id)->first();
        $event->update([
            'is_approved' => '2',
        ]);

        return empty($event) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Approved');
    }
}
