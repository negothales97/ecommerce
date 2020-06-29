<?php

return [
    'api_key' => env('PAGARME_API_KEY'),
    'encrypt' => env('PAGARME_API_ENCRYPT'),
    'endpoint' => env('PAGARME_ENDPOINT', 'https://api.pagar.me/1'),

];
