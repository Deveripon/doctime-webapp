<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email') -> unique();
            $table->string('cell')-> unique();
            $table->string('password');
            $table->text('photo') -> default('https://i.pinimg.com/originals/49/3f/a0/493fa0f13970ab3ef29375669f670451.jpg');
            $table->text('date-of-birth') -> nullable();
            $table->integer('age') -> nullable();
            $table->string('city') -> nullable();
            $table->string('country') -> nullable();
            $table->string('blood') -> nullable();
            $table->boolean('status') -> default(true);
            $table->boolean('trash') -> default(false);
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
};
