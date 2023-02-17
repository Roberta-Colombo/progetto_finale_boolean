@extends('layouts.admin')

@section('content')

<h1>{{ $apartment->title }}</h1>
<span>{{ $apartment }}</span>
<h1>{{ $sponsor->name }}</h1>
<span>{{ $sponsor }}</span>


<form id="submitdb" action="{{ route('admin.sponsors.store') }}" method="POST">
    @csrf
    <input type="text" value="{{ $apartment->id }}" name="apartment_id" id="apartemnt_id">
    <input type="text" value="{{ $sponsor->id }}" name="sponsor_id" id="sponsor_id">

    <button id="btnformdb" type="submit" class="btn btn-danger">Invia</button>
</form>

</body>
@endsection
