@include('sections.header')

@if(function_exists('yoast_breadcrumb') && ! is_front_page())
  <div class="breadcrumbs w-full flex justify-center border-b border-yellow">
    <div class="w-full max-w-screen-xl py-8 px-2 sm:px-6 lg:px-8">
      {!! yoast_breadcrumb() !!}
    </div>
  </div>
@endif

<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<main id="main" class="w-full max-w-screen-xl mx-auto py-8 px-2 sm:px-6 lg:px-8 main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('sections.footer')
