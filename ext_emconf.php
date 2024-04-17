<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'T3element',
    'description' => 'Create Custom Element using T3element',
    'category' => 'be',
    'author' => 'T3Element',
    'author_email' => 'info@t3element.com',
    'author_company' => 'Crayonwebstudio private limited',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.3',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.4.0-10.4.99',
        ),
        'conflicts' => array(),
        'suggests' => array(), 
    ),
    'autoload' => array(
        'psr-4' => array(
            "Crayon\\T3element\\" => "Classes",
        ),
    ),
];
