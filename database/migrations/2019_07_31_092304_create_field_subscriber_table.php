<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldSubscriberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('field_subscriber', function (Blueprint $table) {
            $table->bigInteger('field_id')->unsigned();
            $table->bigInteger('subscriber_id')->unsigned();
            $table->string('value')->nullable();

            $table->unique(['field_id', 'subscriber_id']);

        });

        Schema::table('field_subscriber', function (Blueprint $table) {
            $table->foreign('subscriber_id')->references('id')->on('subscribers')->onDelete('CASCADE');
            $table->foreign('field_id')->references('id')->on('fields')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('field_subscriber');
    }
}
