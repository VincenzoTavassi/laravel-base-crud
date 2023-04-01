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
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150);
            $table->string('album', 100)->nullable()->default('Unknown');
            $table->string('author', 100)->nullable()->default('Unknown');
            $table->string('editor', 100)->nullable();
            $table->smallinteger('length');
            $table->string('poster')->nullable();
            $table->timestamps();
        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
