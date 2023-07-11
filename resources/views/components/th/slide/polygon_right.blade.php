@props(['mr' => '-mr-6'])
<button
    {{ $attributes->merge(['class' => "bg-gray-300 border-2 border-greenth text-center flex justify-center items-center text-blueth hover:text-orange-500 font-bold hover:shadow rounded-full w-12 h-12 {$mr}"]) }}
    x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
    <x-th.polygon class="w-5 h-5 fill-greenth" />
</button>
