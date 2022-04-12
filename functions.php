<?php 
    function bobby_register_sidebar(){
        register_sidebar(array(
            "id" => "my_sidebar",
            "name" => "My Sidebar",
            "description" => "El sidebar de Bobby",
            "class" => "my_sidebar_class"
        ));
    }

    function bobby_supports_theme(){            //soportes para el tema
        add_theme_support('html5');             //soporte html5
        add_theme_support('post-thumbnails');   //soporte imagenes personalizadas
    }

    add_action('after_setup_theme','bobby_supports_theme');
    add_action('widgets_init','bobby_register_sidebar');
?> 