<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugColumnToSectionsTable extends Migration
{
    public function up()
    {
        Schema::table('sections', function (Blueprint $table) {
            $table->string('slug')->after('name');
        });
    }

    public function down()
    {
        Schema::table('sections', function (Blueprint $table) {
            //
        });
    }
}
