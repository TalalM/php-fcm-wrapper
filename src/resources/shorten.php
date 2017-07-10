<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */
    "operations" => [
        /**
         *    shorten() method
         *
         *    reference: https://firebase.google.com/docs/reference/dynamic-links/link-shortener
         */
        "shorten" => [
            "httpMethod" => "POST",
            "uri" => "https://firebasedynamiclinks.googleapis.com/v1/shortLinks",
            "summary" => "Shorten a long link",
            "responseModel" => "defaultJsonResponse",
            "parameters" => [
                "key" => [
                    "type" => "string",
                    "location" => "query",
                    "description" => "API key",
                    "required" => true,
                ],
                "longDynamicLink" => [
                    "type" => "string",
                    "location" => "json",
                    "description" => "Link to shorten",
                    "required" => true,
                ],
            ]
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */
    "models" => [
    ],
];
