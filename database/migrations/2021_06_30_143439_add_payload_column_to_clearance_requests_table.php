<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPayloadColumnToClearanceRequestsTable extends Migration
{
    public function up()
    {
        Schema::table('clearance_requests', function (Blueprint $table) {
            $table->json('payload');
        });
    }

    public function down()
    {
        Schema::table('clearance_requests', function (Blueprint $table) {
            //
        });
    }
}
