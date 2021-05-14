<?php

return [
    "design" => [
        "icon" => [
            "delete" => "far fa-trash-alt",
            "edit" => "far fa-edit",
            "complete" => "fas fa-check",
            "uncomplete" => "fas fa-times"
        ]
    ],
    "aboutus" => [
        "columns" => [
            "data" => [
                ['title' => "Title", "attribute" => 'title'],
                ['title' => "Text",  "attribute" => 'body']
            ],
            "actions" => [
                ['title' => "Delete",      "uri" => "admin/delete/aboutus/", "action" => "delete"],
                ['title' => "Edit",        "uri" => "admin/edit/aboutus/",   "action" => "edit"]
            ],
            "flags" => [
                "lan" => [
                    ["title" => "KA", "code" => "ka"],
                    ["title" => "EN", "code" => "en"],
                ]
            ]
        ]
        
    ],
    "speciality" => [
        
        "columns" => [
            "data" => [
                ['title' => "Name", "attribute" => 'name']
            ],
            "actions" => [
                ['title' => "Delete",      "uri" => "admin/delete/speciality/", "action" => "delete"],
                ['title' => "Edit",        "uri" => "admin/edit/speciality/",   "action" => "edit"]
            ],
            "flags" => [
                "lan" => [
                    ["title" => "KA", "code" => "ka"],
                    ["title" => "EN", "code" => "en"],
                ]
            ]
        ]
        
    ]
];