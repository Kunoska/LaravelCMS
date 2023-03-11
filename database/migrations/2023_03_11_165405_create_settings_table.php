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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('main_url')->nullable();
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->string('logo')->nullable();
            $table->string('logo_medium')->nullable();
            $table->string('logo_thumb')->nullable();
            $table->string('link')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('g_plus')->nullable();
            $table->string('youtube')->nullable();
            $table->string('flickr')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('settings');
    }
};
