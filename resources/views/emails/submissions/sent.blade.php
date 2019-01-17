@component('mail::message')
# Introduction

Your submission was recevied. Your submission number is: 

@component('mail::button', ['url' => ''])
Submission number here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
