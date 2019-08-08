@extends('admin')

@section('content')
 <div class="content-header">
   <div class="container-fluied">
     <div class = "row mb-2">
       <div class="col-sm-6">


 </div>
   <div class="col-sm-6">
   <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item">
     <a href={{url('/admin')}}>Home</a></li>
     <li class="bread-crumb-item active">Veiw Remittance Section</li>
   </ol>
</div>
</div>
</div>
</div>


 <!--<a href="#" class="btn btn-primary">Add Sampe Data</a> -->
<class ="container">
<table class="table">
  <thead class="thead-dark">


  <tr>
    <th>Office</th>
    <th>Date</th>
    <th>CashierID</th>
    <th>PayslipID</th>
    <th>BankName</th>
    <th>Amount</th>
    <th>Cheque/Cash</th>
    <th>Remittance Type</th>
    <th>Edit/Delet</th>

  </tr>
</thead>
<tbody>
    @foreach ($remittance_details as $v)
<tr>
    <td>{{$v->office_name}}</td>
    <td>{{$v->remit_date}}</td>
    <td>{{$v->cashier_id}}</td>
    <td>{{$v->payslip_id}}</td>
    <td>{{$v->amount}}</td>
    <td>{{$v->cheque_no}}</td>
    <td>{{$v->remittance_type}}</td>
    <td>{{$v->remittance_type}}</td>


    <td><a href="#" class="btn btn-info">Edit</a>
    <a href="#" class="btn btn-danger">Delete</a></td>
</tr>
    @endforeach
</tbody>
  </table>
@endsection
