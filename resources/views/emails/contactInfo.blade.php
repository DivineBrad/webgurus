@component('mail::message')
# Contact Information from user 

<div>
User {{$firstname}} {{$lastname}} has fulfilled contact form!

The Subject is {{$subject}} and the email is {{$email}} .

The message from user is:

{{$message}} .
</div>



Thanks,<br>
Webgurus
@endcomponent
