@props([
    'title' => 'Title Test',
    'subtitle' => 'Subtitle Test',
    'cases' => '',
    'grade' => 4,
    'text' => 'Text Test',
    'link' => '#',
    'buttonText' => 'Ver mais',
])
<div {{ $attributes->merge(['class' => "flex flex-col space-y-4 text-center align-center justify-center lg:w-full lg:px-12"]) }}
    x-data="{ open: false }">

    <div class="flex flex-col lg:flex-row items-center lg:items-start lg:gap-4">
        <h1 class="w-max font-thunder text-5xl lg:text-7xl text-white border-b-[1px] border-b-white lg:border-b-0 lg:border-r-white lg:border-r-[1px] lg:pr-4 pb-1">{{ $title }}</h1>

        <div class="space-y-2 text-center lg:text-left">
            <div class="flex flex-col lg:flex-row items-center lg:gap-4 justify-center lg:justify-start">
                <p class="font-thunder-light text-white text-4xl">{{ $subtitle }}</p>

                <div class="canabis flex justify-center lg:justify-start">
                    <!-- for loop to fill the icons -->
                    @for ($i = 0; $i < $grade; $i++)
                        <x-th.icon-canabis class="w-6 h-6 fill-greenth" />
                    @endfor

                    @for ($i = 0; $i < $grade-5; $i++)
                        <x-th.icon-canabis class="w-6 h-6 stroke-1 stroke-greenth" />
                    @endfor
                </div>
            </div>
            <p class="font-thunder-light text-white text-xl font-light">{{ $cases }}</p>
        </div>
    </div>


    <div class="lg:hidden text-left space-y-4" x-show="open">
        {{ $text }}
    </div>

    <div class="hidden lg:block text-left space-y-4">
        {{ $text }}
    </div>

    <a href="{{ $link }}" x-on:click.prevent="open = !open" class="lg:hidden text-white hover:text-greenth text-xl font-medium border-[1px] border-white hover:border-greenth rounded-3xl uppercase px-8 py-2" x-text="open ? 'Ver menos' : 'Ver mais'"></a>
</div>
