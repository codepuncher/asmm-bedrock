<div id="menu-mobile" class="lg:hidden transform translate-x-0 translate-x-full transition-transform fixed top-0 right-0 h-full w-full bg-yellow">
  <div class="top-bar text-blue-dark flex items-center justify-between px-2 sm:px-6 border-b border-blue-dark">
    <a class="brand text-2xl font-medium text-blue-dark" href="{{ home_url('/') }}">{{ $siteName }}</a>

    @include('partials.menu-mobile-toggle')
  </div>
  <nav>
    <ul>
      @foreach($items as $item)
        <li class="{{ $item->active || $item->activeParent ? 'bg-blue-dark' : '' }} {{ empty($item->children) ? '' : 'pb-2' }}">
          <a
            href="{{ $item->url }}"
            @if($item->active)
            class="text-yellow block p-2 sm:p-6 text-lg font-medium"
            @elseif($item->activeParent)
            class="text-white block p-2 sm:p-6 text-lg font-medium"
            @else
            class="text-blue-dark hover:bg-blue-dark hover:text-white block p-2 sm:p-6 text-lg font-medium transition-colors"
            @endif
            aria-current="page"
          >{!! esc_html($item->label) !!}</a>

          @unless(empty($item->children))
            <ul>
              @foreach($item->children as $child)
                <li class="ml-5">
                  <a
                    href="{{ $child->url }}"
                    @if($child->active)
                    class="text-yellow text-sm"
                    @elseif($item->active || $item->activeParent)
                    class="text-white text-sm"
                    @else
                    class="text-blue-dark text-sm"
                    @endif
                  >{!! esc_html($child->label) !!}</a>
                </li>
              @endforeach
            </ul>
          @endunless
        </li>
      @endforeach
    </ul>
  </nav>
</div>
