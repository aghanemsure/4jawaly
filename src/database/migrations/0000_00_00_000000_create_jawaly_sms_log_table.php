<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawalySmsLogTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaly_sms_log', function (Blueprint $table)
        {
            $table->increments('id');
            $table->text('numbers');
            $table->text('body');
            $table->string('status');
            $table->string('sender');
            $table->string('response');
            $table->string('gate_message');
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
        Schema::dropIfExists('jawaly_sms_log');
    }

}
