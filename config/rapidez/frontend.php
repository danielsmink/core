<?php

return [
    // The variables which should be exposed to the frontend.
    'exposed' => [
        'store',
        'es_url',
        'es_prefix',
        'media_url',
        'magento_url',
        'notifications',
        'checkout_steps',
        'flushable_localstorage_keys',
        'show_customer_address_fields',
    ],

    // The checkout steps which are used to name the steps
    // in the url and in the progressbar on steps. You can
    // add different steps for different stores. Keep
    // them lowercase and do not include any spaces.
    'checkout_steps' => [
        'default' => ['cart', 'login', 'credentials', 'payment', 'success'],
    ],

    // Link store codes to theme folders
    // The structure is `'store_code' => 'folder_path'`
    'themes' => [
        'default' => resource_path('themes/default'),
    ],

    // The fully qualified class names of the widgets.
    'widgets' => [
        'Magento\Cms\Block\Widget\Block'                   => Rapidez\Core\Widgets\Block::class,
        'Magento\CatalogWidget\Block\Product\ProductsList' => Rapidez\Core\Widgets\ProductList::class,
    ],

    'view_only_widget' => \Rapidez\Core\Widgets\ViewOnly::class,

    // The fully qualified class names of the content variables.
    'content_variables' => [
        Rapidez\Core\ContentVariables\Media::class,
        Rapidez\Core\ContentVariables\Store::class,
        Rapidez\Core\ContentVariables\Widget::class,
    ],

    // Localstorage keys that need to be flushed when the cache is cleared.
    'flushable_localstorage_keys' => [
        'attributes',
        'countries',
        'swatches',
    ],

    // The classes for each notification type.
    'notifications' => [
        'classes' => [
            'warning' => 'text-yellow-600 bg-yellow-100 border-yellow-300',
            'success' => 'text-green-600 bg-green-100 border-green-300',
            'info'    => 'text-blue-600 bg-blue-100 border-blue-300',
            'error'   => 'text-red-600 bg-red-100 border-red-300',
        ],
    ],

    // Z-Index per element
    'z-indexes' => [
        'header-dropdowns' => 'z-20',
        'lightbox'         => 'z-30',
        'notification'     => 'z-20',
        'slideover'        => 'z-50',
    ],
];
