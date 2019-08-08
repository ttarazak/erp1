<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemittanceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('remittance_details', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->bigIncrements('service_id');
            $table->bigInteger('remit_ref_id');//->references('remit_ref')->('bank_collections');
            $table->double('amount',10,2);
            $table->Integer('office_id');//->references('section_code')->on('office_master');
            $table->Integer('cashier_id');
            $table->bigInteger('account_no');
            $table->date('remit_date');
            $table->double('amount',10,2);
            $table->Integer('location_id')->default(0);
            $table->char('branch_id',15);//->references('branch_code')->on('bank_masters');
            $table->char('cheque_no',15)->default(0);
            $table->string('remittance_type')->default(0);
            $table->smallInteger('trans_status')->default(0);
            $table->smallInteger('acc_status')->default(0); //for reconcilliaation
            $table->smallInteger('jnl_reference_id')->default(0); //for reconcilliaation
            $table->timestamps();
            $table->foreign('remit_ref_id')->references('remit_ref_id')->on('bank_collections');
            $table->foreign('office_id')->references('office_id')->on('office_masters');
            $table->foreign('bracnh_id')->references('bracnh_id')->on('bank_masters');


        });
    }
      /*  Schema::create('remittance_details', function (Blueprint $table) {
table->bigIncrements('id');
            $table->bigInteger('remit_ref')->default(0);
            $table->double('amount',10,2);
            $table->string('cheque_no')->nullable()->default('0');;
            $table->string('payslip_id')->nullable()->default('0');;
            $table->timestamps();
            $table->bigIncrements('id');
            $table->Integer('office_code')->references('section_code')->on('section_offices');
            $table->string('office_name')->nullable();
            $table->Integer('cashier_code');
            $table->bigInteger('account_no');
            $table->date('remit_date');
            $table->double('amount',10,2);
            $table->bigInteger('payslip_id')->default(0);
            $table->Integer('location_code')->default(0);
            $table->char('branch_code',15)->default('0')->references('branch_code')->on('bank_masters');
            $table->string('branch_name')->nullable();
            $table->char('cheque_no',15)->default(0);
            $table->string('remittance_type')->default(0);
            $table->smallInteger('trans_status')->default(0);
            $table->smallInteger('acc_status')->default(0);
            $table->char('remit_ref',20);
            $table->timestamps();
        }); */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remittance_details');
    }
}
