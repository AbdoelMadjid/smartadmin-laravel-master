@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'help-block list-unstyled']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-danger">{{ $message }}</li>
        @endforeach
    </ul>
@endif
