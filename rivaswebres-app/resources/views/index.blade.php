@include('partials.__header', ['title' => 'Code4V'])
    <x-navigation indexlocation='#' />

    <header class="flex relative min-w-screen min-h-[50svh] z-10 justify-center items-center snap-top ">
        <div class="flex flex-col md:flex-row absolute align-middle content-center border-orange-300 rounded-md  shadow-md z-10 backdrop-blur-lg h-5/6 md:min-h-[80%] md:max-w-5xl group sm:order-none cursor-default mx-5">
            <div class="relative w-full md:w-[50%] p-6">
                <div class="relative">
                    <h1 class="text-7xl md:text-8xl lg:text-9xl font-extrabold after:content-['Jeanne\00a0''Francis'] after:relative   after:text-base group-hover:text-orange-500 after:w-auto after:block after:leading-none transition" >RIVAS</h1>
                </div>
                <p class="w-fit text-xs md:text-sm break-words pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur velit veniam nam esse! Sed, recusandae eius voluptatibus nobis delectus voluptatem cumque. Nisi illo animi hic sit magnam incidunt voluptas similique?</p>
            </div>
            
            <div class="relative w-full md:w-[50%] h-full object-cover overflow-hidden rounded-t-md md:rounded-e-md md:rounded-s-none order-first md:order-none">
                <img src="/assets/HeadMe.JPG" alt="" class="h-full w-full object-cover absolute grayscale object-center transition-all duration-500 group-hover:scale-110 colored group-hover:grayscale-0 ">
            </div>
        </div>

        <!-- <div class="custom-shape-divider-bottom-1686542073">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="fill-slate-100"></path>
            </svg>
        </div> -->
    </header>
    
    <main class="flex flex-col relative min-h-full  mt-12 snap-center md:max-w-5xl justify-center mx-auto">

        <section class="min-h-126 pt-32 snap-top" id="skills">
            <span class="text-3xl font-extrabold">SKILLS</span>
            <div class="flex flex-col gap-3 basis-1 p-2 h-fill min-h-16">
                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">FRONT END</h4>
                    <div class="flex flex-row items-center justify-around content-between w-full my-2">
                        <div>
                            <span class="block relative w-fit mx-auto">
                                HTML
                            </span>
                            <i class="fa-brands fa-html5 fa-5x scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div>
                            <span class="block relative w-fit mx-auto">
                                CSS
                            </span>
                            <i class="fa-brands fa-css3-alt fa-5x scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div>
                            <span class="block relative w-fit mx-auto">
                                JAVASCRIPT
                            </span>
                            <i class="fa-brands fa-square-js fa-5x  scale-50 sm:scale-100 hover:text-orange-500 transition-colors"></i>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">BACK END</h4>
                    <div class="flex flex-row items-center justify-around content-between w-full my-2">
                        <div class="">
                            <span class="block relative w-fit mx-auto">
                                PHP
                            </span>
                            <i class="fa-brands fa-php fa-5x scale-50 sm:scale-100 transform hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative w-fit mx-auto">
                                NODE
                            </span>
                            <i class="fa-brands fa-node-js fa-5x  scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative w-fit mx-auto">
                                PYTHON
                            </span>
                            <i class="fa-brands fa-python fa-5x  scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                        
                    </div>
                </div>

                <div class="flex flex-col border-2 border-spacing-1 p-5 rounded-md justify-center items-center">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-row items-center justify-around content-between w-full my-2">
                        <div class="">
                            <span class="block relative w-fit mx-auto">
                                GIT
                            </span>
                            <i class="fa-brands fa-git-alt fa-5x  scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                        <div class="">
                            <span class="block relative w-fit mx-auto">
                                SLACK
                            </span>
                            <i class="fa-brands fa-slack fa-5x  scale-50 sm:scale-100  hover:text-orange-500 transition-colors"></i>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>

        <section class="min-h-fit pt-32 snap-center" id="works">
            <span class="text-3xl font-extrabold">MY WORKS</span>

             <div class="w-full flex flex-col sm:flex-row p-3 mt-4 rounded-xl border">
                <div class="w-full pt-2 sm:w-[70%]">
                    <h4 class="text-2xl">LAKBAY SA BAYAN</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur dolores id quo mollitia repellat consequatur nemo in ab sint ducimus asperiores atque aliquam vero qui, expedita quaerat, corporis distinctio.</p>
                    <a href="https://www.lakbaysabayan.com" target="_blank">
                        <button class="bg-orange-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-orange-600 after:content-['\00a0>'] ">Go to site</button>
                    </a>
                </div>
                <div class="w-full sm:w-[30%] order-first sm:order-none">
                    <picture>
                        <source media="(min-width: 640px)" srcset="assets/Lakbay_Logo.webp">
                        <img src="/assets/Lakbay.webp" alt="" class="object-fill w-full rounded-xl">
                    </picture>
                </div>
            </div>
             
            <div class="w-full flex flex-col sm:flex-row p-3 mt-4 rounded-xl border">
                <div class="w-full pt-2 sm:w-[70%]">
                    <h4 class="text-2xl">EIRA UNIVERSITY</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur dolores id quo mollitia repellat consequatur nemo in ab sint ducimus asperiores atque aliquam vero qui, expedita quaerat, corporis distinctio.</p>
                    <a href="https://eira.erovoutika.ph" target="_blank">
                        <button class="bg-orange-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-orange-600 after:content-['\00a0>'] ">Go to site</button>
                    </a>
                </div>
                <div class="w-full sm:w-[30%] order-first sm:order-none">
                    <picture>
                        <source media="(min-width: 640px)" srcset="assets/Eira_Logo.webp">
                        <img src="/assets/Eira.webp" alt="" class="object-fill w-full rounded-xl">
                    </picture>
                </div>
             </div>

        </section>

        <section class="min-h-screen pt-32 snap-center" id="social">
            <span class="text-3xl font-extrabold">MY SOCIAL</span>
        </section>
    </main>
@include('partials.__footer')