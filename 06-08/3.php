<?php
// 自动加载类 __autoload()
// 参数: 缺少的类名 (适合一个文件一个类的模式，7.2只会就不支持了)
function __autoload($class_name){
    require "{$class_name}.class.php";
}

// php7.2之后出现了更强大的自动加载类 spl_autoload_register() 5.1开始就支持了 知道7.2只剩下spl_autoload_register
/*方法一
    function loadClass($class_name){
        require "{$class_name}.class.php";
    }

    spl_autoload_register('loadClass')
*/

/*方法二 */
spl_autoload_register(function($class_name)){
    require "{$class_name}.class.php";
}
