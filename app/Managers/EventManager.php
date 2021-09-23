<?php

namespace App\Managers;

use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventManager 
{
    /**
     * Create Event Step One,
     * Returns Stored Event
     * 
     * @param string $name_ka
     * @param string $name_en
     * @param string $description_ka
     * @param string $description_en
     * @param string $start_time
     * @param string $end_time
     * @param boolean $active
     * @return App\Models\Event $savedEvent
     */
    public static function createEvent($name_ka, $name_en = false, $description_ka, $description_en = false, $start_time, $end_time, $active)
    {
        //dd($name_ka, $name_en, $description_ka, $description_en, $start_time, $end_time, $active);
        
        $event = new Event();
        $event->getTranslationOrNew('ka')->name = $name_ka;
        $name_en ? $event->getTranslationOrNew('en')->name = $name_en : '';
        $event->event_start = $start_time;
        $event->event_end = $end_time;
        $event->active = 'on' == $active ? 1 : 0;
        $event->save();

        TrixManager::SaveRecord('content', $event, ['ka' => $description_ka, 'en' => $description_en]);
        return $event;
    }

    /**
     * Create Event Step One,
     * Returns Stored Event
     * 
     * @param App\Models\Event $event
     * @param string $name_ka
     * @param string $name_en
     * @param string $description_ka
     * @param string $description_en
     * @param string $start_time
     * @param string $end_time
     * @param boolean $active
     * @return App\Models\Event $savedEvent
     */
    public static function editEvent($event, $name_ka, $name_en = false, $description_ka, $description_en = false, $start_time, $end_time, $active)
    {
        $event->getTranslationOrNew('ka')->name = $name_ka;
        $name_en ? $event->getTranslationOrNew('en')->name = $name_en : '';
        $event->event_start = $start_time;
        $event->event_end = $end_time;
        $event->active = 'on' == $active || 1 == $active ? 1 : 0;
        $event->save();
        TrixManager::editRecord($event->eventTrix, 'content', ['ka' => $description_ka, 'en' => $description_en]);
        return $event;
    }

    /**
     * Get Events
     */
    public static function getEvents()
    {
        $trix = DB::table('trix_rich_text_translations')
            ->join('trix_rich_texts','trix_rich_text_translations.trix_rich_text_id', '=', 'trix_rich_texts.id')
            ->where('locale', app()->getlocale())
            ->where('model_type', 'App\Models\Event')
            ->select('trix_rich_texts.id as trix_id', 'trix_rich_text_translations.id as trix_tr_id', 'trix_rich_texts.model_id', 'trix_rich_text_translations.content');

        $events = DB::table('events')
        ->joinSub($trix, 'trix_rich_texts', function($join) {
                $join->on('events.id', '=', 'trix_rich_texts.model_id');
            })
            ->join('event_translations', function($join) {
                $join->on('events.id', '=', 'event_translations.event_id')
                ->where('locale', app()->getlocale());
            })
            ->select(
                'events.id as id',
                'events.img as img',
                'events.event_start', 'event_start',
                'events.event_end', 'event_end',
                'event_translations.name as name',
                'trix_rich_texts.content', 'content')
            ->get();
        return $events;
    }

    /**
     * Get Event Image
     */
    public static function getEventImage($event)
    {
        return Storage::url(FileManager::publicImagePath(). '/' .$event->img);
    }
}