
jQuery(document).ready(function($) {
    var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
    function dcs_load_all_posts(page){
        $(".dcs_pag_loading").fadeIn().css('background','#ccc');
        var data = {
            page: page,
            action: "demo-pagination-load-posts"
        };
        $.post(ajaxurl, data, function(response) {
            $(".dcs_universal_container").html('').append(response);
            $(".dcs_pag_loading").css({'background':'none', 'transition':'all 1s ease-out'});
        });
    }
    dcs_load_all_posts(1);
    $('.dcs_universal_container .dcs-universal-pagination li.active').live('click',function(){
        var page = $(this).attr('p');
        dcs_load_all_posts(page);
    });
}); 
