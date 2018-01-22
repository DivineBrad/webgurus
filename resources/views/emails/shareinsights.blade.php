@component('mail::message')
# Message to whom results was shared 

Hi,
<p>This is {{$name}},I got this incredible insights into what careers best suits my skills, traits and passions.</br>
What do you thing of these?
            <ul>
            @foreach ($results as $key => $item)
            <li>
            {{$item->career}}
            </li>
            @endforeach
            </ul>
</p>
<p> You can check them out here </p>
@component('mail::button', ['url' =>'localhost:8000'])

@endcomponent

Thanks,<br>
Webgurus
@endcomponent
return redirect()->to('/');
