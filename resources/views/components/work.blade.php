@php
    $categoriesAvailable = [
                            "PHP" => "hover:bg-purple-200",
                            "JS" => "hover:bg-yellow-200",
                            "CSS" => "hover:bg-blue-200",
                            "PYTHON" => "hover:bg-yellow-200 text-indigo-900",
                            "RUBY" => "hover:bg-red-200",
                           ];
@endphp

<div class="flex flex-col w-full px-5 py-3 mt-2 border-2 rounded-md shadow-sm sm:flex-row">
    <div class="w-full flex flex-col sm:w-[70%] relative justify-between">
        <div class="flex mt-2 sm:mt-0">
            @foreach ($workCategory as $categories)
            
            <span class="px-3 py-1 me-1 font-medium rounded-[100vmax] transition duration-500 ease-in-out-sudden text-xs cursor-default bg-orange-100 {{ $categoriesAvailable[$categories] ?? "hover:bg-orange-400" }}">
              {{ $categories }}
            </span>
            
            @endforeach
        </div>
        <div class="mt-2 grow">  
            <h4 class="text-2xl font-medium text-orange-500"> {{ $workTitle }} </h4>
            <p class="mb-5 leading-tight">{{ $workDescription }}</p>
        </div>
        <div class="relative h-12">
            <a href="{{ $workLink }}" target="_blank" class="absolute bottom-0">
                <button class="bg-accent-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-accent-600 after:content-['\00a0>'] ">Go to site</button>
            </a>
            
        </div>
        
    </div>
    <div class="w-full sm:w-[30%] order-first sm:order-none sm:ms-2 rounded-md bg-orange-100/50 overflow-hidden" >
        <picture>
            <source media="(min-width: 640px)" srcset="assets/{{ $workImage['large_screen'] }}">
            <img src="/assets/{{ $workImage['small_screen'] }}" alt="" class="object-cover w-full transition-transform duration-500 translate-x-7 sm:h-full ease-in-out-sudden sm:object-left hover:scale-110 hover:translate-x-0">
        </picture>
    </div>
</div>