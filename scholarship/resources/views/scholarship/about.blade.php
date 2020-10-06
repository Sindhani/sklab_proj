@extends('scholarship.layout.app')
@section('title', 'scholarship')

@section('content')
    @if(Session::has('success'))

        <div class="alert alert-success alert-dismissible fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Congrates!</strong> {{Session::get('success')}}
        </div>

    @endif
    <div class="container">
        <p class="display-1">Comming Soon</p>
    </div>
@endsection