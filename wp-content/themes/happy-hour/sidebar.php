<?php 
    if( is_active_sidebar('main_sidebar') ):
        dynamic_sidebar('main_sidebar');
    else:
        _e('This is sidebar, You have to add some widgets','happyhour');
    endif;
        
?>