@props([
    'professional' => 'Name Test',
    'speciality' => 'Speciality Test',
    'imagePath' => 'https://picsum.photos/200/300',
])
{{--<div {{ $attributes->merge(['class' => "grid grid-flow-col auto-cols-max text-white mt-10 border-[1px] border-white rounded-2xl relative w-auto items-center relative"]) }}>--}}
<div {{ $attributes->merge(['class' => "w-full h-[114px] lg:h-[107px] text-white mt-10 lg:mt-0 lg:mb-2 border-[1px] border-white rounded-2xl relative items-center relative overflow-hidden"]) }}>
    <div class="specialist-name flex flex-col h-full align-center items-start justify-center rounded-l-2xl px-8  bg-gradient-to-r from-blueth to-transparent relative z-[100] bg-cover bg-contain bg-right bg-no-repeat overflow-hidden">
{{--        style="background-image: url('{{ $imagePath }}')--}}
        <h3 class="font-thunder text-3xl text-bold">{{ $professional }}</h3>
        <p class="font-thunder text-lg uppercase font-light">{{ $speciality }}</p>
    </div>
    <div class="absolute top-0 right-0 m-0 h-auto object-cover rounded-r-2xl z-40">
        <img src="{{ $imagePath }}" class="w-full h-auto z-[98]" alt="{{ $professional . ' - ' . $speciality }}">
{{--        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-transparent via-white to-transparent opacity-50 z-[99] w-[30px]"></div>--}}
    </div>
</div>
