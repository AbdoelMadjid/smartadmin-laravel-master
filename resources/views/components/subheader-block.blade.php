@props([
    'label' => 'Label',
    'value' => 'Value',
    'colorClass' => 'color-primary-500',
    'additionalClasses' => '',
])

@php
    $classes = $attributes
        ->class(['subheader-block', 'd-lg-flex', 'align-items-center', $additionalClasses])
        ->merge([]);
@endphp

<div {{ $classes }}>
    <div class="d-inline-flex flex-column justify-content-center mr-3">
        <span class="fw-300 fs-xs d-block opacity-50">
            <small>{{ $label }}</small>
        </span>
        <span class="fw-500 fs-xl d-block {{ $colorClass }}">
            {!! $value !!}
        </span>
    </div>
</div>
