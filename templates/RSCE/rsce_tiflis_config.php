<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Header - Element: Bild, Titel, Text, Liste von Merkmalen',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Projekt-Leser',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('headline','cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        # === GROUP === #
        'image_group' => array(
            'label' => array('Bild', 'Hier könnten Sie Bild hinzufügen'),
            'inputType' => 'group',
        ),

        # === IMAGE === #
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

        # === IMAGE ALT === #
        'image_col_2_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        # === IMAGE TITLE === #
        'image_col_2_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50'),
        ),

        # === GROUP === #
        'text_group' => array(
            'label' => array('Beschreibung', 'Hier könnten Sie Bild hinzufügen'),
            'inputType' => 'group',
        ),

        # === TEXT === #
        'text' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'inputType' => 'textarea',
        ),

        # === LIST === #
        'list' => array(
            'label' => array(
                'de' => array('Liste von Indikatoren', 'Hier können Sie der Liste Elemente hinzufügen'),
            ),
            'elementLabel' => array(
                'de' => 'Element %s',
            ),
            'inputType' => 'list',

            'fields' => array(

                # === TEXT === #
                'quantity' =>  array(
                    'label' => array(
                        'de' => array('Anzahl', 'Hier können Sie eine Anzahl hinzufügen'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                # === TEXT === #
                'title' =>  array(
                    'label' => array(
                        'de' => array('Titel', 'Hier können Sie einen Titel hinzufügen'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
            ),
        ),
    ),
);