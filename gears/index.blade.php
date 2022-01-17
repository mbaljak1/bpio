@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>Gear type</th>
</tr>
@foreach($gears as $gear)
<tr>
    <td>{{$gear->id}}</td>
    <td>{{$gear->gear_type}}</td>
</tr>
@endforeach
</table>
@endsection