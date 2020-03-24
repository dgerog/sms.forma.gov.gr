<?php
    /*
      To add a new language:
        1) add a new item with a unique key - this will be the langauage key
        2) i) set the language name (native spelling)
           ii) select the appropriate icon (from flags folder) - just put the file name (no extension)
    */
    global $languages;
    $languages = array (
        'el' => array (
            'title' => 'Ελληνικά',
            'icon' => 'greece',
        ),
        'en' => array (
            'title' => 'English',
            'icon' => 'united-states-of-america',
        ),
        'fa' => array (
            'title' => 'فارسی (Farsi)',
            'icon' => 'iran',
        ),
    );
?>