<?php
require('../class/connect.php');        //引入数据库配置文件和公共函数文件
require('../class/db_sql.php');        //引入数据库操作文件
$link=db_connect();                //连接MYSQL
$empire=new mysqlquery();        //声明数据库操作类
$sql=$empire->query("select * from `keyword_manage`");//查询所有的关键字
$result=$empire->getAll($sql);
$sql=$empire->query("select ztid,ztname from `phome_enewszt`");//查询所有的关键字
$special=$empire->getAll($sql);
db_close();                        //关闭MYSQL链接
$empire=null;                        //注消操作类变量
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
        <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>
    <h2 class="gjz">关键字管理</h2>
    <table>
        <tr>
            <td><button onclick="allCheck()">全选</button><button onclick="unAllCheck()">取消</button><button onclick="NCheck()">反选</button></td><td>关键字</td><td>权重</td><td>专题</td><td>日期</td><td>管理</td>
        </tr>
        <?php foreach ($result as $v): ?>
            <tr>
                <td><input type="checkbox" class="cbox" name="box" value="<?=$v['id']?>"/ ></td><td><?=$v['keyword']?></td><td><?=$v['weight']?></td><td><?=$v['special']?></td><td><?=date("Y-m-d H:i:s",$v['time'])?></td><td><button class="delOne" v="<?=$v['id']?>">删除</button><button class="edit" v="<?=$v['id']?>">编辑</button></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button class="delAll">删除</button>
    <button class="btn btn-primary btn-lg" data-toggle="modal"
            data-target="#myModal">
        添加
    </button>
    <!-- 模态框添加 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                        添加新的关键字
                    </h4>
                </div>
                <div class="modal-body">
                    <form>
                        关键字：<input type="text" name="keyword" class="keyword"/><br />
                        权　重：<input type="text" name="weight" class="weight" />
                        <h3>请选择对应专题</h3>
                        <?php foreach ($special as $v): ?>
                            <?=$v['ztname']?>：<input type="checkbox" name="special" class="special" value="<?=$v['ztid']?>"/>
                        <?php endforeach; ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary addSpecial">
                        确定
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

    <!-- 模态框编辑 -->
    <div class="modal fade" id="editModel" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close"
                            data-dismiss="modal" aria-hidden="true">
                        &times;
                    </button>
                    <h4 class="modal-title">
                        添加新的关键字
                    </h4>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" class="sid" />
                        关键字：<input type="text" name="keyword" class="editkeyword"/><br />
                        权　重：<input type="text" name="weight" class="editweight" />
                        <h3>请选择对应专题</h3>
                        <?php foreach ($special as $v): ?>
                            <?=$v['ztname']?>：<input type="checkbox" name="special" class="editspecial" value="<?=$v['ztid']?>"/>
                        <?php endforeach; ?>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default"
                            data-dismiss="modal">关闭
                    </button>
                    <button type="button" class="btn btn-primary saveSpecial">
                        确定
                    </button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    </body>
<script>
    $('.saveSpecial').click(function(){
        var id = $('.sid').attr('value');
        var keyword = $('.editkeyword').val();
        var weight = $('.editweight').val();
        var special = '';
        for(var i=0;i<document.getElementsByClassName('editspecial').length;i++)
        {
            if(document.getElementsByClassName('editspecial')[i].checked == true)
            {
                special += ','+document.getElementsByClassName('editspecial')[i].value;
            }
        }
        special = special.substr(1);
        $.post('ajax.php?a=update&id='+id,{'keyword':keyword,'weight':weight,'special':special},function (data) {
            if(data == '0')
            {
                alert('添加成功');
            }else{
                alert('添加失败');
            }
        });
        $('#editModel').modal('hide');
    });
    $('.edit').click(function () {
        //使用ajax查询出关键字的相关数据
        var id = $(this).attr('v');
        $('.sid').attr('value',id);
        $.ajax({
            url:'ajax.php?a=query&id='+id,
            async:false,
            success:function (data) {
                //修改关键字属性的值
                data = eval('('+data+')');
                $('.editkeyword').attr('value',data.keyword);
                $('.editweight').attr('value',data.weight);
                var arr = data.special.split(',');
                $('.editspecial').prop('checked',false);
                for(var i = 0;i<arr.length;i++)
                {
                    $(".editspecial[value='"+arr[i]+"']").prop('checked',true);
                }
            }
        });
        $('#editModel').modal('show');
    });
    $('.addSpecial').click(function(){
        var keyword = $('.keyword').val();
        var weight = $('.weight').val();
        var special = '';
        for(var i=0;i<document.getElementsByClassName('special').length;i++)
        {
            if(document.getElementsByClassName('special')[i].checked == true)
            {
                special += ','+document.getElementsByClassName('special')[i].value;
            }
        }
        special = special.substr(1);
        $('#myModal').modal('hide');
        $.post('ajax.php?a=add',{'keyword':keyword,'weight':weight,'special':special},function (data) {
            if(data == '0')
            {
                alert('添加成功');
            }else{
                alert('添加失败');
            }
        });
    });
    $('.delOne').click(function(){
        var id = $(this).attr('v');
        $.get('ajax.php?a=del&del=one&id='+id,function (data) {
            if(data == 0)
            {
                alert('删除成功');
            }
        });
    });
    $('.delAll').click(function(){
        var id = '';
        for(var i=0;i<document.getElementsByClassName('cbox').length;i++)
        {
            if(document.getElementsByClassName('cbox')[i].checked == true)
            {
                id += ','+document.getElementsByClassName('cbox')[i].value;
            }
        }
        id = id.substr(1);
        if(id != '')
        {
            $.get('ajax.php?a=del&del=all&id='+id,function (data) {
                if(data == 0)
                {
                    alert('删除成功');
                }
            });
        }
    });
    function allCheck() {
        for(var i=0;i<document.getElementsByClassName('cbox').length;i++)
        {
            document.getElementsByClassName('cbox')[i].checked='true';
        }
    }
    function unAllCheck() {
        for(var i=0;i<document.getElementsByClassName('cbox').length;i++)
        {
            document.getElementsByClassName('cbox')[i].checked='';
        }
    }
    function NCheck() {
        for(var i=0;i<document.getElementsByClassName('cbox').length;i++)
        {
            document.getElementsByClassName('cbox')[i].checked=!(document.getElementsByClassName('cbox')[i].checked);
        }
    }
</script>
</html>