<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('member_id')->nullable()->unsigned();
            $table->integer('union_id')->nullable();
            $table->string('sm_name')->nullable();
            $table->string('sm_education')->nullable();
            $table->string('sm_occupation')->nullable();
            $table->string('sm_government_grants')->nullable();
            $table->string('sm_allowance_eligible')->nullable();
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
        Schema::dropIfExists('sub_members');
    }
}
