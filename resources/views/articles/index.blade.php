@extends('app')
<link rel="favicon" href="{{ asset('/phpelephant.ico') }}">

@section('title', 'gakitomo-LiveBBS')

@section('content')
  @include('nav')
  <div class="container">
  @foreach($articles as $article)
    @include('articles.card')
  @endforeach
  </div>
@endsection