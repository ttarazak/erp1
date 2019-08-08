@extends('admin')

@section('content')


<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<script>
$(document).ready(function() {
    $('#remittance').DataTable();
} );
</script>
<div style="padding:10px;">
   @csrf
  @if(isset($sums))
  <center>
    <center><u><h4> <b>Remittance Table</b></h4>
    <div class="col-sm-12" style="background-color:lavenderblush;">
 <h5>Total Remittance:{{$sums['remited']}} : Total Collection Accounts:{{$sums['sweep']}}</h5>
</div>
</center>
 @endif
<table id="remittance" class="table" style="width:95%">
        <thead>
            <tr style="background-color:#7C9DEF; color:white;">
              <th>Office</th>
              <th>Date</th>
              <th>CashierID</th>
              <th>PayslipID</th>
              <th>BankName</th>
              <th>Amount</th>
              <th>Cheque/Cash</th>
              <th>Remittance Type</th>
          </tr>
        </thead>
        <tbody>
          @if(count($remittances)>0)
              @foreach ($remittances as $v)
          <tr>
              <td>{{$v->office_name}}</td>
              <td>{{$v->remit_date}}</td>
              <td>{{$v->cashier_code}}</td>
              <td>{{$v->payslip_id}}</td>
              <td>{{$v->branch_name}}</td>
              <td>{{$v->amount}}</td>
              <td>{{$v->cheque_no}}</td>
              <td>{{$v->remittance_type}}</td>
          </tr>
              @endforeach
        </tbody>
        @else
        <th colspan=8>No Data Found On This Date:</th>
          @endif
        <tfoot>
        <tr style="background-color:#7C9DEF; color:white;">
              <th>Office</th>
              <th>Date</th>
              <th>CashierID</th>
              <th>PayslipID</th>
              <th>BankName</th>
              <th>Amount</th>
              <th>Cheque/Cash</th>
              <th>Remittance Type</th>
            </tr>
        </tfoot>
    </table>
  </div>
@endsection
