<a href="{{ route($url, $params) }}"
  class="border p-2 capitalize rounded-md transition-all 
       @switch($type)
           @case('primary')
               bg-blue-500 hover:bg-blue-500/80 text-white
               @break
           @case('danger')
               bg-red-500 hover:bg-red-500/80 text-white
               @break
           @case('warning')
               bg-yellow-500 hover:bg-yellow-500/80 text-white
               @break
           @case('success')
               bg-green-500 hover:bg-green-500/80 text-white
               @break
           @case('base')
               bg-teal-800 hover:bg-teal-800/80 text-white
               @break
           @default
               text-blue-500 hover:text-blue-500/80
       @endswitch">
  {{ $title }}
</a>
