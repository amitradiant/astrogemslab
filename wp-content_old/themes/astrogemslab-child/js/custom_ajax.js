jQuery(document).ready(function () {

jQuery(".overlay").ajaxStart(function(){
   //jQuery(this).show(500);
    alert("Start");
 });

jQuery(".overlay").ajaxComplete(function(){
   //jQuery(this).hide(500);
    alert("com");
 });

 jQuery('.clear-all').click(function(e) {
    //alert();
    //jQuery('.water-schedule').removeAttr('checked');
    jQuery('.water-schedule').prop('checked', false);
    e.preventDefault();
    var catids = '';
    var data = {
         'action': 'taxonomy_products',
         'catids': catids,
     };

     jQuery.ajax({
         type: 'POST',
         data: data,
         url: ajax_object.ajax_url,
         dataType: 'json',
    beforeSend: function(){
     jQuery(".overlay").show();
    },
   complete: function(){
     jQuery(".overlay").hide();
   },
         success: function (response) {
             //alert(response['message']);
             jQuery("#ajax_product_filter").html(response['message']);
         }
     });
 });

jQuery(document).on("change", '.water-schedule', function (event) {
     var catids = '';
     // var tax = jQuery('.water-schedule').attr('data-tax');
     jQuery('.water-schedule').each(function () {
         if (jQuery(this).is(":checked")) {
             catids += jQuery(this).attr('data-catids') + ",";
         }
     });

     // alert(catids);
     // alert(tax);
    
     var data = {
         'action': 'taxonomy_products',
         'catids': catids,
     };

     jQuery.ajax({
         type: 'POST',
         data: data,
         url: ajax_object.ajax_url,
         dataType: 'json',
    beforeSend: function(){
     jQuery(".overlay").show();
    },
   complete: function(){
     jQuery(".overlay").hide();
   },
         success: function (response) {
             //alert(response['message']);
             jQuery("#ajax_product_filter").html(response['message']);
         }
     });

 });


// jQuery(document).on("change", '.maintenance', function (event) {
//      var catids = '';
//      var tax = jQuery('.maintenance').attr('data-tax');
//      jQuery('.maintenance').each(function () {
//          if (jQuery(this).is(":checked")) {
//              catids += jQuery(this).attr('data-catids') + ",";
//          }
//      });

//      var data = {
//          'action': 'taxonomy_products',
//          'catids': catids,
//          'tax': tax,
//      };

//      jQuery.ajax({
//          type: 'POST',
//          data: data,
//          url: ajax_object.ajax_url,
//          dataType: 'json',
//          success: function (response) {
//              //alert(response['message']);
//              jQuery("#ajax_product_filter").html(response['message']);

//          }
//      });

//  });

 });