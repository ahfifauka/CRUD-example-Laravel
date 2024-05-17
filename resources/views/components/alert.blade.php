 <div
   class="text-white h-14 flex items-center px-5 mb-5 rounded-md w-[80rem] 
    @switch($type)
        @case('success')
            bg-green-500/80
            @break
        @case('failed')
            bg-red-500/80
            @break
        @default
    @endswitch
 "
   id="alert">
   <h1>{{ $slot }}</h1>
 </div>
