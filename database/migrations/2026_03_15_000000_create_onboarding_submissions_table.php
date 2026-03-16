<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('onboarding_submissions', function (Blueprint $table) {
            $table->id();

            // ── Step 1: General Business Information ──
            $table->string('business_name');
            $table->string('dba_name')->nullable();
            $table->string('contact_name');
            $table->string('contact_role')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('business_type');
            $table->unsignedInteger('num_branches')->default(1);
            $table->string('address');
            $table->string('gps_link')->nullable();
            $table->text('hours')->nullable();

            // ── Step 2: Operational Profile ──
            $table->unsignedInteger('orders_day')->nullable();
            $table->unsignedInteger('orders_week')->nullable();
            $table->string('peak_hours')->nullable();
            $table->decimal('avg_ticket', 10, 2)->nullable();
            $table->string('delivery_radius')->nullable();
            $table->string('device_type')->nullable();
            $table->string('own_drivers')->nullable();       // yes/no
            $table->string('self_delivery')->nullable();      // yes/no
            $table->string('uses_3pl')->nullable();           // yes/no
            $table->unsignedInteger('active_drivers')->nullable();
            $table->json('pain_points')->nullable();

            // ── Step 3: Sales Channels ──
            $table->json('channels')->nullable();
            $table->json('tools')->nullable();
            $table->string('has_website')->nullable();        // yes/no
            $table->string('website_url')->nullable();
            $table->string('has_app')->nullable();            // yes/no
            $table->string('has_pos')->nullable();            // yes/no

            // ── Step 4: Motoclick Integration ──
            $table->json('service_type')->nullable();
            $table->string('integration_method')->nullable();
            $table->string('cred_doordash_user')->nullable();
            $table->string('cred_doordash_pass')->nullable();
            $table->string('cred_uber_user')->nullable();
            $table->string('cred_uber_pass')->nullable();
            $table->string('cred_delivery_user')->nullable();
            $table->string('cred_delivery_pass')->nullable();
            $table->string('cred_web_user')->nullable();
            $table->string('cred_web_pass')->nullable();
            $table->text('integration_notes')->nullable();

            // ── Step 5: Billing & Tax ──
            $table->string('legal_entity')->nullable();
            $table->string('ein')->nullable();
            $table->string('billing_address')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('billing_frequency')->nullable();
            $table->string('authorized_signer')->nullable();

            // ── Step 6: Communication & Preferences ──
            $table->json('comm_channel')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('manager_name')->nullable();
            $table->string('weekly_meeting')->nullable();     // yes/no
            $table->string('ops_group')->nullable();          // yes/no
            $table->text('delivery_hours')->nullable();
            $table->text('additional_notes')->nullable();

            // ── Meta ──
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('onboarding_submissions');
    }
};
