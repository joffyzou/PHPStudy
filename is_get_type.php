<?php
    /**
     * 查看数据类型
     * 1、gettype(传入一个变量)能够获得变量的类型
     * 2、var_dump(传入一个变量)输出变量的类型和值
     */

    $float = 88.8;
    $type = gettype($float);

    echo $type;

    $str = '类型测试';
    var_dump($str);


    /**
     * 判断数据类型
     * 我们使用is_*系列函数。is_types这一系列的函数，来进行判断某个东西是不是某个类型。如果是这个类型返回真，不是这个类型返回假。
     * is_int       是否为整型
     * is_bool      是否为布尔
     * is_float     是否是浮点
     * is_string    是否是字符串
     * is_array     是否是数组
     * is_object    是否是对象
     * is_null      是否为空
     * is_resource      是否为资源
     * is_scalar        是否为标量
     * is_numeric       是否为数值类型
     * is_callable      是否为函数
     */

    // is_*系列函数有个特点，就是如果是这个类型就返回的是真。不是这个数据类型就返回的是假 
    $fo = false;
    
    if(is_bool($fo)) {
        echo '执行真区间';
    } else {
        echo '执行假区间';
    }

    // 检查未声明的变量$p是否为空，为空就执行真区间
    if(is_null($p)) {
        echo '执行真区间';
    } else {
        echo '执行假区间';
    }
    echo "<br/>";

    // 字符串类型的数值，看看执行的是真还是假
    $str = '19.9';
    if(is_numeric($str)) {
        echo '执行真区间';
    } else {
        echo '执行假区间';
    }
    echo "<br/>";
    
    $sca = true;
    // 如果为标量，执行真区间
    // 把$sca的值换成整型、浮点、布尔和字符串试试
    if(is_scalar($sca)) {
        echo '执行真区间';
    } else {
        echo '执行假区间';
    }
    echo "<br/>";

    // 换成echo,is_int试试，为什么echo执行加区间呢？
    if(is_callable('var_dump')) {
        echo '执行真区间';
    } else {
        echo '执行假区间';
    }


    /**
     * 注：is_types 很好记。is_在前后面跟类型即可。
     * 
     * 变量：整型（int）浮点（float）、布尔（bool）、字符串（string）
     * 混合类型：数组（array）、对象（object）
     * 特殊类型：空（null）、资源（resouce）、回调（callback）
     */

    // 为什么最后的实验中echo执行假区间呢？
    // 因为 echo 不是函数，是基本语法。大家眼前可以不用理解函数和基本语法的区别。 
?>