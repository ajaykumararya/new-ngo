<?php
$config['dashboard'] = array(
    'title' => 'General',
    'menu' => array(
        array('label' => 'Dashboard', 'icon' => array('home', 2), 'type' => 'dashboard', 'url' => 'admin')
    )
);
$config['cms_setting'] = array(
    'title' => 'CMS',
    'condition' => OnlyForAdmin(),
    'menu' => array(
        array(
            'label' => 'Setting',
            'type' => 'cms_setting',
            'icon' => array('cog', 4),
            'url' => 'cms/setting'
        ),
        array(
            'label' => 'Gallery Image',
            'type' => 'gallery_setting',
            'icon' => array('image', 4),
            'url' => 'cms/gallery-images'
        ),
        array(
            'label' => 'Slider',
            'type' => 'slider_setting',
            'icon' => array('sliders', 4),
            'url' => 'cms/slider'
        ),
        array(
            'label' => 'Page Area',
            'type' => 'page_area',
            'icon' => array('file', 3),
            'submenu' => array(
                array(
                    'label' => 'Add Pages',
                    'type' => 'add_pages',
                    'icon' => array('add-item', 4),
                    'url' => 'cms/add-page',
                ),
                array(
                    'label' => 'List Pages',
                    'type' => 'list_pages',
                    'icon' => array('files', 4),
                    'url' => 'cms/list-pages',
                ),
                array(
                    'label' => 'Menu Section',
                    'type' => 'cms_menu_section',
                    'icon' => array('menu', 4),
                    'url' => 'cms/menu-section'
                ),

            )
        ),

        array(
            'label' => 'Post Section',
            'type' => 'news_area',
            'icon' => array('sticky-note', 3),
            'submenu' => array(
                array(
                    'label' => 'Add Post',
                    'type' => 'add_post',
                    'icon' => array('plus', 4),
                    'url' => 'post/add-post',
                ),
                array(
                    'label' => 'List Post(s)',
                    'type' => 'list_post',
                    'icon' => array('list', 4),
                    'url' => 'post/list',
                ),
            )
        ),
        array(
            'label' => 'Testimonial',
            'type' => 'testimonial',
            'icon' => array('quote-left', 3),
            'submenu' => array(
                array(
                    'label' => 'Add',
                    'type' => 'add_testimonial',
                    'icon' => array('plus', 4),
                    'url' => 'admin/add-testimonial',
                ),
                array(
                    'label' => 'List(s)',
                    'type' => 'list_testimonial',
                    'icon' => array('list', 4),
                    'url' => 'admin/list-testimonial',
                ),
            )
        ),
        // array(
        //     'label' => 'Enquiry Data',
        //     'type' => 'enquiry_data',
        //     'icon' => array('file', 4),
        //     'url' => 'cms/enquiry-data'
        // ),
        /*
        array(
            'label' => 'Gallery',
            'type' => 'gallery_section',
            'icon' => array('gallery', 3),
            'submenu' => array(
                array(
                    'label' => 'Image Gallery',
                    'type' => 'image_gallery',
                    'icon' => array('gallery', 4),
                    'url' => 'cms/image-gallery',
                ),
                array(
                    'label' => 'Video Gallery',
                    'type' => 'list_center',
                    'icon' => array('youtube', 4),
                    'url' => 'cms/video-gallery',
                )
            )
        ),
        */
    )
);
$staticMenus = array(
    // array(
    //     'label' => 'Forms',
    //     'type' => 'static_forms',
    //     'icon' => array('file', 4),
    //     'url' => 'cms/forms'
    // )
);
if (file_exists(THEME_PATH . 'config/menu.php')) { {
        require THEME_PATH . 'config/menu.php';
        $staticMenus[] = $menu;
        unset($menu);
    }

}
$config['fix_properties'] = array(
    'title' => 'Theme Properites',
    'condition' => OnlyForAdmin(),
    'menu' => $staticMenus
)
    ?>