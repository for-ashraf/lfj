<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('event_id')->primary();
            $table->string('event_name');
            $table->text('event_description')->nullable();
            $table->date('event_date')->nullable();
            $table->string('event_location')->nullable();
            $table->string('event_website')->nullable();
            $table->string('event_category')->nullable();
            $table->string('event_organizer')->nullable();
            $table->string('event_contact')->nullable();
            $table->string('event_image')->nullable();
            $table->text('event_registration')->nullable();
            $table->integer('category_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
