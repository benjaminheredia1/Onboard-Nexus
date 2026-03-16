<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OnboardingSubmission extends Model
{
    protected $fillable = [
        // Step 1 — Business
        'business_name',
        'dba_name',
        'contact_name',
        'contact_role',
        'phone',
        'email',
        'city',
        'zip',
        'business_type',
        'num_branches',
        'address',
        'gps_link',
        'hours',

        // Step 2 — Operations
        'orders_day',
        'orders_week',
        'peak_hours',
        'avg_ticket',
        'delivery_radius',
        'device_type',
        'own_drivers',
        'self_delivery',
        'uses_3pl',
        'active_drivers',
        'pain_points',

        // Step 3 — Channels
        'channels',
        'tools',
        'has_website',
        'website_url',
        'has_app',
        'has_pos',

        // Step 4 — Integration
        'service_type',
        'integration_method',
        'cred_doordash_user',
        'cred_doordash_pass',
        'cred_uber_user',
        'cred_uber_pass',
        'cred_delivery_user',
        'cred_delivery_pass',
        'cred_web_user',
        'cred_web_pass',
        'integration_notes',

        // Step 5 — Billing
        'legal_entity',
        'ein',
        'billing_address',
        'payment_method',
        'billing_frequency',
        'authorized_signer',

        // Step 6 — Communication
        'comm_channel',
        'whatsapp_number',
        'manager_name',
        'weekly_meeting',
        'ops_group',
        'delivery_hours',
        'additional_notes',

        // Meta
        'status',
    ];

    protected function casts(): array
    {
        return [
            'pain_points'  => 'array',
            'channels'     => 'array',
            'tools'        => 'array',
            'service_type' => 'array',
            'comm_channel' => 'array',
            'num_branches' => 'integer',
            'orders_day'   => 'integer',
            'orders_week'  => 'integer',
            'avg_ticket'   => 'decimal:2',
            'active_drivers' => 'integer',
        ];
    }
}
