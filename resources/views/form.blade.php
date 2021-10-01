<form {{ $attributes->class(['Form', '_has-errors' => $hasErrors()]) }} >
    @unless(in_array($method, ['GET', 'HEAD', 'OPTIONS']))
        @csrf
    @endunless

    @unless(in_array($method, ['GET', 'POST']))
        @method($method)
    @endunless

    {{ $slot }}
</form>
