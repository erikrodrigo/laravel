@props(['color' => 'semilla'])
<button {{ $attributes->merge(['type' => 'submit', 'class' => "inline-flex justify-center items-center px-4 py-2 bg-white border border-$color rounded-md font-semibold text-xs text-semilla uppercase tracking-widest hover:bg-white active:bg-white focus:outline-none focus:border-$color focus:shadow-outline-white disabled:opacity-25 transition"]) }}>
    {{ $slot }}
</button>
