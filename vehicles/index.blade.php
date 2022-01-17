@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>VIN</th>
<th>Registration number</th>
<th>Manufacturer</th>
<th>Model</th>
<th>Fuel type</th>
<th>Gear type</th>
<th>Production year</th>
<th>Power</th>
<th>Mileage</th>
<th>Number of doors</th>
<th>Price per day</th>

</tr>
@foreach($vehicles as $vehicle)
<tr>
    <td>{{$vehicle->id}}</td>
    <td>{{$vehicle->vin_number}}</td>
    <td>{{$vehicle->registration_number}}</td>
    <td>{{$vehicle->manufacturer_id}}</td>
    <td>{{$vehicle->model}}</td>
    <td>{{$vehicle->fuel_type_id}}</td>
    <td>{{$vehicle->gear_type_id}}</td>
    <td>{{$vehicle->production_year}}</td>
    <td>{{$vehicle->power}}</td>
    <td>{{$vehicle->mileage}}</td>
    <td>{{$vehicle->number_of_doors}}</td>
    <td>{{$vehicle->price_per_day}}</td>

    
</tr>
@endforeach
</table>
@endsection