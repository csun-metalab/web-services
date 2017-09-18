<?php

return [
    'local'    => "//localhost:8000/",
    'local'    => true,
    'getBaseUrl' => function($page, $uri) {
    	if(!empty($page->production) && $page->production) {
    		return $page->prodUrl.$uri;
    	} elseif(!empty($page->local) && $page->local) {
    		return $page->testingUrl.$uri;
    	} else {
    		return $page->sandboxUrl.$uri;
    	}
    },
];
