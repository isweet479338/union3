<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMowjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mowjas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('upojilla_id')->nullable();
            $table->integer('union_id')->nullable();
            $table->integer('word_id')->nullable();
            $table->text('mowja')->nullable();
            $table->softDeletes();
            $table->string('type')->default(1);

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
        Schema::dropIfExists('mowjas');
    }
}
