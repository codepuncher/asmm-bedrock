<header id="header" class="w-full flex justify-center relative z-10 border-b border-yellow">
  <div class="w-full max-w-screen-xl py-8 px-2 sm:px-6 lg:px-8">
    <nav class="nav-primary">
      <div class="mx-auto">
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
  </div>
</header>
