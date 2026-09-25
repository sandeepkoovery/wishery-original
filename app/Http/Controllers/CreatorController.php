<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CreatorController extends Controller
{
    /**
     * Display the creator onboarding form.
     */
    public function index()
    {
        return view('creator');
    }

    /**
     * Store a newly created creator application.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'instagram_followed' => 'required|string|max:50',
            'follower_count' => 'required|string|max:100',
            'content_niche' => 'required|string|max:100',
            'content_niche_other' => 'nullable|string|max:100',
            'state' => 'required|string|max:100',
            'district' => 'required|string|max:100',
            'commercials' => 'required|string|max:255',
            'instagram_link' => 'required|string|max:255',
            'contact_number' => 'required|string|max:50',
        ]);

        // If 'Other' was chosen for content niche and specific niche provided
        if ($validated['content_niche'] === 'Other' && !empty($validated['content_niche_other'])) {
            $validated['content_niche'] = 'Other: ' . $validated['content_niche_other'];
        }

        try {
            $creator = Creator::create([
                'full_name' => $validated['full_name'],
                'instagram_followed' => $validated['instagram_followed'],
                'follower_count' => $validated['follower_count'],
                'content_niche' => $validated['content_niche'],
                'state' => $validated['state'],
                'district' => $validated['district'],
                'commercials' => $validated['commercials'],
                'instagram_link' => $validated['instagram_link'],
                'contact_number' => $validated['contact_number'],
                'ip_address' => $request->ip(),
                'status' => 'pending',
            ]);

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Thank you! Your response has been recorded.',
                    'id' => $creator->id,
                ]);
            }

            return redirect()->route('creator.index')->with('success', 'Your response has been recorded.');
        } catch (\Exception $e) {
            Log::error('Error saving creator application: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
                'payload' => $request->except(['_token'])
            ]);

            if ($request->expectsJson() || $request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'An error occurred while saving your details. Please try again.',
                ], 500);
            }

            return back()->withInput()->with('error', 'An error occurred while saving your details. Please try again.');
        }
    }
}
