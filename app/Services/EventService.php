<?php
namespace App\Services;

use App\Models\Event;

class EventService{

    /**
     * Create event.
     */
    public function store(string $title, string $text, int $user_id){
        return Event::create([
            "title"=> $title,
            "text"=> $text,
            "user_id"=> $user_id
        ]);
    }

    /**
     * Get my events.
     */
    public function getByUserId(int $user_id){
        return Event::with('participants')
        ->where("user_id", $user_id)->get();
    }

    /**
     * Get all events.
     */
    public function all(){
        return Event::with('participants')
        ->get();
    }

    public function participate(int $event_id, int $user_id, string|null $action){
        $event = Event::find($event_id);

        if($action == null || $action == "add"){
            $event->participants()->attach($user_id);
        }else{
            $event->participants()->detach($user_id);

        }

        return $event;
    }

    /**
     * Destroy event by event_id.
     */
    public function destroy(int $event_id, int $user_id){
        $event = Event::find($event_id);

        if(!$event){
            return 'Not Event Data';
        }


        if($event['user_id'] != $user_id){
            return 'You Have Not Access To Delete this event';

        }

        $event->delete();

        return null;
    }

}

?>
