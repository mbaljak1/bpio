@extends('app')

@section('content')

<table class="table">
<tr class="table-dark">
<th>Id</th>
<th>First name</th>
<th>Last name</th>
<th>DoB</th>
<th>Adress</th>
<th>Town</th>
<th>Postcode</th>
<th>Phone</th>
<th>email</th>
<th>OIB</th>
<th>Driving license num</th>
</tr>
@foreach($users as $user)
<tr>
    <td>{{$user->id}}</td>
    <td>{{$user->first_name}}</td>
    <td>{{$user->last_name}}</td>
    <td>{{$user->date_of_birth}}</td>
    <td>{{$user->adress}}</td>
    <td>{{$user->town}}</td>
    <td>{{$user->postcode}}</td>
    <td>{{$user->phone}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->oib}}</td>
    <td>{{$user->driving_license_num}}</td>
    
</tr>
@endforeach
</table>
@endsection