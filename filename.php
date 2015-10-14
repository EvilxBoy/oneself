<?php 
$path = "/Users/admin/Desktop/shiqil/bianliang.php";
$filename = basename($path);
$filename2 = basename($path,".php");
echo 'filename=='.$filename."<br/>";
echo 'filename2=='.$filename2."<br/>";

?>


<?php
$dirname = dirname(__FILE__);
echo $dirname;
echo '<br/>';
?>

<?php
$pathinfo = pathinfo("/Users/admin/Desktop/shiqil/bianliang.php");
echo "目录名称:$pathinfo[dirname]<br/>\n";
echo "文件名称:$pathinfo[basename]<br/>\n";
echo "扩展名:$pathinfo[extension]<br/>\n";
?>

<?php 
//文件类型与相关信息
function tstamp_to_date($tstamp)
{
	return date("Y-m-d g:i:sa",$tstamp);
}

$file = "index.html";
$fh = fopen($file,"r");
$fileinfo = fstat($fh);
echo '文件名：'.basename($file).'<br/>';
echo '文件大小：'.round(($fileinfo["size"]/1024),2).'kb <br/>';
echo '最后访问日期：'.tstamp_to_date($fileinfo["atime"]).'<br/>';
echo '最后修改日期：'.tstamp_to_date($fileinfo["mtime"]).'<br/>';
echo '创建日期：'.tstamp_to_date($fileinfo["ctime"]).'<br/>';

//filesize()--计算文件的大小
$bytes = filesize($file);
echo '文件'.basename($file).'大小为:'.$bytes.'bytes<br/>';

//取得文件的建立、最后访问与更新时间；
echo '最后一次访问时间：'.date("Y-m-d g:i:sa",fileatime($file));
echo '文件创建时间：'.date("Y-m-d g:i:sa",filectime($file));
echo '文件最后更新时间：'.date("Y-m-d g:i:sa",filemtime($file));


?>