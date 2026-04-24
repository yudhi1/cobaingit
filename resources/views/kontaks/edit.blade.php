@extends('kontaks.layout')
@section('content')
<h3>Edit Kontak</h3>
<form action="{{ route('kontaks.update', $kontak) }}" method="POST">
    @method('PUT')
    @include('kontaks._form')
</form>
@endsection
