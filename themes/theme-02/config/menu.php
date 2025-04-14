<?php
$menu = array(
    'label' => 'Static Pages',
    'type' => 'static_page_area',
    'icon' => array('file', 3),
    'submenu' => array(
        array(
            'label' => 'Our Works',
            'type' => 'our_works',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/our_works',
        ),
        array(
            'label' => 'About Us',
            'type' => 'about_us',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/about_us',
        ),
        array(
            'label' => 'Our Reach',
            'type' => 'our-reach',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/our-reach',
        ),
        array(
            'label' => 'Our Event',
            'type' => 'our-event',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/our-event',
        ),
        array(
            'label' => 'Enquiry Form',
            'type' => 'enquiry-page',
            'icon' => array('file', 4),
            'url' => 'cms/static-page/enquiry-page',
        )
    )
);