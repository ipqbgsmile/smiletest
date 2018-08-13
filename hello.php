<?php
echo "hello!!!";
$filename = "http://10.247.158.101:81/index.html";				//要读取的远程文件
$fp = fopen($filename,"rb");	//打开文件
echo fread($fp,1000);
