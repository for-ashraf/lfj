<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventsController extends Controller
{
    public function loadEvents()
    {
        return Events::all();
    }
    public function loadCategories()
    {
        return Categories::all();
    }

    public function index()
    {
        $events = $this->loadEvents();
        return view('events.index', compact('events'));
    }

    public function show($id)
    {
        $event = Events::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function create()
    {
        $categories = $this->loadCategories(); // Call the getAuthorNames function

        return view('events.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Log::debug($request->all());
        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
            'event_from_date' => 'nullable|date',
            'event_to_date' => 'nullable|date',
            'event_location' => 'nullable|string|max:255',
            'gps_location' => 'nullable|string|max:40',
            'event_website' => 'nullable|string|max:255',
            'event_category' => 'nullable|string|max:255',
            'event_organizer' => 'nullable|string|max:255',
            'event_contact' => 'nullable|string|max:255',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'registration_link' => 'nullable|string|max:200',
            // Add any other validation rules for the event fields
        ]);

        $event = Events::create($validatedData);
        try {
            if ($request->hasFile('event_image')) {
                $file = $request->file('event_image');
                $fileName = $event->event_id . '.' . $file->getClientOriginalExtension();
                $file->move('uploads/events/', $fileName);
                $event->update(['event_image' => $fileName]);
            }
        } catch (\Exception $e) {
            Log::error('File upload failed: ' . $e->getMessage());
        }

        return redirect()->route('events.index')->with('success', 'Event added successfully!');
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);
        $categories = $this->loadCategories(); // Call the getAuthorNames function

      

        return view('events.edit', compact('event','categories'));
    }

    public function update(Request $request, $id)
    {
        $event = Events::findOrFail($id);

        $validatedData = $request->validate([
            'event_name' => 'required|string|max:255',
            'event_description' => 'nullable|string',
            'event_from_date' => 'nullable|date',
            'event_to_date' => 'nullable|date',
            'event_location' => 'nullable|string|max:255',
            'gps_location' => 'required|string|max:40',
            'event_website' => 'nullable|string|max:255',
            'event_category' => 'nullable|string|max:255',
            'event_organizer' => 'nullable|string|max:255',
            'event_contact' => 'nullable|string|max:255',
            'event_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'registration_link' => 'nullable|string|max:200',
            // Add any other validation rules for the event fields
        ]);

        $validatedData['event_description'] = strip_tags($validatedData['event_description']);
        $validatedData['event_description'] = trim($validatedData['event_description']);

        if ($request->hasFile('event_image')) {
            $file = $request->file('event_image');
            if ($event->event_image && file_exists(public_path('uploads/events/' . $event->event_image))) {
                unlink(public_path('uploads/events/' . $event->event_image));
            }
            $fileName = $event->event_id . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/events', $fileName);
            $validatedData['event_image'] = $fileName;
        }

        $event->update($validatedData);
        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        if ($event->event_image) {
            $existingFilePath = public_path('uploads/events/' . $event->event_image);
            if (file_exists($existingFilePath)) {
                unlink($existingFilePath);
            }
        }
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
  

    }
}
