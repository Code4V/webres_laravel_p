<nav class="sticky top-0 z-20 hidden w-full h-screen transition-all duration-300 delay-150 opacity-0 md:h-20 bg-slate-200/50 md:block md:opacity-100 backdrop-blur-md" id="nav-bar">
    <ul class="relative z-10 flex flex-col flex-wrap gap-2 text-black md:flex-row ms-10 md:ms-0 pt-7 md:justify-center md:items-center">
        <span class="text-2xl font-extrabold cursor-default md:basis-28">CODE<span class="text-orange-500">4</span>V</span>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0" >
            <a href="{{ $indexlocation ?? null }}" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base " onclick="toggleSide()">ABOUT ME</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#skills" class="px-3 text-5xl no-underline transition duration-300 cursor-default group-hover:underline md:text-base " onclick="toggleSide()">SKILLS</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#works" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base " onclick="toggleSide()">WORKS</a>
        </li>
        
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#social" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base " onclick="toggleSide()">SOCIALS</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/contact" class="px-3 text-5xl transition duration-300 cursor-default group-hover:underline md:text-base " onclick="toggleSide()">CONTACT</a>
        </li>
    </ul>

</nav>


<div class="absolute top-0 block md:hidden">
    <button type="button" class="fixed top-0 z-50 block text-3xl transition-all left-3 md:hidden hover:rotate-45 hover:text-orange-500 active:text-orange-500" onclick="toggleSide()" id="side-button"> &plus;</button>
</div>

<script>
    const toggleSide = () =>
    {
        let sidebar = document.querySelector("#nav-bar");
        let sidebar_button = document.querySelector("#side-button");

        sidebar.classList.toggle("hidden");
        sidebar.classList.toggle("block");
        sidebar.classList.toggle("opacity-100");
        sidebar.classList.toggle("opacity-0");
        sidebar_button.classList.toggle("rotate-45");
    }
</script>