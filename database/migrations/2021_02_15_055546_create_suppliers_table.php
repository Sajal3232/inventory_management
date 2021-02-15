<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('email');
            $table->text('phone');
            $table->text('nid')->nullable();
            $table->text('address')->nullable();
            $table->text('type');
            $table->text('shopname')->nullable();
            $table->text('image')->nullable();
            $table->text('accountholder')->nullable();
            $table->text('accountno')->nullable();
            $table->text('bankname')->nullable();
            $table->text('branchname')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
