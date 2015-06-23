<?php
/*
  * MySQL查询为空的错误处理
  */

//先获取结果集 
$result=mysql_query($sql);					 
if($result){
   //判断结果集是否存在  
   if($row=mysql_num_rows($result)){
        //判断结果集里面有没有数据  
        while($row=mysql_fetch_array($result)){
            //遍历所有记录  
           @$return.=$row['user_info'].",";  
        }     
    }else{
        //结果集里面没有数据，这里的mysql_num_rows($result)=0  
        echo "没有符合的结果!";  
    }  
}else{
     //结果集不存在，则是查询异常  
     echo "数据查询出错!";  
}  