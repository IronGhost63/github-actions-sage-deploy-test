@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <h1 class="text-xl text-blue-900">Hello World</h1>
  <p class="text-red-800">This is a test deployment</p>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
