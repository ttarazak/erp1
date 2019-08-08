<?php

namespace App\Http\Controllers;
use Session;
use App\RemittanceDetail;
use Illuminate\Http\Request;
use DB;
class RemittanceDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        //
        public function __construct()
        {
            $this->middleware('auth');
        }

       public function index()
       {
       //  $categories = Remittance::all();
           //
           $arr['remittance_details']=RemittanceDetail::all();
          // dd($arr);
           return view('reconcile.addremitsample')->with($arr);
       }

       public function dataViews()
       {
       //  $categories = Remittance::all();
           //
          // $arr['remittances']=RemittanceDetail::all();
           $remittances=RemittanceDetail::all();
           $remit_sum = DB::table('remittance_details')->sum('amount');
           $sweep_sum = DB::table('bank_collections')->sum('sweep');
           $sums = array('remited' => $remit_sum,'sweep' =>$sweep_sum );

           // dd($arr);
         // $test=100000;
         return view('reconcile.remittanceDataTable', compact('remittances','sums'));
           //return view('reconcile.remittanceDataTable')->with($arr)->with($test);
       }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reconcile.remittanceSearch');

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
     * @param  \App\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function show(RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RemittanceDetail $remittanceDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RemittanceDetail  $remittanceDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(RemittanceDetail $remittanceDetail)
    {
        //
    }
    public function search(Request $search)
    {
    //  $categories = Remittance::all();
        //
//dd($search->input('rmtdtfrom'));
$search->validate([

       'rmtdtfrom' => 'required|date',
       'rmtdtto' => 'required|date',
    ]);


//$remit_sum = DB::table('remittance_details')->sum(amount)->get();
$arr['remittances']  = DB::table('remittance_details')->
where([['remit_date','>=', $search->input('rmtdtfrom')],
['remit_date','<=', $search->input('rmtdtto')],])->get();
//$search->session()->flash('alert-success', 'Data Was successful added!');
return view('reconcile.remittanceDataTable')->with($arr);
//dd($remitDetails);
/*
$users = DB::table('users')->where([
    ['status', '=', '1'],
    ['subscribed', '<>', '1'],
])->get()
$users = DB::table('users')
                    ->whereBetween('votes', [1, 100])->get();
$arr['remittances']  = DB::table('remittance_details')->where('remit_date', $search->input('rmtdtfrom'))->get();
return view('remittanceDataTable')->with($arr);
*/
      // return view('reconc',compact('remittances',$remitDetails));
       //$arr=compact('remittances',$remitDetails);
      // dd($arr);
       //return view('reconc', ['remits' => $remitDetails]);

    }
}
