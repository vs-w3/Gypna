<?php

namespace App\Http\Controllers;

use App\Managers\EventManager;
use App\Models\Event;
use App\Models\TrixRichTextTranslation;
use Illuminate\Http\Request;
use Te7aHoudini\LaravelTrix\Models\TrixRichText;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('app.event.index')->with('events', Event::all());
        return view('app.event.index')->with('events', EventManager::getEvents());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        //app()->setlocale('en');
        return view('admin.event.index')->with('events', Event::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {//dd('ddddddd');
        // $validatedData = $request->validate([
        //     'event_name_ka' => ['required', 'min:5'],
        //     'event_content_ka' => ['required'],
        // ]);
        $event = EventManager::createEvent(
            request('event_name_ka'),
            request('event_name_en'),
            request('event_content_ka'),
            request('event_content_en'),
            request('event_start_time'),
            request('event_end_time'),
            request('event_active'),
        );

        return redirect(route('admin-event-edit', ['event' => $event->id]));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($locale, Event $event)
    {
        return view('app.event.show')
            ->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit')
            ->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        EventManager::editEvent(
            $event,
            request('event_name_ka'),
            request('event_name_en'),
            request('event_content_ka'),
            request('event_content_en'),
            request('event_start_time'),
            request('event_end_time'),
            request('event_active'),
        );

        return redirect(route('admin-event-edit', ['event' => $event->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
