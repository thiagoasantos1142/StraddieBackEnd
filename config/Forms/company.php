<?php
return [
    "form" => [
        "method" => "POST",
        "name" => [
            "create" => "organization.store",
            "update" => "organization.update"
        ],
        "path" => [
            
        ]
    ],
    "inputs" => [
        [
            "label" => "Razão social",
            "name" => "razao_social",
            "col" => "6",
            // placeholder
            // label
            // value
            //"input" => "select"
            //"type" => "select"
        ],
        [
            "label" => "Nome fantasia",
            "name" => "nome_fantasia",
            "col" => "6",
        ],
        [
            "label" => "Cnpj",
            "name" => "cnpj",
            "col" => "6",
        ],
        [
            "label" => "Inscrição estadual",
            "name" => "state_registration",
            "col" => "3",
        ],
        [
            "label" => "Inscrição municipal",
            "name" => "municipal_registration",
            "col" => "3",
        ],
        [
            "label" => "E-mail",
            "name" => "email",
            "col" => "6",
        ],
        [
            "label" => "Tipo instituição",
            "name" => "entidade_type_id",
            "col" => "6",
            "input" => "select",
            "options" => 'users' //variavel que foi enviada pelo back
        ]
    ]
];
