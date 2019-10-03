<?php
return [
    'name' => "KarmaTek",
    'title' => "KarmaTek",
    'subtitle' => 'Adventures in IT',
    'description' => 'Tech Blog',
    'author' => 'Martin Sloan',
    'page_image' => 'home-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads/',
    ],
];

