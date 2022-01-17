@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>Fuel type</th>
</tr>
@foreach($fuel_types as $fuel_type)
<tr>
    <td>{{$fuel_type->id}}</td>
    <td>{{$fuel_type->fuel_type}}</td>
</tr>
@endforeach
</table>
@endsection