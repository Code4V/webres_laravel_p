@include('partials.__header', ['title' => 'Code4V'])

@php 
    $front_end = [
                    ["skillName"=>"html","skillPercent"=>85, "skillIcon"=>"fa-html5"],
                    ["skillName"=>"css","skillPercent"=>90, "skillIcon"=>"fa-css3-alt"],
                    ["skillName"=>"javascript","skillPercent"=>65, "skillIcon"=>"fa-square-js"],
                    ["skillName"=>"wordpress","skillPercent"=>80, "skillIcon"=>"fa-wordpress"],
                ];
                    
    $back_end = [
                    ["skillName"=>"php","skillPercent"=>85, "skillIcon"=>"fa-php"],
                    ["skillName"=>"node","skillPercent"=>50, "skillIcon"=>"fa-node-js"],
                    ["skillName"=>"python","skillPercent"=>50, "skillIcon"=>"fa-python"]
                ];

    $dev_ops = [
                    ["skillName"=>"git","skillPercent"=>80, "skillIcon"=>"fa-git-alt"],
                    ["skillName"=>"slack","skillPercent"=>100, "skillIcon"=>"fa-slack"],
                    ["skillName"=>"discord","skillPercent"=>100, "skillIcon"=>"fa-discord"],
                ];

    $learning = [
                    ["skillName"=>"laravel","skillPercent"=>35, "skillIcon"=>"fa-laravel"],
                    ["skillName"=>"react","skillPercent"=>30, "skillIcon"=>"fa-react"],
                    ["skillName"=>"docker","skillPercent"=>25, "skillIcon"=>"fa-docker"],
                    ["skillName"=>"mongodb","skillPercent"=>40, "skillIcon"=>"fa-envira"],
                ];


    $works = [
                [   "workTitle" => "Lakbay sa Bayan", 
                    "workDescription" => "A website for Travel Agencies to post their package with instead of solely relying on Facebook to share their packages",
                    "workImage" => [
                                    "large_screen" => "Lakbay_Logo.webp",
                                    "small_screen" => "Lakbay.webp"
                                ],
                    "workLink" => "https://www.lakbaysabayan.com",
                    "workCategory" => ["PHP", "JS"]

                ], 
                [
                    "workTitle" => "Eira University", 
                    "workDescription" => "A certification website to test your knowledge on robotic topics",
                    "workImage" => [
                                    "large_screen" => "Eira_Logo.webp",
                                    "small_screen" => "Eira.webp"
                                ],
                    "workLink" => "https://eira.erovoutika.ph",
                    "workCategory" => ["PHP", "RUBY"]
                ],
             ]; 
@endphp 

<x-navigation indexlocation='#' />

<header class="flex relative min-w-screen max-h-[120svh] z-10 justify-center items-center snap-top">
    <div class="flex flex-col-reverse md:flex-row relative align-middle content-center border-orange-300 z-10 md:min-h-[80%] group sm:order-none cursor-default mx-7">
        <div class="basis-1/2 block sticky top-14 w-full md:w-[50%] h-fit md:p-6">
            <div class="">
                <h1 class="font-extrabold uppercase transition text-7xl lg:text-8xl xl:text-9xl group-hover:text-orange-500">Jeanne Francis Rivas</h1>
            </div>
            <p class="pt-2 text-base break-words w-fit"> IT • Programmer • Developer • Troubleshooter • Learner • </p>
        </div>
        
        <div class="relative object-cover w-full h-full mt-6 overflow-hidden basis-1/2 md:w-1/2 rounded-t-md md:rounded-e-md md:rounded-s-none">
            <img src="/assets/HeadMe.webp" alt="" class="object-cover object-center w-full h-full transition-all duration-500 md:h-1/2 grayscale group-hover:scale-110 colored group-hover:grayscale-0 ">
        </div>
    </div>
</header>

<main class="relative flex flex-col justify-center min-h-full mx-auto mt-12 snap-center md:max-w-5xl ">

    <section class="mx-5 min-h-126 pt-28 snap-top" id="skills">
        <p class="w-full"><span class="block mx-auto my-5 text-2xl font-extrabold w-fit">SKILLS</span></p>
        <div class="w-auto pb-4 overflow-hidden overflow-x-scroll scroll sm:overflow-x-hidden snap-x ">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3 px-2 h-fill min-h-16 grid-cols-4 w-[96rem] sm:w-auto">

                <div class="flex flex-col flex-wrap p-5 overflow-hidden border-2 rounded-md md:col-span-2 md:row-span-2 h-fill border-spacing-1 snap-center">
                    <h4 class="font-semibold">FRONT-END</h4>
                    <div class="flex flex-col w-full gap-5 my-2 md:flex-row place-content-center flex-nowrap md:flex-wrap">
                        @foreach ($front_end as $subkey => $subvalue)
                        <x-skill :skillName="$subvalue['skillName']" :skillPercent="$subvalue['skillPercent']" :skillIcon="$subvalue['skillIcon']"/>
                        @endforeach
                    </div>
                </div>
            
                <div class="flex flex-col row-span-1 p-5 overflow-hidden border-2 rounded-md md:row-span-3 lg:row-span-2 border-spacing-1 snap-center"">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-col w-full gap-5 my-2 md:flex-row place-content-center flex-nowrap md:flex-wrap">
                        @foreach ($dev_ops as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col col-span-1 p-5 border-2 rounded-md md:col-span-2 lg:col-span-3 border-spacing-1 snap-center"">
                    <h4 class="font-semibold">BACK-END</h4>
                    <div class="flex flex-col w-full gap-5 my-2 lg:flex-row place-content-center flex-nowrap lg:flex-wrap">
                        @foreach ($back_end as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>
                
                <div class="flex flex-col p-5 border-2 border-orange-200 rounded-md md:col-span-3 border-spacing-1 snap-center"" >
                    <h4 class="font-semibold">CURRENTLY LEARNING</h4>
                    <div class="flex flex-col w-full gap-5 my-2 md:flex-row place-content-center flex-nowrap md:flex-wrap">
                        @foreach ($learning as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <script>
            const proficiencyBars = document.querySelectorAll(".w-full .bg-gray-200 .rounded-full")
        </script>
    </section>

    <section class="mx-5 min-h-fit pt-28 snap-center" id="works">
        <p class="w-full"><span class="block mx-auto my-5 text-2xl font-extrabold w-fit">PROJECTS INVOLVED</span></p>
        
        <div class="grid gap-3 md:grid-cols-2">
            @foreach ($works as $key => $work)
                <x-work :workTitle="$work['workTitle']" :workDescription="$work['workDescription']" :workImage="$work['workImage']" :workLink="$work['workLink']" :workCategory="$work['workCategory']"/>
            @endforeach
        </div>

    </section>

    <section class="min-h-screen mx-5 pt-28 snap-center" id="social">
        <span class="text-2xl font-extrabold">MY SOCIAL</span>
    </section>
</main>
@include('partials.__footer')