{{-- <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler"
    class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
    <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"></span>
</button> --}}

<button
    {{ $attributes->merge(['id' => 'navbarToggler', 'class' => 'block absolute right-4 px-3 py-[6px] rounded-lg top-1/2 -translate-y-1/2 ring-primary focus:ring-2 lg:hidden']) }}>

    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>
    <span class="relative w-[30px] h-[2px] my-[6px] block bg-body-color"></span>

</button>
