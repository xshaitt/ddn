
$(window).load(function(){

function getHz(adds) {

    var n = adds.lastIndexOf('.');
    var hz = adds.substr(n + 1);
    return hz;

}

var str = '';
var nextstr='';
var tbstr = "";
var mt = $('#test');
var cs = $('#foo');
var keys = $('#keys');
var titles = $("#alt");
var ues = UE.getEditor('newstext');

var foo = $('#foo');

//图片居中
var picalign=$('#picalign');

picalign.click(function(){
	$(ues.body).find('img').parent('p').css({
		'text-align':'center'
	});
});

//清除表格
$('#cleartable').click(function(){
	$(ues.body).find('.picinfo').remove();
});

/*//增加分页
$('#addpage').click(function(){
	var ues = UE.getEditor('newstext');
	var pageinfo=$('#pageinfo').val();
	var pageinfostr=pageinfo.split('##');
	var imgs=$(ues.body).find('img');
	for(var i=0;i<imgs.length-1;i++){
		if(!pageinfostr[i]||pageinfostr[i]==""){
			var pagef='[!--empirenews.page--]';
		}else{
			var pagef='[!--empirenews.page--]'+pageinfostr[i]+'[/!--empirenews.page--]';
		}
		var table=$(ues.body).find('.picinfo');
	
		if($($(ues.body).find('.pageline')[i]).length<1){
		  if(!table||table.length<1){
		  	$(imgs[i]).after('<span class="pageline">'+pagef+'</span><br>');
		  }else{
		  	$(table[i]).after('<span class="pageline">'+pagef+'</span><br>');
		  }
		  
		}else{
			$($(ues.body).find('.pageline')[i]).html(pagef);
		}
	}
});*/

//清除分页
$('#clearpage').click(function(){
	$(ues.body).find('.pageline').remove();
});


$('#dd').click(function() {
   
    var dstr = titles.val() + '共有图片' + $(ues.body).find('img').length + '张，点击图片查看原图';
    $('#smalltext').val(dstr);
});



$('#jbh').click(function() {
   
    var jbh=$('#lb').val()+'图片大全_'+titles.val()+'的画法，共有图片' + $(ues.body).find('img').length + '张，关于'+titles.val()+'的图片，'+titles.val()+'绘画素材大全，教你如何画'+titles.val();
 
    $('#smalltext').val(jbh);
});


mt.click(function() {
    str = $(ues.body);
    var imgs = str.find('img');
    var len = imgs.length;
    var nextstr=$('.nextpage:checked').val();
    if(nextstr==""){
    	nextstr="查看原始大图";
    }
    //var wp=imgs.parent();
    imgs.each(function(i, n) {
        var that = $(this);
        var wp = that.parent();
        var src = that.attr('src');
        var hz = getHz(src);
        var w = that.width();
        var h = that.height();
        var names = titles.val();

        if (w > 600) {
            that.width(600);
        }

        if (wp[0].nodeName.toLocaleLowerCase() !== 'a') {
            that.wrap('<a href="' + src + '"  target="_blank"></a>');

            tbstr = '<p style="clear:both;margin:10px auto;"></p><table class="picinfo" align="center" style="color: #666666;margin:0 auto">' + '<tr>' + '<th>所属分类</th><td>' + $('#lb').val() + '</td>' + '<th>图片格式</th><td>' + hz + '</td>'
            + '</tr>'
            + '<tr>' + '<th>原图宽度</th><td>' + w + 'px</td>' + '<th>原图高度</th><td>' + h + 'px</td>' + '</tr>'
            + '</table>';
            that.parents('a').after(tbstr);
            if (keys.val() != '' && keys.val()) {

                var arr = keys.val().split(',');
                that.attr({
                    'alt': arr[i],
                    'title': arr[i]
                });

            } else {
                that.attr({
                    'alt': names + '(' + (i + 1) + ')',
                    'title': nextstr
                });

            }

        }

    }); //each

}); //click事件

foo.click(function() {
    str = $(ues.body);
    var imgs = str.find('img');
    var len = imgs.length;
    var nextstr=$('.nextpage:checked').val();
    //console.log(nextstr);
    if(nextstr==""){
    	nextstr="查看原始大图";
    }
    //var wp=imgs.parent();
    imgs.each(function(i, n) {
        var that = $(this);
        var wp = that.parent();
        var src = that.attr('src');
        var hz = getHz(src);
        var w = that.width();
        var h = that.height();
        var names = titles.val();

        if (w > 600) {
            that.width(600);
        }

        if (wp[0].nodeName.toLocaleLowerCase() !== 'a') {
            that.wrap('<a href="' + src + '" target="_blank"></a>');

            if (keys.val() != '' && keys.val()) {

                var arr = keys.val().split(',');
                that.attr({
                    'alt': arr[i],
                    'title': arr[i]
                });

            } else {
                that.attr({
                    'alt': names + '(' + (i + 1) + ')',
                    'title': nextstr
                });

            }

        }

    }); //each

}); //click事件

});	
	

