<?php
/*
 * PHP获取文件绝对路径的代码并取得当前文件的上一级目录名
 */

//PHP获取文件绝对路径 

echo __FILE__ ; 					// 取得当前文件的绝对地址，结果：D:\www\test.php
echo dirname(__FILE__); 			// 取得当前文件所在的绝对目录，结果：D:\www\
echo dirname(dirname(__FILE__)); 		//取得当前文件的上一层目录名，结果：D:\ 

/*
	string dirname  ( string $path  )		//给出一个包含有指向一个文件的全路径的字符串，本函数返回去掉文件名后的目录名。 
*/

/*
	chdir(directory) ;			//把当前的目录改变为指定的目录
						//directory必需，规定新的目录
						//若成功，则该函数返回 true，否则返回 false

*/

//获得当前目录
echo getcwd();					//C:\testweb\main 
echo "<br />";

//改变为 images 目录
chdir("images");
echo "<br />";
echo getcwd(); 					//C:\testweb\main\images 