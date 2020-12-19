<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWokerReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('woker_reports', function (Blueprint $table) {
            $table->id();
            $table->string('WorkerName');
            $table->string('WorkerEmail');
            $table->string('WorkerReportType');
            $table->string('WorkerReportMsg');
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
        Schema::dropIfExists('woker_reports');
    }
}
