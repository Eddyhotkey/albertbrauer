<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Inhaltselement: Google Map mit Formular',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline','cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        'module' => array(
            'label' => array('Modul', 'Bitte wählen Sie das zugehörige Modul aus.'),
            'inputType' => 'standardField',
            'eval' => array('mandatory' => true, 'tl_class' => 'w50 clr'),
        ),
        'form' => array(
            'label' => array('Formular', 'Bitte wählen Sie das zugehörige Formular aus.'),
            'inputType' => 'standardField',
            'eval' => array('mandatory' => true, 'tl_class' => 'w50'),
        ),
    ),
);