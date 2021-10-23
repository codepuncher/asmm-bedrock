@include('partials.header')

<div class="w-full max-w-5xl mx-auto px-2 sm:px-6 lg:px-8">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  <main id="main" class="py-8 prose max-w-none main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

</div>

@include('partials.footer')
