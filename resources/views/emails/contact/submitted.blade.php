<x-mail::message>
# New Lead from Portfolio Website

You have received a new contact inquiry from **{{ $messageData->name }}**.

**Email:** {{ $messageData->email }}  
**Subject:** {{ $messageData->subject }}

<x-mail::panel>
**Message:**  
{{ $messageData->message }}
</x-mail::panel>

<x-mail::button :url="'mailto:'.$messageData->email">
Reply to {{ $messageData->name }}
</x-mail::button>

Best regards,  
{{ config('app.name') }}
</x-mail::message>
