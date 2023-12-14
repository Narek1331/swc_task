<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Event\Store as StoreRequest;
use App\Http\Requests\Event\Participate as ParticipateRequest;
use App\Services\EventService;

class EventController extends Controller
{
    /**
     * Get a new EventService instance.
     *
     * @return void
     */
    public function __construct(EventService $event_service)
    {
        $this->event_service = $event_service;
    }

    /**
     * Get all events.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $event = $this->event_service->all(auth()->user()->id);

        return response()->json([
            'status' => true,
            'error' => null,
            'result' => $event
        ],200);

    }

    /**
     * Destroy event.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(int $event_id)
    {
        $message = $this->event_service->destroy($event_id, auth()->user()->id);

        return response()->json([
            'status' => true,
            'error' => $message
        ],200);

    }

    /**
     * Get my events.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $event = $this->event_service->getByUserId(auth()->user()->id);

        return response()->json([
            'status' => true,
            'error' => null,
            'result' => $event
        ],200);

    }

    /**
     * Store event.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreRequest $data)
    {
        $event = $this->event_service->store($data['title'],$data['text'],auth()->user()->id);

        return response()->json([
            'status' => true,
            'error' => null,
            'message' => 'Event created successfully',
            'result' => $event
        ],201);

    }

    /**
     * Participate event.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function participate(ParticipateRequest $data)
    {
        $participate = $this->event_service->participate($data['event_id'],auth()->user()->id,$data['action']);

        return response()->json([
            'status' => true,
            'error' => null,
            'message' => 'success'
        ],201);

    }
}
