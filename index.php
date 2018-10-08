<?php
error_reporting(E_ALL | E_NOTICE | E_WARNING | E_ERROR | E_PARSE);

set_error_hander("myerrotfunction");

ini_set(display_error,1);

Exception 是系统的类；

try {
         echo "开车上班";
         throw new Exception('车子爆胎');
         echo "路况不行";
     } catch (Exception $e) {
         echo $e->getMessage()."<br />";
         echo "换成备胎继续上班";
     }
     
异常可以捕获错误 可以 用set_error_handler("function");

                        Throwable
                        
                        Error


echo 121212;



?>
