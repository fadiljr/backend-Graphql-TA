<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterRfqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //add columns service_type
        if (!Schema::hasColumn('rfqs', 'service_type')) {
            Schema::table('rfqs', function (Blueprint $table) {
                $table->string('service_type', 255)->nullable();
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
        //
        Schema::table('t_request_quotation', function (Blueprint $table) {
            $table->string('client_code', 255);
        });
    }
}
