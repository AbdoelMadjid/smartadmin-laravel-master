@props([
    'type' => 'text',
    'label' => '',
    'name' => '',
    'id' => '',
    'value' => '',
    'placeholder' => '',
    'options' => [],
    'sizeClass' => '',
    'styleClass' => '',
    'helpText' => '',
    'readonly' => false,
])

@php
    $classes = 'form-control ' . $sizeClass . ' ' . $styleClass;
    $attributes = $attributes
        ->class([
            'form-control' => $type !== 'file-custom' && $type !== 'select-custom',
            'custom-file-input' => $type === 'file-custom',
            'custom-select' => $type === 'select-custom',
            'form-control-file' => $type === 'file',
            'form-control-plaintext' => $readonly,
        ])
        ->merge([
            'id' => $id,
            'name' => $name,
            'value' => $value,
            'placeholder' => $placeholder,
            'readonly' => $readonly ? 'readonly' : null,
        ]);
@endphp

<div class="form-group @if ($type === 'file-custom') mb-0 @endif">
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>

    @if ($type === 'textarea')
        <textarea {{ $attributes->merge(['class' => $classes]) }} rows="5">{{ $value }}</textarea>
    @elseif($type === 'select' || $type === 'select-custom' || $type === 'multi-select')
        <select
            {{ $attributes->merge(['class' => $type === 'select-custom' ? 'custom-select ' . $sizeClass . ' ' . $styleClass : $classes]) }}
            @if ($type === 'multi-select') multiple @endif>
            @foreach ($options as $option)
                <option value="{{ $option }}" @if ($value == $option) selected @endif>{{ $option }}
                </option>
            @endforeach
        </select>
    @elseif($type === 'file' || $type === 'file-custom')
        <div class="custom-file {{ $sizeClass }} {{ $styleClass }}">
            <input type="file"
                {{ $attributes->merge(['class' => $type === 'file-custom' ? 'custom-file-input' : 'form-control-file']) }}>
            @if ($type === 'file-custom')
                <label class="custom-file-label" for="{{ $id }}">{{ $placeholder }}</label>
            @endif
        </div>
    @elseif($type === 'date')
        <input type="date" {{ $attributes->merge(['class' => $classes]) }}>
    @elseif($type === 'number')
        <input type="number" {{ $attributes->merge(['class' => $classes]) }}>
    @else
        <input type="{{ $type }}"
            {{ $attributes->merge(['class' => $readonly ? 'form-control-plaintext' : $classes]) }}>
    @endif

    @if ($helpText)
        <span class="help-block">
            {{ $helpText }}
        </span>
    @endif
</div>
