@props(['ml' => '-ml-6'])
<button
    {{ $attributes->merge(['class' => "bg-gray-300 border-2 border-greenth text-center flex justify-center items-center text-blueth hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 {$ml}"]) }}
    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
    <x-th.polygon class="w-5 h-5 fill-greenth -scale-x-100 -translate-x-1" />
</button>
