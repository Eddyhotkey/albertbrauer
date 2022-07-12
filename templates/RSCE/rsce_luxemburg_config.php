<?php

######################################
### Created by Rashid Bairamov #######
### https://www.rashidbairamov.de ####
######################################

return array(
    'label' => array(
        'Inhaltselement: Zweispaltiger Container mit Bilder und Beschreibungen.',
    ),
    'types' => array('content'),
    'contentCategory' => 'RSCE: Inhalt',
    'beTemplate' => 'be_wildcard',
    'standardFields' => array('cssID'),
    'wrapper' => array(
        'type' => 'none',
    ),
    'fields' => array(

        //GROUP
        'group_col_1' => array(
            'label' => array('Erse Spalte', 'Hier könnten Sie Bilder auswählen und Beschreibungen hinzufügen'),
            'inputType' => 'group',
        ),

        // TITLE COL 1
        'title_col_1' =>  array(
            'label' => array(
                'de' => array('Titel', 'Hier können Sie einen Titel hinzufügen'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK
        'link_col_1' => array(
            'label' => array(
                'de' => array('Link', 'Hier können Sie einen Link auswählen'),
            ),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK TITLE //
        'link_col_1_title' => array(
            'label' => array(
                'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        //IMAGE COL 1
        'image_col_1' => array(
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

        //IMAGE COL 1 ALT
        'image_col_1_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // IMAGE COL 1 TITLE
        'image_col_1_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // TEXT COL 1
        'text_col_1' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'inputType' => 'textarea',

        ),

        //GROUP COL 2
        'group_col_2' => array(
            'label' => array('Zweite Spalte', 'Hier könnten Sie Bilder auswählen und Beschreibungen hinzufügen'),
            'inputType' => 'group',
        ),

        // TITLE COL 2
        'title_col_2' =>  array(
            'label' => array(
                'de' => array('Titel', 'Hier können Sie einen Titel hinzufügen'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK
        'link_col_2' => array(
            'label' => array(
                'de' => array('Link', 'Hier können Sie einen Link auswählen'),
            ),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK TITLE //
        'link_col_2_title' => array(
            'label' => array(
                'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // IMAGE COL 2
        'image_col_2' => array(
            'label' => array(
                'de' => array('Bild', 'Hier können Sie das Bild auswählen'),
            ),
            'inputType' => 'fileTree',
            'eval' => array(
                'fieldType' => 'radio',
                'filesOnly' => true,
                'extensions' => 'jpg,jpeg,png,gif,svg',
                'tl_class'=>'w50 clr',
                'mandatory' => true,
            ),
        ),

        //IMAGE COL 2 ALT
        'image_col_2_alt' => array(
            'label' => array(
                'de' => array('Alt-Attribute', 'Hier können Sie einen Alt-Attribute für das Bild eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // IMAGE COL 2 TITLE
        'image_col_2_title' => array(
            'label' => array(
                'de' => array('Bildtitel', 'Hier können Sie den Titel des Bildes eingeben (title-Attribut)'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // TEXT COL 2
        'text_col_2' => array(
            'label' => array('Beschreibung', 'Hier können Sie die Beschreibung hinzufügen'),
            'eval' => array(
                'rte' => 'tinyMCE',
                'tl_class' => 'clr'
            ),
            'inputType' => 'textarea',
        ),

        //GROUP LINK
        'group_link' => array(
            'label' => array('Link', 'Hier könnten Sie Link auswählen'),
            'inputType' => 'group',
        ),

        // LINK
        'link' => array(
            'label' => array(
                'de' => array('Link', 'Hier können Sie einen Link auswählen'),
            ),
            'inputType' => 'url',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK TITLE //
        'link_title' => array(
            'label' => array(
                'de' => array('Link-Title', 'Hier können Sie einen Titel für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),

        // LINK TEXT //
        'link_text' => array(
            'label' => array(
                'de' => array('Link-Text', 'Hier können Sie einen Text für den Link eingeben'),
            ),
            'inputType' => 'text',
            'eval' => array('tl_class' => 'w50 clr'),
        ),
    ),
);