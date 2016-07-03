$(function(){
    
	myFocus.set({
		id:'st1',//ID
		pattern:'mF_classicHC',//风格
		txtHeight:'0',//文字层高度设置(像素),'default'为默认高度，0为隐藏
	    wrap:false
	});	
	
	$('.jh_tabs .t li').hover(
	   function(){
	     $(this).addClass('select').siblings('li').removeClass('select');
		 var index=$('.jh_tabs .t li').index(this);
		 $('.jh_tabs .t_con').eq(index).show().siblings('.jh_tabs .t_con').hide();
		 
	   }

	);


 
 $.widget( "custom.catcomplete", $.ui.autocomplete, {
   _renderItem: function( ul, item ) {
  return $( "<li class='tagres'>" )
    .append( $( "<a href='"+item.url+"' target='blank'>" ).text(item.sname) )
    .append($("<em>").text(item.num+'篇文章'))
    .appendTo( ul );
}
  });
 
 
  $(function() {
	  $.ajax({
		type:'GET', 
		dataType:'json',
		url: '/a/cat_index.json',
		error:function(err){
		   	
		},
        success:function(data){
			$( "#tags" ).catcomplete({
			source:data,
    	    select: function( event, ui ) {
	         return false;
     	  },
     	  focus:function(event, ui){
     	 	
     	  }
      });
		}		
	  });
	  
	/*  
    var tags ='http://localhost/a/cat_index.json' ;
	
    
    */

  });
  
  
  //scroll
  
  var scht=$('.topbar').height();
  
 $(window).scroll(function(){
 	
 	if($(document).scrollTop()>scht){
 		$('.navbar').addClass('gs');
 	}else{
 		$('.navbar').removeClass('gs');
 	}
 	
 });



});
