@component('mail::message')
# 📩 New Contact Form Submission

Hello Admin,  
You’ve received a new inquiry from your website contact form.

---

@component('mail::panel')
### Contact Details  
- **Name:** {{ $data['name'] }}  
- **Phone:** {{ $data['phone'] }}  
- **Email:** {{ $data['email'] }}  
- **Business Industry:** {{ $data['business'] ?? '—' }}
@endcomponent

@component('mail::table')
| Field    | Value              |
| -------- | ------------------ |
| Name     | {{ $data['name'] }} |
| Phone    | {{ $data['phone'] }} |
| Email    | {{ $data['email'] }} |
| Business | {{ $data['business'] ?? '—' }} |
@endcomponent

---

@component('mail::button', ['url' => 'mailto:'.$data['email'], 'color' => 'primary'])
Reply via Email
@endcomponent

Or call directly: **{{ $data['phone'] }}**

Thanks,<br>
{{ config('app.name') }}
@endcomponent
