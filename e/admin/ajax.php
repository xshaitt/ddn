<?php
require('../class/connect.php');        //引入数据库配置文件和公共函数文件
require('../class/db_sql.php');        //引入数据库操作文件
$link=db_connect();                //连接MYSQL
$empire=new mysqlquery();        //声明数据库操作类

if($_GET['a'] == 'del')
{
    if($_GET['del'] == 'one')
    {
        //删除指定ID的记录
        $id = $_GET['id'];
        $empire->query("delete from keyword_manage where id = $id");
        echo '0';
    }elseif ($_GET['del'] == 'all')
    {
        $id = $_GET['id'];
        $empire->query("delete from keyword_manage where id in ($id)");
        echo '0';
    }
}elseif ($_GET['a'] == 'add')
{
    $keyword = $_POST['keyword'];
    $weight = $_POST['weight'];
    $special = $_POST['special'];
    $time = time();
    $empire->query("insert into keyword_manage (keyword,weight,special,time) values ('$keyword','$weight','$special','$time')");
    echo '0';
}elseif ($_GET['a'] == 'query')
{
    $id = $_GET['id'];
    $sql=$empire->query("select * from keyword_manage where id='$id'");
    echo json_encode($empire->getAll($sql)[0]);
}elseif ($_GET['a'] == 'update')
{
    $id = $_GET['id'];
    $keyword = $_POST['keyword'];
    $weight = $_POST['weight'];
    $special = $_POST['special'];
    $time = time();
    $empire->query("update keyword_manage set keyword='$keyword',weight='$weight',special='$special',time=$time where id='$id'");
    echo '0';
}
db_close();                        //关闭MYSQL链接
$empire=null;                        //注消操作类变量
?>