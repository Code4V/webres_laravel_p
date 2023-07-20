<nav class="sticky w-full md:h-20 top-0 z-20 bg-slate-200 md:block h-screen hidden opacity-0 md:opacity-100 transition-all delay-150 duration-300" id="nav-bar">
    <ul class="flex flex-col md:flex-row flex-wrap relative text-black ms-10 md:ms-0 z-10 gap-2 pt-7 md:justify-center md:items-center">
        <span class="md:basis-28 text-2xl font-extrabold cursor-default">CODE<span class="text-orange-500">4</span>V</span>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0" >
            <a href="{{ $indexlocation ?? null }}" class="group-hover:underline cursor-default duration-300 transition px-3 text-5xl md:text-base " onclick="toggleSide()">ABOUT ME</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#skills" class="group-hover:underline no-underline cursor-default transition duration-300 px-3 text-5xl md:text-base " onclick="toggleSide()">SKILLS</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#works" class="group-hover:underline cursor-default transition duration-300 px-3 text-5xl md:text-base " onclick="toggleSide()">WORKS</a>
        </li>
        
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/#social" class="group-hover:underline cursor-default transition duration-300 px-3 text-5xl md:text-base " onclick="toggleSide()">SOCIALS</a>
        </li>
        <li class="flex basis-28 transition z-50 font-normal hover:font-extrabold hover:scale-105 hover:text-orange-500 hover:before:content-['>'] target:before:content-['>'] before:transition before:duration-500 before:opacity-0 hover:before:opacity-100 before:text-5xl before:-left-4 before:absolute pt-4 md:pt-0 group md:before:text-base md:before:left-0">
            <a href="/contact" class="group-hover:underline cursor-default transition duration-300 px-3 text-5xl md:text-base " onclick="toggleSide()">CONTACT</a>
        </li>
    </ul>

</nav>


<div class="absolute top-0 md:hidden block">
    <button type="button" class="text-3xl fixed top-0 left-3 z-50 block md:hidden transition-all hover:rotate-45 hover:text-orange-500 active:text-orange-500" onclick="toggleSide()" id="side-button"> &plus;</button>
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