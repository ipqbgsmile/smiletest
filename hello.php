<?php
echo "hello!!!";
$filename = "http://haijimain.cn-north-1.huaweicse.com/index.html";				//要读取的远程文件
$fp = fopen($filename,"rb");	//打开文件
echo fread($fp,1000);
