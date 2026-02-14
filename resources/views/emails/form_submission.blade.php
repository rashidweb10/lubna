{{-- resources/views/emails/form_submission.blade.php --}}

@component('mail::message')
# {{ ucfirst($formName) }} Form Submission

@foreach($data as $key => $value)
**{{ ucwords(str_replace('_', ' ', $key)) }}:** {{ is_array($value) ? implode(', ', $value) : $value }}

@endforeach

Thanks,<br>
{{ config('app.name') }}
@endcomponent