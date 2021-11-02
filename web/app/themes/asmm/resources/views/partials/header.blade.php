<header id="header" class="bg-blue-dark relative">
  <nav class="nav-primary py-5">
    <div class="max-w-5xl mx-auto p-2 sm:px-6 lg:px-8">
      <div class="relative flex items-start justify-between">
        @include('partials.menu-mobile-toggle')

        <div class="flex-1 flex items-center justify-center sm:items-center sm:justify-between">
          <div class="flex-shrink-0 flex items-center">
            <a class="brand text-3xl font-medium text-white sm:hidden" href="{{ home_url('/') }}">ASMM</a>
            <a class="brand text-2xl font-medium text-white hidden sm:block" href="{{ home_url('/') }}">{{ $siteName }}</a>
          </div>
          <div class="hidden sm:block">
            @include('partials.nav.desktop')
          </div>
        </div>
      </div>
    </div>

    @include('partials.nav.mobile')
  </nav>
</header>
