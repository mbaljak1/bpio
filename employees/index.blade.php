@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>Phone</th>
<th>email</th>
</tr>
@foreach($employees as $employee)
<tr>
    <td>{{$employee->id}}</td>
    <td>{{$employee->first_name}}</td>
    <td>{{$employee->last_name}}</td>
    <td>{{$employee->phone}}</td>
    <td>{{$employee->email}}</td>
    
</tr>
@endforeach
</table>
@endsection