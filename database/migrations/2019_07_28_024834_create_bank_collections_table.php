<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('bank_collections', function (Blueprint $table) {
         $table->bigIncrements('id');

            $table->bigInteger('account_no');
            $table->bigInteger('service_id');
            $table->char('coll_ref_id'.15)
            $table->date('trans_date');
            $table->date('value_date');
            $table->char('branch_id',15);
            $table->string('reference_no')->nullable();
            $table->char('cheque_no',20)->default('0'); //Zero for cash
            $table->double('debit',12,2);
            $table->double('credit',12,2);
            $table->double('balance',12,2);
            $table->string('description'); //coding required
            $table->smallInteger('trans_status')->default(0);
            $table->smallInteger('acc_status')->default(0);
            $table->boolean('cancel')->default('false'); //refence Cancellation table 
            $table->timestamps();
            $table->foreign('branch_id')->references('bracnh_id')->on('bank_masters');
            $table->char('coll_ref_id')->references('remit_ref_id')->('remittance_details');

      /*Schema::create('bank_collections', function (Blueprint $table) {
         $table->bigIncrements('id');
            $table->bigInteger('account_no');
            $table->date('trans_date');
            $table->date('value_date');
            $table->char('branch_code',15)->references('branch_code')->on('bank_masters');
            $table->string('branch_name')->nullable();;
            $table->string('description');
            $table->string('reference_no')->nullable();
            $table->char('cheque_no',20)->default('0');
            $table->double('debit',12,2);
            $table->double('credit',12,2);
            $table->double('balance',12,2);
            $table->smallInteger('trans_status')->default(0);
            $table->smallInteger('acc_status')->default(0);
            $table->boolean('cancel')->default('false');
            $table->char('coll_ref',20)->references('remit_ref')->('remittance_details');
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
        Schema::dropIfExists('bank_collections');
    }
}
