@include('partials.__header', ['title' => 'Code4V'])

<x-navigation indexlocation='#' />

<header class="flex relative min-w-screen max-h-[120svh] z-10 justify-center items-center snap-top">
    <div class="flex flex-col-reverse md:flex-row relative align-middle content-center border-orange-300 z-10 md:min-h-[80%] group sm:order-none cursor-default mx-7">
        <div class="basis-1/2 block sticky top-14 w-full md:w-[50%] h-fit md:px-6 md:pt-6">
            <div class="">
                <h1 class="font-extrabold uppercase transition text-7xl lg:text-8xl xl:text-9xl group-hover:text-orange-600">Jeanne Francis Rivas</h1>
            </div>
            <div class="flex overflow-hidden">
                <p class="pt-2"> IT • Programmer • Developer • Troubleshooter • Learner </p>
            </div>
            <div class="mt-4 overflow-hidden">
                <div class="flex gap-2 w-fit">
                    @foreach ($socials as $social)
                        <x-link :link="$social['socialLink']" :linkname="$social['socialName']" :icon="$social['socialIcon']"/>
                    @endforeach
                
                </div>
            </div>
        </div>
        
        <div class="relative object-cover w-full h-full mt-6 overflow-hidden basis-1/2 md:w-1/2 rounded-t-md md:rounded-e-md md:rounded-s-none">
            <img src="/assets/HeadMe.webp" alt="Rivas Teaching C++" class="object-cover object-center w-full h-full transition-all duration-500 shadow-sm md:h-1/2 grayscale group-hover:scale-110 colored group-hover:grayscale-0">
        </div>
    </div>
</header>

<main class="relative flex flex-col justify-center min-h-full mx-auto mt-12 md:max-w-5xl ">

    <section class="min-h-screen mx-5 pt-28 snap-top" id="skills">
        <h2><span class="block mx-auto my-5 text-2xl font-extrabold w-fit">SKILLS</span></h2>
        <div class="w-auto pb-4 overflow-hidden overflow-x-scroll scroll sm:overflow-x-hidden snap-x ">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-3 px-2 h-fill min-h-16 grid-cols-4 w-[96rem] sm:w-auto">

                <div class="flex flex-col flex-wrap p-5 overflow-hidden border-2 rounded-md shadow-sm md:col-span-2 md:row-span-2 h-fill border-spacing-1 snap-start">
                    <h4 class="font-semibold">FRONT-END</h4>
                    <div class="flex flex-col w-full gap-5 my-2 overflow-x-hidden overflow-y-scroll max-h-72 md:max-h-none md:overflow-y-auto md:flex-row flex-nowrap md:flex-wrap">
                        @foreach ($skills['front_end'] as $subkey => $subvalue)
                        <x-skill :skillName="$subvalue['skillName']" :skillPercent="$subvalue['skillPercent']" :skillIcon="$subvalue['skillIcon']"/>
                        @endforeach
                    </div>
                </div>
            
                <div class="flex flex-col row-span-1 p-5 overflow-hidden border-2 rounded-md shadow-sm md:row-span-3 lg:row-span-2 border-spacing-1 snap-start"">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-col w-full gap-5 my-2 md:flex-row flex-nowrap md:flex-wrap">
                        @foreach ($skills['dev_ops'] as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col col-span-1 p-5 border-2 rounded-md shadow-sm md:col-span-2 lg:col-span-3 border-spacing-1 snap-start"">
                    <h4 class="font-semibold">BACK-END</h4>
                    <div class="flex flex-col w-full gap-5 my-2 lg:flex-row place-content-center flex-nowrap lg:flex-wrap">
                        @foreach ($skills['back_end'] as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>
                
                <div class="flex flex-col p-5 border-2 rounded-md shadow-sm border-accent-300 md:col-span-3 border-spacing-1 snap-start"" >
                    <h4 class="font-semibold">CURRENTLY LEARNING</h4>
                    <div class="flex flex-col w-full gap-5 my-2 md:flex-row place-content-center flex-nowrap md:flex-wrap">
                        @foreach ($skills['learning'] as $subkey => $subvalue)
                        <x-skill :skillName=" $subvalue['skillName'] " :skillPercent=" $subvalue['skillPercent'] " :skillIcon=" $subvalue['skillIcon'] "/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </section>
   
    <section class="min-h-screen mx-5 pt-28 snap-start" id="works">
        <h2><span class="block mx-auto my-5 text-2xl font-extrabold w-fit">PROJECTS INVOLVED</span></h2>
        
        <div class="grid gap-3 md:grid-cols-2">
            @foreach ($works as $key => $work)
                <x-work :workTitle="$work['workTitle']" :workDescription="$work['workDescription']" :workImage="$work['workImage']" :workLink="$work['workLink']" :workCategory="$work['workCategory']"/>
            @endforeach
        </div>

    </section>

    <section class="min-h-screen mx-5 pt-28 snap-start " id="social">
        <h2><span class="block mx-auto my-5 text-2xl font-extrabold w-fit">WORK EXPERIENCE</span></h2>
        <div class="grid">
            @foreach ($experiences as $key => $experience)
                <x-experience :workYear="$experience['workYear']" :workCompany="$experience['workCompany']" :workDescription="$experience['workDescription']" :workPosition="$experience['workPosition']"/>
            @endforeach

            <div class="flex justify-center mt-16">
                <p class="italic uppercase">Thus, my career continues</p>
            </div>
        </div>
        
    </section>

    
</main>
@include('partials.__footer')