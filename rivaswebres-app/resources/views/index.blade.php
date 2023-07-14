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

        <section class="min-h-126 snap-top mx-5" id="skills">
            <p class="w-full"><span class="block text-2xl font-extrabold  mx-auto w-fit">SKILLS</span></p>
            <div class="grid md:grid-cols-3 gap-3 p-2 h-fill min-h-16">

                <div class="md:col-span-2 md:row-span-2 h-112 flex flex-col border-2 border-spacing-1 p-5 rounded-md flex-wrap">
                    <h4 class="font-semibold">FRONT END</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 flex-nowrap md:flex-wrap gap-5">
                        <div class="md-grow md:basis-1/3 flex group/icon flex-row mx-3">
                            <i class="fa-brands fa-html5 fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    HTML
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        80%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-css3-alt fa-5x scale-50 sm:scale-100  hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    CSS
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        90%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                        
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 w-[90%] h-1.5 rounded-full"></div>
                                 </div>
                            </div>
                        </div>
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-square-js fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    JAVASCRIPT
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        65%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col md:row-span-2 border-2 border-spacing-1 p-5 rounded-md">
                    <h4 class="font-semibold">DEV OPS</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 flex-nowrap md:flex-wrap gap-5">
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-git-alt fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    GIT
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        80%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-slack fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    SLACK
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        100%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3 flex flex-col border-2 border-spacing-1 p-5 rounded-md">
                    <h4 class="font-semibold">BACK END</h4>
                    <div class="flex flex-col md:flex-row place-content-center w-full my-2 gap-5">
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-php fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    PHP
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        80%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-node-js fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    NODE
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        50%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="md-grow md:basis-1/3 flex flex-row mx-3">
                            <i class="fa-brands fa-python fa-5x scale-50 sm:scale-100 hover:text-orange-500 hover:rotate-12  hover:scale-90 ease-in-out-sudden duration-500 transition-all group"></i>
                            <div class="ps-3 w-full">
                                <span class="block relative">
                                    PYTHON
                                </span>
                                <div class="flex">         
                                    <span class="font-medium text-4xl">
                                        50%
                                    </span>
                                    <div class="ms-1 place-self-end">         
                                        <span class="font-medium text-base">
                                            Proficient
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full bg-gray-200 rounded-full h-1.5 dark:bg-gray-700/25">
                                    <div class="bg-orange-500 h-1.5 rounded-full" style="width: 50%"></div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                

            </div>
            </div>
        </section>

        <section class="min-h-fit pt-32 snap-center mx-5" id="works">
            <span class="text-2xl font-extrabold">MY WORKS</span>

             <div class="w-full flex flex-col sm:flex-row p-3 mt-4 rounded-xl border">
                <div class="w-full pt-2 sm:w-[70%]">
                    <h4 class="text-2xl font-medium">LAKBAY SA BAYAN</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur dolores id quo mollitia repellat consequatur nemo in ab sint ducimus asperiores atque aliquam vero qui, expedita quaerat, corporis distinctio.</p>
                    <a href="https://www.lakbaysabayan.com" target="_blank">
                        <button class="bg-orange-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-orange-600 after:content-['\00a0>'] ">Go to site</button>
                    </a>
                </div>
                <div class="w-full sm:w-[30%] order-first sm:order-none">
                    <picture>
                        <source media="(min-width: 640px)" srcset="assets/Lakbay_Logo.webp">
                        <img src="/assets/Lakbay.webp" alt="" class="object-fill w-full rounded-xl grayscale">
                    </picture>
                </div>
            </div>
             
            <div class="w-full flex flex-col sm:flex-row p-3 mt-4 rounded-xl border">
                <div class="w-full pt-2 sm:w-[70%]">
                    <h4 class="text-2xl font-medium">EIRA UNIVERSITY</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consectetur dolores id quo mollitia repellat consequatur nemo in ab sint ducimus asperiores atque aliquam vero qui, expedita quaerat, corporis distinctio.</p>
                    <a href="https://eira.erovoutika.ph" target="_blank">
                        <button class="bg-orange-500 h-7 w-24 rounded-md text-white transition-colors duration-500 uppercase text-xs hover:bg-orange-600 after:content-['\00a0>'] ">Go to site</button>
                    </a>
                </div>
                <div class="w-full sm:w-[30%] order-first sm:order-none">
                    <picture>
                        <source media="(min-width: 640px)" srcset="assets/Eira_Logo.webp">
                        <img src="/assets/Eira.webp" alt="" class="object-fill w-full rounded-xl grayscale">
                    </picture>
                </div>
             </div>

        </section>

        <section class="min-h-screen pt-32 snap-center mx-5" id="social">
            <span class="text-2xl font-extrabold">MY SOCIAL</span>
        </section>
    </main>
@include('partials.__footer')