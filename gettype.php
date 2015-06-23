<?php
/*
 * PHP中获取变量类型
 */

 gettype(mixed $var)
 //用来取得变量的类型。返回的类型字符串可能为下列字符串其中之一：integer、double、string、array、object、unknown type

is_numeric ( mixed $var ): //检验测定变量是不是为数码或数码字符串 
is_bool(): //检验测定变量是不是布尔型 
is_float(): //检验测定变量是不是浮点型 和is_double，is_real()都同样的用法 
is_int(): //检验测定变量是不是整型is_integer()同样的用法 
is_string(): //检验测定变量是不是字符串 
is_object(): //检验测定变量是不是一个对象 
is_array(): //检验测定变量是不是数组 
is_null(): //检验测定变量是不是null值