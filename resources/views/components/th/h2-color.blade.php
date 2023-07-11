@props(['color' => 'text-blueth'])
<h2 {{ $attributes->merge(['class' => "font-bold text-5xl ${color} text-center"]) }}>
    {{ $slot }}
</h2>
