@extends('app')

@section('content')

<table class="table table-striped">
<tr class="table-dark">
<th>Id</th>
<th>Manufacturer name</th>
</tr>
@foreach($manufacturers as $manufacturer)
<tr>
    <td>{{$manufacturer->id}}</td>
    <td>{{$manufacturer->manufacturer_name}}</td>
</tr>
@endforeach
</table>
@endsection