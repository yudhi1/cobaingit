@extends('kontaks.layout')
@section('content')
<h3>Tambah Kontak</h3>
<form action="{{ route('kontaks.store') }}" method="POST">
    @include('kontaks._form')
</form>
@endsection
