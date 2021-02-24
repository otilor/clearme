<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveIsClearedFromClearanceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table($tableName = 'clearance_requests', function (Blueprint $table) use ($tableName){
            if (Schema::hasColumn($tableName, 'is_cleared')) {
                $table->removeColumn('is_cleared');
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
