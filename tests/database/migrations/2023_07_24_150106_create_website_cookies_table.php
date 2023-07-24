<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteCookiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_cookies', function (Blueprint $table) {
            $table->integer('cookie_id')->primary();
            $table->string('cookie_name');
            $table->text('cookie_value')->nullable();
            $table->dateTime('cookie_expiry')->nullable();
            $table->string('cookie_domain')->nullable();
            $table->string('cookie_path')->nullable();
            $table->timestamp('cookie_created_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_cookies');
    }
}
