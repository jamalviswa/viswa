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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('position',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('twitter',255)->nullable();
            $table->string('facebook',255)->nullable();
            $table->string('linkedin',255)->nullable();
            $table->string('instagram',255)->nullable();
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
        Schema::dropIfExists('experts');
    }
};
