<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContentColumnInBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->longText('content')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('content')->nullable()->change();
        });
    }
}


