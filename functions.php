<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Контент сайта' ) )
        ->add_tab('Общие настройки', [
            Field::make( 'image', 'site_logo', 'Логотип сайта' ),
            Field::make( 'text', 'phone_link', 'Телефон ссылка (только цифры)' ),
            Field::make( 'text', 'phone_text', 'Телефон текст (отображение, можно использовать дополнительные символы и пробелы)' ),
            Field::make( 'text', 'mail', 'Email' ),
            Field::make( 'rich_text', 'address', 'Адрес' ),
            Field::make( 'rich_text', 'copyright', 'Копирайт' ),
        ])
        ->add_tab('Услуги', [
          Field::make( 'text', 'site_logo', 'Логотип сайта' ),
        ]);
}