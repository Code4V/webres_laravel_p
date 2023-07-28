<div class="flex flex-row mx-3 md-grow md:basis-1/8 lg:basis-1/3 group/skill">
    
    <div class="w-16 max-w-lg text-center">
        <i class="fa-brands {{ $skillIcon }}  scale-75 sm:scale-100 group-hover/skill:text-orange-600 group-hover/skill:rotate-12  group-hover/skill:scale-90 ease-in-out-sudden duration-500 transition-all group/skill max-w-max text-5xl "></i>
    </div>
    <div class="w-full ps-3 group/skill">
        <span class="relative block font-medium leading-none uppercase">
            {{ $skillName }}
        </span>
            
            
        <div class="flex overflow-hidden">         
            <span class="text-3xl font-medium leading-none text-orange-600 transition-all duration-300 ease-in-out delay-300 group-hover/skill:translate-y-28">
                {{ $skillPercent }}%
            </span>
            <div class="transition-all duration-300 ease-in-out delay-300 ms-1 place-self-start group-hover/skill:-translate-x-16">         
                <span class="font-normal">
                    Proficiency
                </span>
            </div>
        </div>
        
        <div class="w-0 group-hover/skill:w-full -translate-y-2.5 delay-300 overflow-hidden bg-gray-200 rounded-full h-1.5 transition-all ease-in-out-sudden duration-300 dark:bg-gray-700/25 group-hover/skill:h-5">
            <div class="bg-orange-600 h-1.5 transition-all leading-normal rounded-full ease-in-out-sudden duration-300 text-center group-hover/skill:h-5 overflow-hidden text-blue-100 text-opacity-0 group-hover/skill:text-opacity-100" style="width: {{ $skillPercent }}%">{{ $skillPercent }}%</div>
        </div>
    </div>
</div>