<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Maintenances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('service',250);
            $table->string('description',250);
            $table->string('status',250);
            $table->string('shipyard',250);

            $table->unsignedBigInteger('employeeId');
            $table->foreign('employeeId')
                ->references('id')
                ->on('employees')
                ->onDelete('cascade');

            $table->unsignedBigInteger('shipId');
            $table->foreign('shipId')
                ->references('id')
                ->on('ships')
                ->onDelete('cascade');

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
        Schema::dropIfExists('maintenances');
    }
}
