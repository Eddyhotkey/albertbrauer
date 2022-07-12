<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'FOOTER: Logo, SML, Navigation',
    ),
    'types' => array('module'),
    'contentCategory' => 'RSCE_MODULE: FOOTER',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(
        // GROUP;
        'image_group' => array(
            'label' => array('Logo', 'Fügen Sie hier ein Bild ein.'),
            'inputType' => 'group',
        ),

        // IMAGE;
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

        // IMAGE ALT;
        'image_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // IMAGE TITLE;
        'image_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LIST;
        'slm_list' => array(
            'label' => array('Social Median Links', 'Hier können Sie SLM Links hinzufügen'),
            'elementLabel' => '%s. SLM Item',
            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 3,
            'fields' => array(

                // IMAGE;
                'slm_image' => array(
                    'label' => array(
                        'de' => array('Icon', 'Hier können Sie das Bild auswählen'),
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

                // IMAGE ALT;
                'slm_image_alt' => array(
                    'label' => array(
                        'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                // IMAGE TITLE;
                'slm_image_title' => array(
                    'label' => array(
                        'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                // LINK;
                'slm_link' => array(
                    'label' => array(
                        'de' => array('Link', 'Hier können Sie einen Link auswählen'),
                    ),
                    'inputType' => 'url',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                // LINK TITLE;
                'slm_link_title' => array(
                    'label' => array(
                        'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
            ),
        ),
        // LIST;
        'navigation_list' => array(
            'label' => array('Navigation List', 'Hier können Sie Navigation-Links hinzufügen'),
            'elementLabel' => '%s. Navigation Item',
            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 2,
            'fields' => array(
                // LINK;
                'navigation_link' => array(
                    'label' => array(
                        'de' => array('Link', 'Hier können Sie einen Link auswählen'),
                    ),
                    'inputType' => 'url',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                // LINK TEXT;
                'navigation_link_text' => array(
                    'label' => array(
                        'de' => array('Link-Text', 'Hier können Sie einen Text für den Link eingeben'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),

                // LINK TITLE;
                'navigation_link_title' => array(
                    'label' => array(
                        'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
                    ),
                    'inputType' => 'text',
                    'eval' => array('tl_class' => 'w50 clr'),
                ),
            ),
        ),
    ),
);