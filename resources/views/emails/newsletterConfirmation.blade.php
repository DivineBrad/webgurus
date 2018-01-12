@component('mail::message')
# Introduction

Thank you for Subscribing.

@component('mail::button', ['url' => ''])
Click Here to Unsubscribe
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
