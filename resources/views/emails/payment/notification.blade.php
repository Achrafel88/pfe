@component('mail::message')
# Payment Details

Dear {{ $user->name }},

Thank you for your registration. Here are the payment details for the products you are interested in:

@foreach ( $price
 as  $price
)
- **Product**: {{  $price
->produit->nom }} ( price
: {{  $price
->produit->prix }} DH)
@endforeach

**Total**: {{ $total }} DH

Thanks,<br>
{{ config('app.name') }}
@endcomponent
