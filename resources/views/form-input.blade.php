<div @class([
    'form-group' => ($prepend || $append),
    'form-item' => (!$prepend && !$append),
    '_has-error' => $hasError()
])>
    <x-form-label :for="$attributes['id']" :required="$attributes->has('required')">
        {{ $label }}
    </x-form-label>

    <div>
        @if($prepend)
            <div class="prepend">{{ $prepend }}</div>
        @endif

        <input {{ $attributes->class(['_error' => $hasError($name, $bag)]) }}>

        @if($append)
            <div class="append">{{ $append }}</div>
        @endif
    </div>

    @if($helperText)
        <div class="helper-text">{{ $helperText }}</div>
    @endif

    @if($showErrors)
        @error($name, $bag)
            <div class="error-text">{{ $message }}</div>
        @enderror
    @endif
</div>
