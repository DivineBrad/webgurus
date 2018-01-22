@component('mail::message')
# Newsletter Subscription

Thank you for Subscribing.

@component('mail::button', ['url' => url('/').'/newsletter_user_delete?id='.$id])
Click Here to Unsubscribe
@endcomponent

Thanks,<br>
Career Insights
@endcomponent
