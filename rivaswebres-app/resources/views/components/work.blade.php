<div class="w-full flex flex-col sm:flex-row px-3 py-2 mt-2 rounded-md border">
    <div class="w-full flex flex-col sm:w-[70%] relative justify-between">
        <div class="">  
            <h4 class="text-2xl font-medium"> {{ $workTitle }} </h4>
            <p class="mb-5 leading-tight">{{ $workDescription }}</p>
        </div>
        <div class="relative h-12">
            <a href="{{ $workLink }}" target="_blank" class="absolute bottom-0">
                <button class="bg-orange-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-orange-600 after:content-['\00a0>'] ">Go to site</button>
            </a>
        </div>
        
    </div>
    <div class="w-full sm:w-[30%] order-first sm:order-none ms-2 ">
        <picture>
            <source media="(min-width: 640px)" srcset="assets/{{ $workImage['large_screen'] }}">
            <img src="/assets/{{ $workImage['small_screen'] }}" alt="" class="object-fill w-full rounded-xl grayscale bg-orange-500/10">
        </picture>
    </div>
</div>