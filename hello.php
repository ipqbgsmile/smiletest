<?php
echo "hello!!!";
$filename = "http://haiji-master.default.svc.cluster.local:81/index.html";				//要读取的远程文件
$fp = fopen($filename,"rb");	//打开文件
echo fread($fp,1000);
