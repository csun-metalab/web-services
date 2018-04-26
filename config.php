<?php

return [
    'localhostUrl' => "//localhost/",
    'local' => true,
    'getBaseUrl' => function($page, $uri) {
    if($page->production) {
        return $page->prodUrl.$uri;
    } elseif($page->testing) {
        return $page->testingUrl.$uri;
    } elseif($page->sandbox) {
        return $page->sandboxUrl.$uri;
    } else {
        return $page->localhostUrl.$uri;
    }
    },
];
