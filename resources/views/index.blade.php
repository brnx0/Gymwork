@extends('layout.main')
@section('content')
 @if (session()->has('msg'))
        <div class="alert alert-success" role="alert">
            {{session('msg')}}
        </div>
    @endif
@endsection