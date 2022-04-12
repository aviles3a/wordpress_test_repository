<?php 
    function bobby_register_sidebar(){
        register_sidebar(array(
            "id" => "my_sidebar",
            "name" => "My Sidebar",
            "description" => "El sidebar de Bobby",
            "class" => "my_sidebar_class",
            "before_widget" => "<span>Antes del widget</span>",
            "before_title" => "<h3>Antes del tutulo</h3>"
        ));
    }

    add_action('widgets_init','bobby_register_sidebar');
?> 