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
<div style="padding:10px;">
 <h3> Drawing Bank Table:</h3>
<table id="bankColln" class="table" style="width:95%">
        <thead>
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
        </thead>
        <tbody>
  @if(count($match_remittance)>0)
        @foreach ($match_remittance as $r)
        {{$i=0}}
                <tr>
                      <td>{{$r->office_name}}</td>
                      <td>{{$r->remit_date}}</td>
                      <td>{{$r->sum}}</td>
            @if(count($match_bank)>0)
               @foreach($match_bank as $b)
                  @if($b->account_no==$r->account_no && $r->remit_date==$b->trans_date)

                    @if({{$i==1}})
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    @endif
                      <td>{{$b->branch_name}}</td>
                      <td>{{$b->description}}</td>
                      <td>{{$b->debit}}</td>
                      <td>{{$b->credit}}</td>
                      <td>---</td>
                      {{$i=1}}F
                  </tr>
                    @else
                    @if({{$i==1}})
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    @endif
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>---</td>
                      {{$i=1}}
                  </tr>
                    @endif

               @endforeach
            @else
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>NIL Bank Entry</td>
                      <td>---</td>
                  </tr>
            @endif


         @endforeach
            </tbody>
  @else
        <th colspan=8> No Remittance Data Found On This Date:</th>
          @endif
        <tfoot>
        <tr style="background-color:#7C9DEF; color:white;">
              <td col="7">Bank Remittance Sheet</td>
        </tr>
        </tfoot>
    </table>
  </div>
@endsection
