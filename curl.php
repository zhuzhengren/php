
<?php
// 初始化
$ch = curl_init();
// 设置选项，包括URL
curl_setopt($ch, CURLOPT_URL,"http://www.hao123.com");
//是否将参数返回到页面中（0表示是1表示否）
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER,0);
//执行并获取HTML文档内容
$output = curl_exec($ch);
// 关闭url
echo $output;
curl_close($ch);
?>