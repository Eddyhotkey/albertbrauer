<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Inhaltselement: Überschrift für Startseite. ',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline', 'cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        // TEXT
        'subtitle' =>  array(
            'label' => array(
                'de' => array('Untertitel', 'Hier können Sie einen Untertitel hinzufügen'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);