@component('mail::message')
# Introduction

{{$user->name}} user has just registered. Go approve this, please. 



Thanks,<br>
{{ config('app.name') }}
@endcomponent
