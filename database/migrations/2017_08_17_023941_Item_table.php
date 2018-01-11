<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('payroll_id');

            $table->string('lbpaccount');

            $table->string('employee_number')->default(0);

            $table->string('lastname');

            $table->string('firstname');

            $table->decimal('rate_per_month', 18, 2)->default(0.00);

            $table->decimal('salary', 18, 2)->default(0.00);

            $table->decimal('pera', 18, 2)->default(0.00);

            $table->decimal('bonus_differential', 18, 2)->default(0.00);

            $table->decimal('subsistence_allowance', 18, 2)->default(0.00);
            
            $table->decimal('laundry_allowance', 18, 2)->default(0.00);

            $table->decimal('hazard_pay', 18, 2)->default(0.00);

            $table->decimal('gross_amount', 18, 2)->default(0.00);

            $table->decimal('gsis', 18, 2)->default(0.00);

            $table->decimal('philhealth', 18, 2)->default(0.00);

            $table->decimal('health_card', 18, 2)->default(0.00);

            $table->decimal('doe_ea', 18, 2)->default(0.00);

            $table->decimal('provident_share', 18, 2)->default(0.00);

            $table->decimal('hdmf', 18, 2)->default(0.00);

            $table->decimal('others1', 18, 2)->default(0.00);

            $table->decimal('others2', 18, 2)->default(0.00);

            $table->decimal('withholding_tax', 18, 2)->default(0.00);

            $table->decimal('netamount', 18, 2)->default(0.00);

            $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
