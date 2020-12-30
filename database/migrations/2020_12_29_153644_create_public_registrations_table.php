<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('PublicName');
            $table->string('PublicEmail');
            $table->string('PublicPhone');
            $table->string('PublicAddress');
            $table->string('PublicPassword');
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
        Schema::dropIfExists('public_registrations');
    }
}
