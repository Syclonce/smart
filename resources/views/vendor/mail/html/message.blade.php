<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}


{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
© {{ date('Y') }}{{ config('app.name') }} By TeknoKode X Dolphin. {{ __('All rights reserved.') }}
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
