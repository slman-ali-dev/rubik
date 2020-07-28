@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => "لوحة التحكم",
        
    ];
@endphp

@section('content')
@endsection