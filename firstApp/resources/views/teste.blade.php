@extends('layouts.main')
@section('title','Pagina Principal')
@section('content')


{{-- Usando if --}}
@if ($nome == "BRUNO")
    <h2>Meu nome é {{$nome}} e tenho {{$idade}} anos.</h2>
@else
    <h2>Meu nome não é BRUNO meu nome é {{$nome}} </h2>
@endif


<img src="/img/banner.jpg" alt="banner" id="banner">

<br><br>


{{-- Usando for --}}
@for($i = 0; $i < count($arr); $i++)
    <p>Indice {{$i}} - {{$arr[$i]}} </p>
@endfor

<br><br>

@foreach ($nomes as $nome)
    <p>{{$loop->index}} {{$nome}}</p>

@endforeach
<br><br>
{{-- Data --}}
<p>data tipo php puro {{$date}}</p>
<p>data usando a class carbon {{$dataFormatada}}</p>

@endsection