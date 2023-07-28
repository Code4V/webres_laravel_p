<nav class="fixed top-0 z-20 hidden w-full h-screen transition-all duration-300 delay-150 shadow-md opacity-0 md:sticky md:h-20 bg-slate-200/50 md:block md:opacity-100 backdrop-blur-md after:contents-[' '] after:top-0 after:left-0 after:right-0 after:bottom-0 after:absolute after:shadow-xl after:opacity-0 hover:after:opacity-100 after:transition-opacity after:duration-300" id="nav-bar">
    <div class="relative top-0 z-10 flex flex-col flex-wrap gap-2 pt-6 text-black md:flex-row ms-10 md:ms-0 md:justify-center md:items-center">
        
        <div class="tracking-tight transition-all duration-500 ps-5 ease-in-out-sudden hover:tracking-widest group/navicon">
            <span class="text-2xl font-extrabold cursor-default md:basis-28">CODE<span class="text-orange-600 transition duration-300 group-hover/navicon:text-accent-500">4</span>V</span>
        </div>
        
        <ul class="flex flex-col justify-end gap-2 md:flex-row basis-1/3 md:grow md:ms-5">
            <li class=" md:basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-600 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0" >
                <a href="{{ $indexlocation ?? null }}" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base">ABOUT</a>
            </li>
            <li class=" md:basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-600 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
                <a href="/#skills" class="px-3 text-5xl no-underline transition duration-300 cursor-default group-hover:underline md:text-base">SKILLS</a>
            </li>
            <li class=" md:basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-600 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
                <a href="/#works" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base">WORKS</a>
            </li>
    
            <li class=" md:basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-600 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
                <a href="/#social" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base">SOCIALS</a>
            </li>
            <li class=" md:basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-600 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
                <a href="/contact" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base">CONTACT</a>
            </li>
        </ul>
        
    </div>
    <div class="absolute bottom-0 hidden w-full h-1 overflow-hidden transition-all duration-300 bg-gray-200 md:block ease-in-out-sudden dark:bg-gray-700/25 basis-24">
        <div class="h-1 overflow-hidden text-center text-blue-100 transition-all duration-300 ease-out bg-accent-500" style="width: 0" id="navprogress"></div>
    </div>
</nav>

<div class="absolute top-0 block md:hidden">
    <button type="button" class="fixed top-0 z-50 block text-3xl transition-all left-3 md:hidden hover:rotate-45 hover:text-orange-600 active:text-orange-600" onclick="toggleSide()" id="side-button"> &plus;</button>
</div>

<script>
    const navLinks = document.querySelectorAll("div>li>a");
    const nav = document.querySelector("nav");
    const navProgress = document.querySelector("#navprogress");
    
    
    document.addEventListener('scroll', ()=>{
        const maxHeight = (document.documentElement.offsetHeight - 
                           document.documentElement.clientHeight)
        var progress = Math.round(parseFloat(
                (document.scrollingElement.scrollTop/
                maxHeight)
                *100))

            
                
        if(progress == 100)
        {
            navProgress.classList.add("bg-orange-600")
            navProgress.classList.remove("bg-accent-500")
        }
        else 
        {
            navProgress.classList.add("bg-accent-500")
            navProgress.classList.remove("bg-orange-600")
        }
        
        navProgress.setAttribute("style", `width: ${progress}%`);
    });
    
    const toggleSide = () =>
    {
        let sidebar = document.querySelector("#nav-bar");
        let sidebar_button = document.querySelector("#side-button");
        
        sidebar.classList.toggle("hidden");
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("opacity-100");
        sidebar.classList.toggle("opacity-0");
        sidebar_button.classList.toggle("rotate-45");
    };
    
    navLinks.forEach(element => {
        element.addEventListener("click", toggleSide());    
    });
</script>