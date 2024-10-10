@component('mail::message')
# Nouvel Formulaire de Contact

Vous avez reçu un nouvel formulaire de contact:

- **Nom Complet:** {{ $contact->fullname }}
- **Email:** {{ $contact->email }}

**Message:**

{{ $contact->message }}

Merci.

@endcomponent

