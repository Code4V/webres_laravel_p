@include('partials.__header', ['title' => 'Code4V'])
    <nav class="sticky w-full h-20 top-0 z-20 bg-slate-200">
       <ul class="flex flex-wrap relative text-black z-10 gap-2 ml-10 pt-7">
            <li class="flex transition z-50 font-normal hover:font-extrabold hover:scale-110 hover:before:content-['>'] target:before:content-['>'] before:transition before:opacity-0 hover:before:opacity-100 before:absolute group" >
                <a href="#" class="group-hover:underline cursor-default duration-300 transition px-3">ABOUT ME</a>
            </li>
            <li class="flex transition z-50 font-normal hover:font-extrabold hover:scale-110 hover:before:content-['>'] target:before:content-['>'] before:transition before:opacity-0 hover:before:opacity-100 before:absolute group">
                <a href="#skills" class="group-hover:underline cursor-default transition duration-300 px-3">SKILLS</a>
            </li>
            <li class="flex transition z-50 font-normal hover:font-extrabold hover:scale-110 hover:before:content-['>'] target:before:content-['>'] before:transition before:opacity-0 hover:before:opacity-100 before:absolute group">
                <a href="#works" class="group-hover:underline cursor-default transition duration-300 px-3">MY WORKS</a>
            </li>
            <li class="flex transition z-50 font-normal hover:font-extrabold hover:scale-110 hover:before:content-['>'] target:before:content-['>'] before:transition before:opacity-0 hover:before:opacity-100 before:absolute group">
                <a href="#social" class="group-hover:underline cursor-default transition duration-300 px-3">MY SOCIAL</a>
            </li>
       </ul>
    </nav>
    <main class="mx-12 sm:mx-20 md:mx-20 lg:mx-30 xl:mx-60 2xl:mx-112 mt-12 px-8 outline outline-1 outline-green-400">
        <header class="relative h-112 min-h-screen z-10">
            <div class="absolute bottom-48 pb-2 px-2 md:px-6  border-orange-300 rounded-md hover:bg-orange-500 hover:text-gray-900 transition w-64 md:w-112 lg:w-164 shadow-md hover:shadow-orange-700/90 z-10">
                <h1 class="text-5xl md:text-8xl lg:text-9xl">CODE4V</h1>
                <p class="w-fit text-xs md:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit veniam nam esse! Sed, recusandae eius voluptatibus nobis delectus voluptatem cumque. Nisi illo animi hic sit magnam incidunt voluptas similique?</p>
            </div>
            <div>
                <img src="" alt="">
            </div>
        </header>

        <section class="min-h-screen pt-32" id="skills">
            <span class="text-3xl">SKILLS</span>
            <div class="flex flex-col gap-2 basis-1 p-2 h-64 min-h-16">
                <div class=""> <i></i>
                    <span class="">
                        PHP
                    </span>
                </div>
                <div> <i></i>
                    <span>
                        HTML
                    </span>
                </div>
                <div> <i></i>
                    <span>
                        CSS
                    </span>
                </div>
                <div> <i></i>
                    <span>
                        JAVASCRIPT
                    </span>
                </div>
                <div> <i></i>
                    <span>
                        C++
                    </span>
            </div>
            </div>
        </section>
        <section class="min-h-screen pt-32" id="works">
            <span class="text-3xl">MY WORKS</span>
        </section>
        <section class="min-h-screen pt-32" id="social">
            <span class="text-3xl">MY SOCIAL</span>
        </section>
    </main>
@include('partials.__footer')