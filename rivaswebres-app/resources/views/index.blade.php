@include('partials.__header', ['title' => 'Code4V'])
    <x-navigation/>

    <header class="flex relative min-w-screen min-h-screen z-10 justify-center items-center ">
        <div class="absolute align-middle content-center mx-2 lg:top-auto lg:mx-0 lg:bottom-96 text-white lg:left-48 pb-2 px-2 md:px-6 border-orange-300 rounded-md hover:bg-orange-500 hover:text-gray-900 transition w-auto md:w-112 lg:w-164 shadow-md hover:shadow-orange-700/90 z-10 backdrop-blur-lg">
            <div class="relative w-fit">
                <h1 class="text-7xl md:text-8xl lg:text-9xl font-extrabold after:content-['Jeanne\00a0''Francis'] after:absolute after:-bottom-3 xl:after:-bottom-2 after:right-0 after:text-base  after:w-auto" >RIVAS</h1>
            </div>
            <p class="w-fit text-xs md:text-sm break-words pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit veniam nam esse! Sed, recusandae eius voluptatibus nobis delectus voluptatem cumque. Nisi illo animi hic sit magnam incidunt voluptas similique?</p>
        </div>
        <div class="h-full">
            <img src="https://picsum.photos/1920/1080/?grayscale=1.webp" alt="" class="h-full object-cover">
        </div>
    </header>
    <main class="mx-2 sm:mx-20 md:mx-20 lg:mx-30 xl:mx-60 2xl:mx-112 mt-12 px-8 outline outline-1 outline-green-400">

        <section class="min-h-screen pt-32" id="skills">
            <span class="text-3xl font-extrabold">SKILLS</span>
            <div class="flex flex-col gap-3 basis-1 p-2 h-64 min-h-16">
                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">FRONT END</h4>
                    <div class="flex flex-col lg:flex-row items-center justify-around content-between w-full mb-2">
                        <div>
                            <div class="block">
                                HTML
                            </div>
                            <i class="fa-brands fa-html5 fa-5x hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div>
                            <span class="block">
                                CSS
                            </span>
                            <i class="fa-brands fa-css3-alt fa-5x hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div>
                            <span class="block">
                                JAVASCRIPT
                            </span>
                            <i class="fa-brands fa-square-js fa-5x hover:text-orange-500 transition-colors"></i>
                        </div>
                    
                        
               
                    </div>
                </div>

                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">BACK END</h4>
                    <div class="flex flex-col lg:flex-row items-center justify-around content-between w-full">
                        <div class="">
                            <span class="block relative">
                                PHP
                            </span>
                            <i class="fa-brands fa-php fa-5x  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative">
                                NODE
                            </span>
                            <i class="fa-brands fa-node-js fa-5x  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative">
                                PYTHON
                            </span>
                            <i class="fa-brands fa-python fa-5x  hover:text-orange-500 transition-colors"></i>
                        </div>
                        
                    </div>
                </div>

                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-col lg:flex-row items-center justify-around content-between w-full">
                        <div class="">
                            <span class="block relative">
                                GIT
                            </span>
                            <i class="fa-brands fa-git-alt fa-5x  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative">
                                SLACK
                            </span>
                            <i class="fa-brands fa-slack fa-5x  hover:text-orange-500 transition-colors"></i>
                        </div>
                    </div>
                </div>

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