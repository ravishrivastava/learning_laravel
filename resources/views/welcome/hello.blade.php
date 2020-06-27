@extends('layout.app')

@section('header') 
This is header
@endsection

@section('content') 
    <br>
    I am from hello view file in folder. 
    <br>
    {{ $data }}

    @foreach($user as $item)
        <h2>{{$item}}</h2>
    @endforeach

    @if ($user[0] === 'abc@ac.com')
        <br> The Id is matched.
    @else
        <br> The Id is mismatched.
    @endif
@endsection 

@section('script') 
<script>
    alert('Hello');
</script>