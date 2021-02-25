<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCurrentPhaseFromJsonColumnToAForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($tableName = 'clearance_requests', function (Blueprint $table) use ($tableName){
            $column = 'current_phase';
            if (Schema::hasColumn($tableName, $column)) {
                $table->unsignedBigInteger($column)->change();
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
        Schema::table('json_column_to_a_foreign_key', function (Blueprint $table) {
            //
        });
    }
}
