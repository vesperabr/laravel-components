@unless($slot->isEmpty())
    <label {{ $attributes }}>
        {{ $required ? "$slot*" : $slot }}
    </label>
@endunless
