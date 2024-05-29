@props(['for'])

@error($for)
    <p {{ $attributes->merge(['class' => 'text-sm text-blue']) }}>{{ $message }}</p>
@enderror
