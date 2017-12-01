<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnagramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('anagrams')) {
            Schema::create('anagrams', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('userid')->nullable();
                $table->string('anagram_word', 64);
                $table->string('org_word', 64);
                $table->text('comment')->nullable();
                $table->timestamps();
                $table->softDeletes();                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anagrams');
    }
}
