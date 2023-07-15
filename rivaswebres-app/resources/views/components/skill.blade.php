<div class="md-grow md:basis-1/3 flex flex-row mx-3 group/skill">
    <i class="fa-brands {{ $skillIcon }} fa-5x scale-50 sm:scale-100 group-hover/skill:text-orange-500 group-hover/skill:rotate-12  group-hover/skill:scale-90 ease-in-out-sudden duration-500 transition-all group/skill"></i>
    <div class="ps-3 w-full group/skill">
        <span class="font-medium block relative uppercase">
            {{ $skillName }}
        </span>
            
            
        <div class="flex overflow-hidden">         
            <span class="font-medium text-3xl transition-all duration-300 delay-300 ease-in-out text-orange-500 group-hover/skill:translate-y-28 leading-none">
                {{ $skillPercent }}%
            </span>
            <div class="ms-1 place-self-end transition-all duration-300 delay-300 ease-in-out group-hover/skill:-translate-x-16">         
                <span class="font-normal text-base">
                    Proficiency
                </span>
                
            </div>
        </div>
        
        <div class="w-0 group-hover/skill:w-full delay-300 overflow-hidden bg-gray-200 rounded-full h-1.5 transition-all ease-in-out-sudden duration-300 dark:bg-gray-700/25 group-hover/skill:h-5">
            <div class="bg-orange-500 h-1.5 transition-all rounded-full ease-in-out-sudden duration-300 text-center group-hover/skill:h-5 overflow-hidden text-orange-100 text-opacity-0 group-hover/skill:text-opacity-100" style="width: {{ $skillPercent }}%">{{ $skillPercent }}%</div>
        </div>
    </div>
</div>