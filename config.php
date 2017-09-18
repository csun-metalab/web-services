<?php

return [
    'testingUrl' => "//testing.sandbox.csun.edu/metalab/",
    'local'      => true,
    'getBaseUrl' => function($page, $uri) {
    	if($page->production) {
    		return $page->prodUrl.$uri;
    	} elseif($page->local) {
    		return $page->testingUrl.$uri;
    	} else {
    		return $page->sandboxUrl.$uri;
    	}
    },
];
