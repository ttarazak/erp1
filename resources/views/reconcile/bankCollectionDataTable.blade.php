@extends('admin')

@section('content')


<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
<script>
$(document).ready(function() {
    $('#bankColln').DataTable();
} );
</script>
 @csrf
 <center><u><h4> Collection Bank Bank Table:</h4>
   <div class="col-sm-12" style="background-color:lavenderblush;">
   <b>Total Remited By Unit:&nbsp;{{$sums['remited']}}
      &nbsp;&nbsp;&nbsp; Credited By Unit:&nbsp;{{$sums['sweep']}}
    &nbsp;&nbsp;&nbsp; Bank Transfer TO HO:&nbsp;{{$sums['sweep']}}</b>
 </div></center>

<table id="bankColln" class="table" style="width:95%">
        <thead>
            <tr style="background-color:#7C9DEF; color:white;">
              <th>Bank</th>
              <th>Date</th>
              <th>Description</th>
              <th>debit</th>
              <th>Credit</th>
              <th>Balance</th>
              <th>cheque/cash</th>

          </tr>
        </thead>
        <tbody>
          @if(count($bankentries)>0)
              @foreach ($bankentries as $v)
          <tr>
              <td>{{$v->branch_name}}</td>
              <td>{{$v->trans_date}}</td>
              <td>{{$v->description}}</td>
              <td>{{$v->debit}}</td>
              <td>{{$v->credit}}</td>
              <td>{{$v->balance}}</td>
              <td>{{$v->cheque_no}}</td>
          </tr>
              @endforeach
        </tbody>
        @else
        <th colspan=8>No Data Found On This Date:</th>
          @endif
        <tfoot>
        <tr style="background-color:#7C9DEF; color:white;">
          <th>Bank</th>
          <th>Date</th>
          <th>Description</th>
          <th>debit</th>
          <th>Credit</th>
          <th>Balance</th>
          <th>cheque/cash</th>

        </tr>
        </tfoot>
    </table>
  </div>
@endsection
