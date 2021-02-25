<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeCurrentPhaseNullableInClearanceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clearance_requests', function (Blueprint $table) {
            if (Schema::hasColumn('current_phase', $column = 'current_phase')) {
                $table->unsignedBigInteger($column)->nullable()->change();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clearance_requests', function (Blueprint $table) {
            //
        });
    }
}
