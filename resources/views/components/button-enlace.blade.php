@props(['color' => 'semilla'])
<a {{ $attributes->merge(['type' => 'button', 'class' => "inline-flex justify-center items-center px-4 py-2 bg-$color border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-$color-600 active:bg-$color focus:outline-none focus:border-$color-500 focus:shadow-outline-$color disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</a>
