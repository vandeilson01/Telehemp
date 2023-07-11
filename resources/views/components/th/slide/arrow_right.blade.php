@props(['mr' => '-mr-6'])
<button
    {{ $attributes->merge(['class' => "bg-greenth text-blueth hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 {$mr}"]) }}
    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
    &#8594;
</button>
