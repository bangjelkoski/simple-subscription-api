<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('code', 255)->unique();
            $table->string('placeholder', 255)->nullable();
            $table->string('type', 255);
            $table->json('parameters');
            $table->unsignedInteger('subscriber_id');
            $table->nullableTimestamps();
        });

        Schema::table('fields', function (Blueprint $table) {
            $table->foreign('subscriber_id', 'fields_subscribers_id_foreign')->references('id')->on('subscribers')->onDelete('CASCADE')->onUpdate('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}
