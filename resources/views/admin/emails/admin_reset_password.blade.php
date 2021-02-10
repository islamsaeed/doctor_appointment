@component('mail::message')

# Reset you Password :)
Welcome {{ $data['data']->name }} <br>

reset your password from here

@component('mail::button', ['url' => 'reset/password/' . $data['token'],'color' => 'success'])
click here to reset your password
@endcomponent

Or <br>
copy this link
<a href="{{ url('reset/password/' . $data['token']) }}"
    target="_blank">{{ url('reset/password/' . $data['token']) }}</a>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
