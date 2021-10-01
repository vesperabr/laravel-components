<div @class(['form-item', '_has-error' => $hasError()])>
    <x-form-label :for="$attributes['id']" :required="$attributes->has('required')">
        {{ $label }}
    </x-form-label>

    <div>
        <textarea {{ $attributes->class(['_error' => $hasError()]) }}>{!! $value !!}</textarea>
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
