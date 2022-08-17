


//  var a = "get-"+ $(this).attr(clicked_id) +"-1";
//  var b = "get-"+ clicked_id +"-2";
//  var c = "get-"+ clicked_id +"-3";
//  var d = "get-"+ clicked_id +"-4";

//  alert(a);


//  $( '#user_name' ).val( $( '#'+ a +'' ).text() )
//  $( '#user_email' ).val( $( '#'+ b +'' ).text() )
//  $( '#user_email' ).attr("readonly", "");
//  $( '#user_phone' ).val( $( '#'+ c +'' ).text() )
//  $( '#user_dob' ).val( $( '#'+ id5 +'' ).text() )
// // $(a).attr("data-id");
// // alert(a);

 
//   }

jQuery(document).ready(function($){
    $('#abc').click(function(){
        var id2 = 'get-' + $(this).attr("id") + '-1';
        var id3 = 'get-' + $(this).attr("id") + '-2';
        var id4 = 'val-' + $(this).attr("id") + '-4';
        var id5 = 'val-' + $(this).attr("id") + '-5';

        $( '#user_name' ).val( $( '#'+ id2 +'' ).text() )
        $( '#user_email' ).val( $( '#'+ id3 +'' ).text() )
        $( '#user_email' ).attr("readonly", "");
        $( '#user_phone' ).val( $( '#'+ id4 +'' ).text() )
        $( '#user_dob' ).val( $( '#'+ id5 +'' ).text() )
    });
});