@component('mail::message')
Welcome to homeIt.com

This is a community of realtors who are pleased to offer you not just a house but a home.

We love that you have joined us.

To get started, on the username dropdown on the top right side of the screen there's an 
option for Profile, just click it and begin a good experience.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

All the best,<br>
{{ config('app.name') }}
@endcomponent
