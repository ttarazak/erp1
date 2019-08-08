<?php

namespace App\Http\Controllers;

use App\BankCollection;
use Illuminate\Http\Request;
use DB;
class BankCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        //
        //$arr['bankentries']=BankCollection::all();
        $bankentries=BankCollection::all();
        $credit_sum = DB::table('bank_collections')->sum('credit');
        $sweep_sum = DB::table('bank_collections')->sum('sweep');
        $remit_sum = DB::table('remittance_details')->sum('amount');
        $sums = array('credited' => $credit_sum,'sweep' =>$sweep_sum ,'remited'=>$remit_sum);

        return view('reconcile.bankCollectionDataTable', compact('bankentries','sums'));
       // dd($arr);
        //return view('reconcile.bankCollectionDataTable')->with($arr);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $arr['bankentries']=BankCollection::all();
     // dd($arr);

     //
/*$arr['remittances'] = DB::table('remittance_details')->select('office_code', 'account_no')->sum('amount')->
groupby('office_code','account_no')->get(); */

    $match_remittance =DB::table('remittance_details')
                      ->selectRaw('office_code, account_no, office_name,remit_date, sum(amount) as sum')
                      ->groupBy('office_code','account_no','office_name','remit_date')
                      ->orderBy('account_no','asc','remit_date','asc')->get();

    $match_bank =DB::table('bank_collections')
                    ->selectRaw('account_no, branch_name,trans_date,description,sum(COALESCE(credit,0))as credit,
                    sum(COALESCE(debit,0)) as debit,sum(COALESCE(balance,0)) as balance')
                    ->groupBy('account_no','branch_name','trans_date','description')
                    ->orderBy('account_no','asc','trans_date','asc')->get();

                    $credit_sum = DB::table('bank_collections')->sum('credit');
                     $remit_sum = DB::table('remittance_details')->sum('amount');
                    $sweep_sum = DB::table('bank_collections')->sum('sweep');
                    $sums = array('credited' => $credit_sum,'sweep' =>$sweep_sum ,'remited'=>$remit_sum);
                    //dd($sums);
//dd($arrm);
 return view('reconcile.remittanceMismatch', compact('match_remittance','sums'));
 //return view('reconcile.testReconMismatch', compact('match_remittance','match_bank','sums'));

/*
select account_no, branch_name,trans_date, COALESCE(credit,0) as credit,COALESCE(debit,0) as debit,COALESCE(sweep,0) as sweep,description
from bank_collections  order by  trans_date,account_no

 $arr['remittances']  = DB::table('remittance_details'
where([['remit_date','>=', $search->input('rmtdtfrom')],
['remit_date','<=', $search->input('rmtdtto')],])->get(); */

      //return view('reconcile.remittanceMismatch')->with($arr);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankCollection  $bankCollection
     * @return \Illuminate\Http\Response
     */
    public function show(BankCollection $bankCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankCollection  $bankCollection
     * @return \Illuminate\Http\Response
     */
    public function edit(BankCollection $bankCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankCollection  $bankCollection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankCollection $bankCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankCollection  $bankCollection
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankCollection $bankCollection)
    {
        //
    }
}
