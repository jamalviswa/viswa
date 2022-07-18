<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('site_title',255)->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('logo',255)->nullable();
            $table->string('favicon',255)->nullable();
            $table->string('mobile_number',255)->nullable();
            $table->string('telephone_number',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('alt_email',255)->nullable();
            $table->text('address')->nullable();
            $table->text('map_url')->nullable();
            $table->text('facebook_url')->nullable();
            $table->text('whatsapp_url')->nullable();
            $table->text('linkedin_url')->nullable();
            $table->text('instagram_url')->nullable();
            $table->text('twitter_url')->nullable();
            $table->enum('status',[ 'Active', 'Trash'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sitesettings');
    }
};
