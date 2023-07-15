@include('partials.__header', ['title' => 'Code4V'])

@php 
    $front_end = [
                    ["skillName"=>"html","skillPercent"=>85, "skillIcon"=>"fa-html5"],
                    ["skillName"=>"css","skillPercent"=>90, "skillIcon"=>"fa-css3-alt"],
                    ["skillName"=>"javascript","skillPercent"=>65, "skillIcon"=>"fa-square-js"]
                    ];
                    
    $back_end = [
                    ["skillName"=>"php","skillPercent"=>85, "skillIcon"=>"fa-php"],
                    ["skillName"=>"node","skillPercent"=>50, "skillIcon"=>"fa-node-js"],
                    ["skillName"=>"python","skillPercent"=>50, "skillIcon"=>"fa-python"]
                ];

    $dev_ops = [
                    ["skillName"=>"git","skillPercent"=>80, "skillIcon"=>"fa-git-alt"],
                    ["skillName"=>"slack","skillPercent"=>100, "skillIcon"=>"fa-slack"],
                ];

    $works = [
                ["workTitle" => "Lakbay sa Bayan", 
                    "workDescription" => "A website for Travel Agencies to post their package with instead of solely relying on Facebook to share their packages",
                    "workImage" => [
                                    "large_screen" => "Lakbay_Logo.webp",
                                    "small_screen" => "Lakbay.webp"
                                ],
                    "workLink" => "https://www.lakbaysabayan.com"

                ], 
                [
                    "workTitle" => "Eira University", 
                    "workDescription" => "A certification website to test your knowledge on robotic topics",
                    "workImage" => [
                                    "large_screen" => "Eira_Logo.webp",
                                    "small_screen" => "Eira.webp"
                                ],
                    "workLink" => "https://eira.erovoutika.ph"
                ],
                ]; 
@endphp 

    <x-navigation indexlocation='#' />

    <header class="flex relative min-w-screen max-h-[120svh] z-10 justify-center items-center snap-top">
        <div class="flex flex-col-reverse md:flex-row relative align-middle content-center border-orange-300 z-10 backdrop-blur-lg md:min-h-[80%] group sm:order-none cursor-default mx-7">
            <div class="basis-1/2 block sticky top-14 w-full md:w-[50%] h-fit md:p-6">
                <div class="">
                    <h1 class="text-7xl lg:text-8xl xl:text-9xl font-extrabold group-hover:text-orange-500 transition uppercase">Jeanne Francis Rivas</h1>
                </div>
                <p class="w-fit text-sm break-words pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit veniam nam esse! Sed, recusandae eius voluptatibus nobis delectus voluptatem cumque. Nisi illo animi hic sit magnam incidunt voluptas similique?</p>
            </div>
            
            <div class="basis-1/2 relative w-full md:w-1/2 h-full object-cover overflow-hidden rounded-t-md md:rounded-e-md md:rounded-s-none  mt-6">
                <img src="/assets/HeadMe.JPG" alt="" class="h-full md:h-1/2 w-full object-cover grayscale object-center transition-all duration-500 group-hover:scale-110 colored group-hover:grayscale-0 ">
            </div>
        </div>
    </header>
    
    <main class="flex flex-col relative min-h-full mt-12 snap-center md:max-w-5xl justify-center mx-auto ">

        <section class="min-h-126 pt-28 snap-top mx-5" id="skills">
            <p class="w-full"><span class="block text-2xl font-extrabold mx-auto w-fit my-5">SKILLS</span></p>
            <div class="grid md:grid-cols-3 gap-3 px-2 h-fill min-h-16">
                
                <div class="md:col-span-2 md:row-span-2 h-fill flex flex-col border-2 border-spacing-1 p-5 rounded-md flex-wrap overflow-hidden">
                    <h4 class="font-semibold">FRONT-END</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 flex-nowrap md:flex-wrap gap-5">
                        @foreach ($front_end as $subkey => $subvalue)
                        <x-skill :skillName="$subvalue['skillName']" :skillPercent="$subvalue['skillPercent']" :skillIcon="$subvalue['skillIcon']"/>
                        @endforeach
                    </div>
                </div>
                

                <div class="flex flex-col md:row-span-2 border-2 border-spacing-1 p-5 rounded-md overflow-hidden">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 flex-nowrap md:flex-wrap gap-5">
                        @foreach ($dev_ops as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>

                <div class="md:col-span-3 flex flex-col border-2 border-spacing-1 p-5 rounded-md">
                    <h4 class="font-semibold">BACK-END</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 gap-5 flex-nowrap md:flex-wrap">
                        @foreach ($back_end as $subkey => $subvalue)
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

        <section class="min-h-fit pt-28 snap-center mx-5" id="works">
            <p class="w-full"><span class="block text-2xl font-extrabold mx-auto w-fit my-5">PROJECTS INVOLVED</span></p>
            
            <div class="grid md:grid-cols-2 gap-3">
                @foreach ($works as $key => $work)
                   <x-work :workTitle="$work['workTitle']" :workDescription="$work['workDescription']" :workImage="$work['workImage']" :workLink="$work['workLink']"/>
                @endforeach
            </div>

        </section>

        <section class="min-h-screen pt-28 snap-center mx-5" id="social">
            <span class="text-2xl font-extrabold">MY SOCIAL</span>
        </section>
    </main>
@include('partials.__footer')