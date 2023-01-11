<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainInputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_inputs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('word_id')->nullable();
            $table->integer('mowja_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->integer('union_id')->nullable();
            $table->string('road_no')->nullable();
            $table->string('holding_no')->nullable();
            $table->string('holder_name')->nullable();
            $table->string('education')->nullable();
            $table->string('house_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('house_type')->nullable();
            $table->string('occupation')->nullable();
            $table->string('government_grants')->nullable();
            $table->string('allowance_eligible')->nullable();
            $table->string('tax')->nullable();
            $table->string('arable_land')->nullable();
            $table->string('unclaimed_and')->nullable();
            $table->string('is_landless')->nullable();
            $table->string('status')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('main_inputs');
    }
}
