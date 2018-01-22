@component('mail::message')
# Introduction

You have successfully subscribed to our Newsletter.

@component('mail::button', ['url' => '/delete-newsletter-user/'.$id])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
