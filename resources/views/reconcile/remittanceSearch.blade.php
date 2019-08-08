@extends('admin')

@section('content')

<!--<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> -->
<!--<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}"> -->

<!--<script src="{{asset('js/bootstrap.min.js')}}"></script> -->
<!--<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script> -->
 @csrf
<!-- The form -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif

<br/>
<form class="example" method="post" action="{{url('/searchremit')}}">
 @csrf
  <div class="container">
<center><u><h3>Remittance Search Views</h3></center>
  <div class="row">


        <div class="col-sm-3 col-sm-offset-1" style="background-color:lavender;">
    <input type="text" placeholder="Month" data-provider="datepicker" class="datepicker" name="rmtdtto">
    <button type="submit"><i class="fa fa-search"></i></button></div>
           <div class="col-sm-6" style="background-color:lavenderblush;">
      <input type="text"   placeholder="From Date.." data-provider="datepicker" class="datepicker" name="rmtdtfrom">
      <input type="text" placeholder="Todate" data-provider="datepicker" class="datepicker" name="rmtdtto">
      <button type="submit"><i class="fa fa-search"></i></button>
    </div>

  </div>

</div></div>
</form>

<script>

$(document).ready(function() {
  $('.datepicker').datepicker({format: 'yyyy/mm/dd'});
});
</script>
@endsection
