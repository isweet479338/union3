<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('main_input_id')->nullable()->unsigned();
            $table->integer('union_id')->nullable();
            $table->string('member_name')->nullable();
            $table->string('member_education')->nullable();
            $table->string('member_occupation')->nullable();
            $table->string('member_government_grants')->nullable();
            $table->string('member_allowance_eligible')->nullable();
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
        Schema::dropIfExists('members');
    }
}
