@extends('admin')

@section('content')

<script>
$(document).ready(function() {
    $('#bankColln').DataTable();
} );
</script>

<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
 @csrf
 <center><h3> Collection Bank Monthly Summary</h3>
  <table  style="width:50%;" border=0>
        <tr><td align = "right"><font color="red">Opening Balance</font></td><td>----</td></tr>
        <tr> <td>Remited By Unit:</td><td>{{$sums['remited']}}</td></tr>
         <tr><td>Credited By Bank:</td><td>{{$sums['credited']}}</td></tr>
          <tr><td>Sweep (Fund Transfer):</td><td>{{$sums['sweep']}}</td></tr>
         <tr><td>Credited By Bank but NOT remited by Unit:</td><td>----</td></tr>
         <tr><td>Remited By Unit but NOT Credited by Unit:</td><td>----</td></tr>
        <tr><td>Bank Charges:</td><td>----</td></tr>
        <tr><td>Cheque Dishonour</td><td>----</td></tr>
        <td align = "right"><font color="red">Closing Balance</font></td></tr>
        <tr><td colspan="2" align="center">
  <a href="{{asset('/reconforms/central_reco.pdf')}}"  class= "btn btn-primary" target='_blank'>
    Reconcilliaton Statement</a>

<a href="{{asset('/reconforms/recon format.pdf')}}"  class= "btn btn-primary" target='_blank'>
  Consolidated Reconcilliaton</a>

<button type="button" class="btn btn-primary">Journalizing</button></td></tr>
<tr><td colspan="2">&nbsp;</td></tr></table>
<table id="bankColln" class="table" style="width:90%">
        <thead>
            <tr style="background-color:#7C9DEF; color:white;">
              <th>Office</th>
              <th>Date</th>
              <th>Remitted</th>
              <th>Bank</th>
              <th>Description</th>
              <th>Debit</th>
              <th>Credit</th>
              <th>Mismatch</th>

          </tr>
        </thead>
        <tbody>
          @if(count($match_remittance)>0)
              @foreach ($match_remittance as $v)
          <tr>
              <td>{{$v->office_name}}</td>
              <td>{{$v->remit_date}}</td>
              <td>{{$v->sum}}</td>

          </tr>
              @endforeach
        </tbody>
        @else
        <th colspan=8>No Data Found On This Date:</th>
          @endif
        <tfoot>
          <tr style="background-color:#7C9DEF; color:white;">
            <th>Section Office</th>
            <th>Date</th>
            <th>RemittedAmount</th>
            <th>Bank</th>
            <th>Description</th>
            <th>Debit</th>
            <th>Credit</th>
            <th>Mismatch</th>
          </tr>
        </tfoot>
    </table></center>
  @endsection
