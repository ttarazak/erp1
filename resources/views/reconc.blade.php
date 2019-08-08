@extends('admin')

@section('content')
<p>
<?php
//dd($remittances);
?>
Reconcilliation Test
</p>
@if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif
        <table class="table">
          <thead class="thead-dark">
            <tr>

              <th scope="col">ID</th>
              <th scope="col">Reference</th>
              <th scope="col">Amount</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach($remittances as $remittance)
            <tr>

       
              <td>{{$remittance->id}}</td>
              <td>{{$remittance->amount}}</td>
              <td>{{$remittance->remit_date}}</td>
                            
            </tr>
            @endforeach
          </tbody>
        </table>
@endsection
