<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerRegistratinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_registratins', function (Blueprint $table) {
            $table->id();
            $table->string('WorkerName');
            $table->string('WorkerEmail');
            $table->string('WorkerPhone');
            $table->string('WorkerAddress');
            $table->string('WorkerPassword');
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
        Schema::dropIfExists('worker_registratins');
    }
}
