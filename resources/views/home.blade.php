@extends('layouts.main')

@section('content')
@include('sections.intro')

<main id="main">
  @include('sections.about')

  @include('sections.speakers')

  @include('sections.schedule')
 
 @include('sections.contact')
</main>
@endsection