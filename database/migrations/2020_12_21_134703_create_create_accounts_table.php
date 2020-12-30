<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('EName');
            $table->string('Eemail');
            $table->string('Epass');
            $table->string('Eaddress');
            $table->string('Eposition');
            $table->string('Etime');
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
        Schema::dropIfExists('create_accounts');
    }
}
