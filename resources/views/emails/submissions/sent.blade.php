@component('mail::message')
# Introduction

Your submission has been recevied. Your submission number is: 

@component('mail::button', ['url' => ''])
{{$submission_number}}
@endcomponent

Thanks,<br>
Support Team
@endcomponent
