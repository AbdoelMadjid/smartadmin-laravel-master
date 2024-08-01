@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'help-block']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
