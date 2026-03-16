<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OnboardingSubmission;
use App\Services\OnboardService;

class OnboardingController extends Controller
{
    protected OnboardService $onboarding;

    public function __construct(OnboardService $onboarding)
    {
        $this->onboarding = $onboarding;
    }

    public function Get()
    {
        $data = $this->onboarding->obtainOnboarding();
        return view('Onboarding/onboarding', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'contact_name'  => 'required|string|max:255',
            'phone'         => 'required|string|max:50',
            'email'         => 'required|email|max:255',
            'business_type' => 'required|string|max:100',
            'address'       => 'required|string|max:500',
        ]);

        // Collect all form data
        $data = $request->only([
            // Step 1
            'business_name', 'dba_name', 'contact_name', 'contact_role',
            'phone', 'email', 'city', 'zip', 'business_type',
            'num_branches', 'address', 'gps_link', 'hours',
            // Step 2
            'orders_day', 'orders_week', 'peak_hours', 'avg_ticket',
            'delivery_radius', 'device_type', 'own_drivers', 'self_delivery',
            'uses_3pl', 'active_drivers',
            // Step 3
            'has_website', 'website_url', 'has_app', 'has_pos',
            // Step 4
            'integration_method',
            'cred_doordash_user', 'cred_doordash_pass',
            'cred_uber_user', 'cred_uber_pass',
            'cred_delivery_user', 'cred_delivery_pass',
            'cred_web_user', 'cred_web_pass',
            'integration_notes',
            // Step 5
            'legal_entity', 'ein', 'billing_address', 'payment_method',
            'billing_frequency', 'authorized_signer',
            // Step 6
            'whatsapp_number', 'manager_name', 'weekly_meeting',
            'ops_group', 'delivery_hours', 'additional_notes',
        ]);

        // Handle array fields (checkboxes)
        $data['pain_points']  = $request->input('pain_points', []);
        $data['channels']     = $request->input('channels', []);
        $data['tools']        = $request->input('tools', []);
        $data['service_type'] = $request->input('service_type', []);
        $data['comm_channel'] = $request->input('comm_channel', []);

        $submission = OnboardingSubmission::create($data);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Onboarding submitted successfully!',
                'id'      => $submission->id,
            ], 201);
        }

        return redirect('/onboarding')->with('success', 'Onboarding submitted successfully!');
    }
}
