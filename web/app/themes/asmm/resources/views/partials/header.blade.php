<header id="header">
  <nav class="nav-primary py-5">
    <div class="max-w-5xl mx-auto p-2 sm:px-6 lg:px-8">
      <div class="relative flex items-start justify-between">
        @include('partials.menu-mobile-toggle')

        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-between">
          <div class="flex-shrink-0 flex items-center">
            <a class="brand sm:hidden" href="{{ home_url('/') }}">ASMM</a>
            <a class="brand hidden sm:block" href="{{ home_url('/') }}">{{ $siteName }}</a>
          </div>
          <div class="hidden sm:block sm:ml-6">
            @include('partials.nav.desktop')
          </div>
        </div>
      </div>
    </div>

    @include('partials.nav.mobile')
  </nav>

  <div class="separator">
    @svg('images.wave')
  </div>
</header>
