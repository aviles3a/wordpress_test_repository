<?php 
    function bobby_register_sidebar(){
        register_sidebar(array(
            "id" => "my_sidebar",
            "name" => "My Sidebar",
            "description" => "El sidebar de Bobby",
            "class" => "my_sidebar_class"
        ));
    }

    add_action('widgets_init','bobby_register_sidebar');
?> 