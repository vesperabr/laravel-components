<div @class(['form-item', '_has-error' => $hasError()])>
    <x-form-label :for="$attributes['id']" :required="$attributes->has('required')">
        {{ $label }}
    </x-form-label>

    <div>
        <select {{ $attributes->class(['_error' => $hasError()]) }}>
            @unless($attributes['multiple'])
                <option value="">{{ __('Selecione...') }}</option>
            @endunless

            @foreach($options as $key => $option)
                <option value="{{ $key }}" {{ $isSelected($key) ? 'selected' : '' }}>
                    {{ $option }}
                </option>
            @endforeach
        </select>
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
