<div @class(['form-item', '_has-error' => $hasError()])>
    <x-form-label :required="$attributes->has('required')">
        {{ $label }}
    </x-form-label>

    <div>
        @foreach($options as $key => $option)
            <label>
                <input
                    type="checkbox"
                    name="{{ $name }}"
                    value="{{ $key }}"
                    {{ $isChecked($key) ? 'checked' : '' }}
                >
                {{ $option }}
            </label>
        @endforeach
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
