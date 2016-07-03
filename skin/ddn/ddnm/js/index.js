$(function(){
	


$('#natnav').on('click',function(){

	$('#catg').toggle();
});


TouchSlide({ 
	slideCell:"#scrollBox",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	effect:"leftLoop", 
	autoPage:true, //自动分页
	switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});


/*TouchSlide( { slideCell:"#tabBox1",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox1-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );
*/

TouchSlide( { slideCell:"#tabBox2",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox2-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );


TouchSlide( { slideCell:"#tabBox3",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox3-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );

TouchSlide( { slideCell:"#tabBox4",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox4-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );

TouchSlide( { slideCell:"#tabBox5",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox5-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );


TouchSlide( { slideCell:"#tabBox6",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox6-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );

TouchSlide( { slideCell:"#tabBox7",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox7-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );

TouchSlide( { slideCell:"#tabBox8",
	endFun:function(i){ //高度自适应 sumiao
		var bd = document.getElementById("tabBox8-bd");
		bd.parentNode.style.height = bd.children[i].children[0].offsetHeight+"px";
		if(i>0)bd.parentNode.style.transition="200ms";//添加动画效果
	}
} );



$('.selcat').click(function(){
	$('.mark').show().css('opacity','0.6');
	$('.catpanel').show();
});

$('.mark').click(function(){
	$('.mark').hide();
	$('.catpanel').hide();
});

$('.goback').click(function(){
	
	history.go(-1);
	
});	

/*
$('.artmain').click(function(){
	var t=$(this);
	var i=t.find('img');
	if(i.length>0){
		var src=i.attr('src');
		location.href=src;
        
	}
	return false;
});
*/

$('.artmain a').click(function(e){
	var t=$(this);
	var i=t.find('img');	
	
	if(i.length>0){
    var et=$(e.target);
	
	if(et.attr('tagName')=='IMG'){
	var src=et.attr('src');
    location.href=src;	
	}

	return false};
	
});

 $.widget( "custom.catcomplete", $.ui.autocomplete, {
   _renderItem: function( ul, item ) {
  return $( "<li class='tagres'>" )
    .append( $( "<a href='"+item.url+"' target='blank'>" ).text( item.sname ) )
    .append($("<em>").text(item.num+'篇文章'))
    .appendTo( ul );
}
  });
 
 
  $(function() {
    var tags = [
      {'value':'花茶的功效花茶的功效1111',url:'http://www.baidu.com','num':5,'sname':'花茶'},
      {'value':'养生1',url:'http://www.baidu.com','num':8,'sname':'养生'}
    ];
    $( "#tags" ).catcomplete({
    	source:tags,
    	  select: function( event, ui ) {
	        return false;
     	 },
     	 focus:function(event, ui){
     	 	
     	 }
    });
    

  });
  


});