<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        
        $this->call(UsersTableSeeder::class);
        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-02',
        'value_date'=>'2019-07-02','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'debit sweep',
        'reference_no'=>'0','cheque_no'=>'7568','debit'=>8990000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);
       
       /* DB::table('bank_collections')->insert(['account_no'=>7777777777,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SBIF','branch_name'=>'SBI-Ferokd',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'5555888','debit'=>0,'credit'=>50000,'balance'=>50000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'FF15']);

        DB::table('bank_collections')->insert(['account_no'=>777777777,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB1F',
        'branch_name'=>'SBI-Feroke','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>3500000,'balance'=>3550000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'FE14']);

        DB::table('bank_collections')->insert(['account_no'=>7777777777,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB1F',
        'branch_name'=>'SBI-Feroke','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>3550000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);
        //--

        DB::table('bank_collections')->insert(['account_no'=>7777777777,'trans_date'=>'2019-06-03',
        'value_date'=>'2019-06-03','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>7000000,'balance'=>7000000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF16']);

        DB::table('bank_collections')->insert(['account_no'=>7777777777,'trans_date'=>'2019-06-03',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','branch_name'=>'SBI-Feroke',
        'description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>7000000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-01',
        'value_date'=>'2019-07-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1200000,'balance'=>1200000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF17']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-01',
        'value_date'=>'2019-07-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1500000,'balance'=>2700000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF18']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-01',
        'value_date'=>'2019-07-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>2700000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);




        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-02',
        'value_date'=>'2019-06-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>3500000,'balance'=>3500000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF19']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-02',
        'value_date'=>'2019-07-02','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'7568','debit'=>0,'credit'=>5500000,'balance'=>9000000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF20']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-02',
        'value_date'=>'2019-07-02','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Bank Charges',
        'reference_no'=>'0','cheque_no'=>'7568','debit'=>1000,'credit'=>0,'balance'=>8999000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF20']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-05',
        'value_date'=>'2019-07-02','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1000,'balance'=>1000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>0]);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-05',
        'value_date'=>'2019-07-05','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>1000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-09',
        'value_date'=>'2019-07-09','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>9500,'balance'=>9500,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF23']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-09',
        'value_date'=>'2019-07-09','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Debit Sweep','reference_no'=>'0','cheque_no'=>'0','debit'=>9500,
        'credit'=>0,'balance'=>0,'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-10',
        'value_date'=>'2019-07-05','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Cheque Deposit',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>500,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF24']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-10',
        'value_date'=>'2019-07-09','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>25000,'balance'=>25500,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF25']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-10',
        'value_date'=>'2019-07-09','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Cheque Dishonour',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>500,'credit'=>0,'balance'=>24500,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-07-10',
        'value_date'=>'2019-07-09','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'Debit Sweep','reference_no'=>'0','cheque_no'=>'0','debit'=>24500,
        'credit'=>0,'balance'=>0,'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);



       
        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','branch_name'=>'SBI-Omassery',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>4000000,'balance'=>400000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM15']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10',
        'branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>2500000,'balance'=>6500000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM16']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10',
        'branch_name'=>'SBI-Omassery','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>6500000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);
        

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-03',
        'value_date'=>'2019-06-03','branch_code'=>'SB1F','branch_name'=>'SBI-Omassery',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>18000000,'balance'=>1800000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM17']);

        DB::table('bank_collections')->insert(['account_no'=>5555555555,'trans_date'=>'2019-06-03',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','branch_name'=>'SBI-Omassery',
        'description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>0,'balance'=>1800000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1200000,'balance'=>1200000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF12']);


        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB1F','branch_name'=>'SBI-Feroke',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>4500000,'balance'=>5700000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'EF13']);

        DB::table('bank_collections')->insert(['account_no'=>77777777777,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB1F','branch_name'=>'SBI-Omassery',
        'description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>5700000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);

        
        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','account_no'=>55555555555,'branch_name'=>'SBI-Omassery',
        'description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>4000000,'balance'=>400000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM13']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','account_no'=>55555555555,
        'branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>2500000,'balance'=>6500000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM14']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-02',
        'value_date'=>'2019-06-02','branch_code'=>'SB10','account_no'=>55555555555,
        'branch_name'=>'SBI-Omassery','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>6500000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false']);
        

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1000000,'balance'=>100000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1000000,'balance'=>2000000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>2000000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);
        

       DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1000000,'balance'=>100000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'CASH DEPOSIT-CASH DEPOSIT LCC',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>0,'credit'=>1000000,'balance'=>2000000,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);

        DB::table('bank_collections')->insert(['account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>2000000,'credit'=>0,'balance'=>0,
        'trans_status'=>0,'acc_status'=>0,'cancel'=>'false','coll_ref'=>'OM11']);

        DB::table('bank_collections')->insert(['remit_id'=>1,'account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_code'=>'SB10','account_no'=>55555555555,'trans_date'=>'2019-06-01',
        'value_date'=>'2019-06-01','branch_name'=>'SBI-Omassery','description'=>'Debit Sweep',
        'reference_no'=>'0','cheque_no'=>'0','debit'=>1000000,'credit'=>0,'trans_status'=>0,'acc_status'=>0,
        'cancel'=>'false','coll_ref'=>'OM11']);

DB::table('remittance_details')->insert(['office_code'=>6751,'office_name'=>'Ele.Secttion Omassery',
'cashier_code'=>1039249,'account_no'=>55555555555,'remit_date'=>'2019-06-01','amount'=>1000000,'payslip_id'=>1,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6751,'office_name'=>'Ele.Secttion Omassery',
'cashier_code'=>1039248,'account_no'=>55555555555,'remit_date'=>'2019-06-01','amount'=>2000000,'payslip_id'=>2,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6751,'office_name'=>'Ele.Secttion Omassery',
'cashier_code'=>1039249,'account_no'=>55555555555,'remit_date'=>'2019-06-02','amount'=>4000000,'payslip_id'=>3,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6751,'office_name'=>'Ele.Secttion Omassery',
'cashier_code'=>1039248,'account_no'=>55555555555,'remit_date'=>'2019-06-02','amount'=>2500000,'payslip_id'=>4,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6751,'office_name'=>'Ele.Secttion Omassery',
'cashier_code'=>1039249,'account_no'=>55555555555,'remit_date'=>'2019-06-03','amount'=>1800000,'payslip_id'=>5,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);

DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>666666666,'remit_date'=>'2019-06-01','amount'=>1200000,'payslip_id'=>1,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>666666666,'remit_date'=>'2019-06-01','amount'=>3010000,'payslip_id'=>2,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>6666666666,'remit_date'=>'2019-06-02','amount'=>3500000,'payslip_id'=>3,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>6666666666,'remit_date'=>'2019-06-02','amount'=>3002000,'payslip_id'=>4,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>6666666666,'remit_date'=>'2019-06-03','amount'=>7000000,'payslip_id'=>5,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);

DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>777777777,'remit_date'=>'2019-07-01','amount'=>1200000,'payslip_id'=>1,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>777777777,'remit_date'=>'2019-07-01','amount'=>3010000,'payslip_id'=>2,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>777777777,'remit_date'=>'2019-07-02','amount'=>3500000,'payslip_id'=>3,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>777777777,'remit_date'=>'2019-07-02','amount'=>3002000,'payslip_id'=>4,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']);
DB::table('remittance_details')->insert(['office_code'=>6631,'office_name'=>'Ele.Secttion Feroke',
'cashier_code'=>1029248,'account_no'=>777777777,'remit_date'=>'2019-07-03','amount'=>7000000,
'payslip_id'=>5,'location_code'=>411,'branch_code'=>'SB1','branch_name'=>'SBI-Omassery']); */

    }
}
