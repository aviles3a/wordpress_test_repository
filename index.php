<div class="all_content">

<?php

    if( have_posts() ){
        if(is_home() && ! is_front_page()){
            while( have_post() ){
                the_post();
            }
        }
    }else{
        echo "No hay posts";
    }

?>

</div>