$('document').ready(function(){
    $('#search').keyup(function(){
       var searchkey = $(this).val();
       searchTags( searchkey );
    });
   function searchTags( keyword ){
   var data = keyword;
   $.ajax({
               method: 'get',
               url : "<?php echo $this->Url->build( [ 'controller' => 'Users', 'action' => 'search' ] ); ?>",
               data: {keyword:data},
               success: function( response )
               {       
                  $( '.table-content' ).html(response);
               }
           });
   };
});