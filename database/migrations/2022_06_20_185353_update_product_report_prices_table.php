<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductReportPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_report_prices', function (Blueprint $table) {
            $table->text('address_store')->nullable()->after('site');
            $table->string('phoneNumber')->nullable()->after('site');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_report_prices', function (Blueprint $table) {
            $table->dropColumn(['address_store','phoneNumber']);
        });
    }
}
