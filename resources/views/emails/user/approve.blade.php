@component('mail::message')
# Introduction

{{$user->name}} user has just signed in. 



@component('mail::button', ['url' => ''])
<a href="pl.dev/users/{{$user->id}}/approve">Approve Access</a>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
