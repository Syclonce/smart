<x-mail::message>
<!-- Logo -->
<div style="text-align: center; margin-bottom: 20px;">
    <img src="{{ url('assets/images/logo.png') }}" alt="{{ config('app.name') }}" width="120">
</div>

<!-- Greeting -->
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# ❌ @lang('Whoops!')
@else
# 👋 @lang('Hello!')
@endif
@endif

<!-- Intro Lines -->
@foreach ($introLines as $line)
{{ $line }}

@endforeach

<!-- Action Button -->
@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
🚀 {{ $actionText }}
</x-mail::button>
@endisset

<!-- Outro Lines -->
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

<!-- Salutation -->
@if (! empty($salutation))
{{ $salutation }}
@else
🌟 @lang('Regards,') <strong>{{ config('app.name') }}</strong>
@endif

</x-mail::message>
