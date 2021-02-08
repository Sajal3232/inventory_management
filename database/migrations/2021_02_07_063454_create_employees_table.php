<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('email');
            $table->text('phone');
            $table->text('nid');
            $table->text('address')->nullable();
            $table->text('experience')->nullable();
            $table->text('image')->nullable();
            $table->text('salary');
            $table->text('vacation')->nullable();
            $table->text('city')->nullable();
            $table->text('status');
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
        Schema::dropIfExists('employees');
    }
}
