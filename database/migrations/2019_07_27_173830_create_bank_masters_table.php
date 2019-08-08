<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_masters', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->char('branch_code',15)->unique();
            $table->char('ifsc',8);
            $table->string('bank_name');
            $table->integer('location_code')->nullable();
            $table->string('account_type')->default('CURRENT-ACCOUNT COLLECTION-ACCOUNT');
            $table->smallInteger('status')->default(0);
            $table->double('bank_ob',10,2)->default(0);
            $table->char('cif_no',20)->default('0');
            $table->char('micr_code',20)->default('0');
            $table->boolean('cancel')->default('false');
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
        Schema::dropIfExists('bank_masters');
    }
}
