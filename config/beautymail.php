<?php

return [

    // These CSS rules will be applied after the regular template CSS

    /*
        'css' => [
            '.button-content .button { background: red }',
        ],
    */

    'colors' => [

        'highlight' => '#004ca3',
        'button'    => '#004cad',

    ],

    'view' => [
        'senderName'  => config('app.name'),
        'reminder'    => null,
        'unsubscribe' => null,
        'address'     => null,

        'logo'        => [
            'path'   => '%PUBLIC%/images/favicon.png',
            'width'  => '40%',
            'height' => '40%',
        ],

        'twitter'  => null,
        'facebook' => 'https://web.facebook.com/adelabu.fred',
        'flickr'   => null,
    ],

];
