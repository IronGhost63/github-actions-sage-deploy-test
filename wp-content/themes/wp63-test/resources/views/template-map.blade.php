{{--
  Template Name: Maps
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
  <section class="interactive-map">
    <div class="interactive-map__map-box">
      <img src="{{ Vite::asset('resources/images/northern-map.svg') }}" alt="Maps" class="interactive-map__map-image">
      @foreach( $locations as $item )
      <a href="#" data-lat="{{ $item['lat'] }}" data-lng="{{ $item['lng'] }}" data-key="{{ $item['key'] }}" class="interactive-map__pin"></a>
      @endforeach
    </div>
    @foreach( $locations as $item )
    <div class="interactive-map__modal" data-key="{{ $item['key'] }}">
      <h2 class="interactive-map__modal-title">{{ $item['name'] }}</h1>
      <div class="interactive-map__modal-description">{!! $item['description'] !!}</div>
      <button class="interactive-map__modal-close">Close</button>
    </div>
    @endforeach
  </section>
  @endwhile
@endsection
