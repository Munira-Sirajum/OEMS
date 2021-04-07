<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEexamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eexams', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
          
            $table->string('date');
            $table->string('time');
            $table->foreignId('professor_id')->nullable();
            $table->string('status')->default('draft');
            $table->string('mark');
            $table->string('department');
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
        Schema::dropIfExists('eexams');
    }
}
