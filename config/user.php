<?php

return [
    'profile' => [
        'App\Models\PersonProfile' => [
            'model'           => 'PersonProfile',
            'identifier'      => 'personal_acount',
            'nav_component'   => 'sections.profile.personal.nav',
            'main_component'  => 'sections.profile.personal.main',
        ],
        'App\Models\CompanyProfile' => [
            'model'           => 'CompanyProfile',
            'identifier'      => 'company_acount',
            'nav_component'   => 'sections.profile.company.nav',
            'main_component'  => 'sections.profile.company.main',
        ]
    ]
];