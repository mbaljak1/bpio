@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>Client</th>
<th>Employee</th>
<th>Vehicle</th>
<th>Rent begin</th>
<th>Rent end</th>
<th>Cost</th>
<th>Payment type</th>
</tr>
@foreach($rentals as $rental)
<tr>
    <td>{{$rental->id}}</td>
    <td>{{$rental->client_id}}</td>
    <td>{{$rental->employee_id}}</td>
    <td>{{$rental->vehicle_vin_number}}</td>
    <td>{{$rental->rent_begin}}</td>
    <td>{{$rental->rent_end}}</td>
    <td>{{$rental->cost}}</td>
    <td>{{$rental->payment_type}}</td>
    
</tr>
@endforeach
</table>
@endsection