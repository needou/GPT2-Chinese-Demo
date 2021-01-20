<?php
//造一个连接
$con = new MySQLi("localhost","root","root","huodong");

//判断是否有错误
if(mysqli_connect_error()){
    echo "连接失败";
    exit();
}

//写SQL语句
$sql = "select * from dede_archives a left join dede_addonarticle d on a.id = d.aid";
//执行SQL语句，返回结果集
$result = $con->query($sql);//->符号表示调用的意思，相当于c#中的点  .
$arr = [];

//从结果集中读取数据
while($row =  mysqli_fetch_array($result))
{
    $arr[] = strip_tags( addslashes( $row['body']));
}
$str = json_encode($arr,JSON_UNESCAPED_UNICODE);

file_put_contents('train.json',$str);
echo '处理完成：'.count($arr);