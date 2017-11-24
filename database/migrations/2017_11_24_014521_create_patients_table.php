<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone_number')->nullable();
            $table->string('sex')->nullable();
            $table->integer('age')->nullable();
            $table->string('occupation')->nullable();
            $table->text('address')->nullable();
            $table->text('address_category')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('convert')->nullable();
            $table->string('born_again')->nullable();
            $table->text('counselling_need')->nullable();
            $table->text('mental_counselling')->nullable();
            $table->text('drugs_prescribed')->nullable();
            $table->text('drugs_dispensed')->nullable();
            $table->text('lab_done')->nullable();
            $table->text('welfare_given')->nullable();
            $table->string('diagnosis')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
