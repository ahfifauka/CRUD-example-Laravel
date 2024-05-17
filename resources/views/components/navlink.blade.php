<div>

  <a href="{{ $url }}"
    class="text-white capitalize hover:text-teal-300 transition-all font-semibold {{ request()->routeIs($active) ? 'text-teal-300' : '' }} ">{{ $name }}</a>
</div>
