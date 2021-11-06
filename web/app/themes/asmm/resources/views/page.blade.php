@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @includeUnless(is_front_page(), 'partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
