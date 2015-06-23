<?php
/*
 * PHP获取当前所在目录
 */

/*
	//获取脚本文件的目录
 	string getcwd ( void ) ;					//成功执行后返回当前目录字符串，失败返回False

 */

$ex= getcwd () ;      						//获得当前脚本目录
	$i = 0;
	if ( is_dir ( $ex )){                   				//检测是否是合法目录
  		if ($cwd = opendir ( $ex )){          		//打开目录
      			while ($li = readdir( $cwd )){       	//读取目录
   			$i++ ;
    			echo " $i: $li" ;				//输出目录中的内容
    			}
    		}
    	}     		