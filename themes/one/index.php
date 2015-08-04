<?php

return [

    'name' => 'one',

    'type' => 'theme',

    /**
     * Resources
     */
    'resources' => [

        'theme:' => '',
        'views:' => 'views'

    ],

    /**
     * Menu positions
     */
    'menus' => [

        'main' => 'Main',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Widget positions
     */
    'positions' => [

        'hero' => 'Hero',
        'top' => 'Top',
        'sidebar' => 'Sidebar',
        'bottom' => 'Bottom',
        'footer' => 'Footer',
        'offcanvas' => 'Offcanvas'

    ],

    /**
     * Node defaults
     */
    'node' => [

        'alignment' => '',
        'sidebar-first' => false,
        'hero-image' => '',
        'hero-contrast' => '',
        'navbar-transparent' => '',

    ],

    /**
     * Widget defaults
     */
    'widget' => [

        'panel' => '',
        'title_size' => 'uk-panel-title',
        'alignment' => ''

    ],

    /**
     * Settings url
     */
    'settings' => '@site/settings#site-theme',

    /**
     * Configuration defaults
     */
    'config' => [

        'logo-contrast' => '',

    ],

    /**
     * Events
     */
    'events' => [

        'view.system/site/admin/settings' => function ($event, $view) use ($app) {
            $view->script('site-theme', 'theme:app/bundle/site-theme.js', 'site-settings');
            $view->data('$theme', $this);
        },

        'view.system/site/admin/edit' => function ($event, $view) {
            $view->script('site-appearance', 'theme:app/bundle/site-appearance.js', 'site-edit');
        },

        'view.system/widget/edit' => function ($event, $view) {
            $view->script('widget-appearance', 'theme:app/bundle/widget-appearance.js', 'widget-edit');
        },

        /**
        * Custom markup calculations based on theme settings
        */
        'view.layout' => function ($event, $view) use ($app) {

            if ($app->isAdmin()) {
                return;
            }

            $classes = [
                'navbar' => 'tm-navbar',
                'hero' => 'tm-block-height'
            ];

            $sticky = [
                'media' => 767,
                'showup' => true,
                'animation' => 'uk-animation-slide-top'
            ];

            $view->config()->set('logo-navbar', $view->config('logo'));

            // Sticky overlay navbar if hero position exists
            if ($view->config('navbar-transparent') && $view->position()->exists('hero') && $view->config('hero-image')) {

                $sticky['top'] = '.uk-sticky-placeholder + *';
                $classes['navbar'] .= ' tm-navbar-overlay tm-navbar-transparent';
                $classes['hero'] = 'uk-height-viewport';

                if ($view->config('hero-contrast')) {

                    $sticky['clsinactive'] = 'tm-navbar-transparent tm-navbar-contrast';
                    $classes['navbar'] .= ' tm-navbar-contrast';

                    if ($view->config('logo-contrast')) {
                        $view->config()->set('logo-navbar', $view->config('logo-contrast'));
                    }

                } else {
                    $sticky['clsinactive'] = 'tm-navbar-transparent';
                }

            }

            if ($view->config('hero-contrast') && $view->config('hero-image')) {
                $classes['hero'] .= ' uk-contrast';
            }

            $classes['sticky'] = 'data-uk-sticky=\''.json_encode($sticky).'\'';

            $view->config()->add(['classes' => $classes]);

        }

    ]

];
