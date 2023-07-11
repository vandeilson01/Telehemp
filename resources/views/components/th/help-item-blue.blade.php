<article {{ $attributes->merge(['class' => "flex flex-row lg:flex-col items-center w-full lg:w-auto lg:h-full"]) }}>
    <div class="py-1 px-2 border-l-2 border-l-darkgreenth rounded-l-md
    border-t-2 border-t-darkgreenth border-b-2 border-b-darkgreenth border-darkgreenth border-r-transparent
    lg:border-blueth lg:border-l-2 lg:border-t-2 lg:border-r-2 lg:border-b-transparent lg:rounded-b-none lg:rounded-r-md  lg:rounded-l-md
    text-3xl font-extrabold  text-darkgreenth relative">{{ $number }}</div>
    <div class="p-2 rounded-xl bg-gradient-to-br from-darkgreenth via-lightblueth to-blueth rounded-sm space-x-2 lg:space-x-0 grid grid-flow-col lg:grid-flow-row lg:auto-rows-max w-full lg:h-full items-center divide-x lg:divide-none lg:justify-items-center">
        {{ $icon }}
        <div class="h-full items-center px-2 text-left lg:text-center">
            <p class="font-thunder text-lg uppercase text-white lg:border-t-2 lg:border-t-white lg:pt-2 lg:mt-3">{{ $text }}</p>
        </div>
    </div>
</article>
