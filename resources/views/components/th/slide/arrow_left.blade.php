@props(['ml' => '-ml-6'])
<button
    {{ $attributes->merge(['class' => "bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow-lg rounded-full w-12 h-12 {$ml}"]) }}
    x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
    &#8592;
</button>
