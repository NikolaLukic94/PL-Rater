@component('mail::message')
# Introduction

Your submission have been successfully submitted! 
Quote will follow within next 48 hours.

If there is any additional information that should be submitted, please email to our Underwriter.

Your submission number is 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
