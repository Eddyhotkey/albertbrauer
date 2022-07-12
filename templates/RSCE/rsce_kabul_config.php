<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Slider-Element: Bild, Teaser, Titel',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline','cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(

        //IMAGE
        'image' => array(
            'label' => array(
                'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
            ),
            'inputType' => 'fileTree',
            'eval' => array(
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => 'jpg,jpeg,png,gif,svg',
                'tl_class'=>'clr',
                'mandatory' => true,
            ),
        ),

        //IMAGE ALT
        'image_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // IMAGE TITLE
        'image_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // TEXT
        'text' =>  array(
            'label' => array(
                'de' => array('Slide-Teaser', 'Hier können Sie einen Teaser hinzufügen'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);