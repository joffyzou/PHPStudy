<?php
    // 变量的特点：
    // 1、必须以 $ 开始。如变量x必须写成$x
    // 2、变量的首字母不能以数字开始
    // 3、变量的名字区分大小写
    // 4、变量不要用特殊符号、中文，_不算特殊符号
    // 5、变量命名要有意义（别写xxx、aaa、ccc这种变量名）

    // $ 叫做美元符，英文单词：dollar。PHP的变量必须以美元符开始。说明搞PHP有”钱“途。


    /**
     * 注释的功能有很多：
     * 1、对重点进行标注
     * 2、时间长了容易忘记快速回忆，方便查找
     * 3、让其他人看的时候快速看懂
     * 4、还可以生成文档，代码写完相关的文档就写完了，提高中作效率
     * 5、注释、空行、回车之后的代码看起来更优美
     * 6、注释可用来排错。不确定代码中哪一块写错了，可以将一大段注释，确定错误区间
     * 7、注释中间的部分的内容，电脑不会执行它
     */


    /** 整型 int
     * 
     * php中的整型就是整数
     * 整型分为：
     * 1、10进制
     * 2、8进制（了解，基本不用）
     * 3、16进制（了解，基本不用）
     */

    
    /** 布尔 boolean
     * 
     * 真（true）
     * 假（false）
     * 非零为true
     * 在php中不是只有false值才为假的，在一些特殊情况下boolean值也被认为是false。这些特殊情况为：0、0.0、"0"、空白字符串（""）、只声明没有赋值的数组等。 
     */
    
     
    /** 字符串 string
     * 
     * 在php中声明字符串有三种方式：
     * 1、用单引号声明 $str = '字符串'
     * 2、用双引号声明 $str = "字符串"
     * 3、用字界符声明（需要输入非常大段的字符串时使用）
        *     $str = <<<ABC
        *          如果
        *           非要在这个滚犊子
        *       前
        *           面<br />
        *           加上一段
        *       <i>距离的话</i>
        *      我想说：<h1>思想有多远，你就跟我滚多远</h1>
        *       ABC;
     * 
     * 单引号、双引号的区别：
     * 1、双引号解析变量，但是单引号不解析变量。
     * 2、在双引号里面插入变量，变量后面如果有英文或者中文字符串，它会把这个字符和变量拼接起来，视为一整个变量，一定要在变量后面接上特殊字符，例如空格等分开。
     * 3、如果在双引号里面插入变量的时候，后面不想有空格，可以拿大括号{}将变量包起来。
     * 4、双引号解析转义字符，单引号不解析转义字符。但，单引号能解析 \' 和 \ 
     * 5、单引号效率高于双引号，尽可能使用单引号
     * 6、单引号和双引号可以互插！！！双引号当中插入单引号，单引号当中插入变量，这个变量会被解析。
     * 7、神奇的字符串拼接胶水——（.）点，用来拼接字符串。
     * 8、我们将定界符声明字符串视为双引号一样的功能来看待。
     */


    /** 浮点型 float
     * 
     * 数学里面的小数
     * 声明方式有两种：
     * 1、普通声明
     * 2、科学声明
     */
    
     
    /** 空值 null
	 * 
	 * 主要有以下三种情况产生空值null类型：
	 * 1、通过变量赋值明确指定变量的值未NULL
	 * 2、一个变量没有给任何值，默认为NULL
	 * 3、使用函数unset()将变量销毁掉
	 * 
     * empty() 可以向括号中间传入一个变量。这个变量的值如果为false或者为null的话，返回true。
     * isset() 可以向括号中间传入一个或者多个变量，变量与变量间用逗号分开。只要有有一个变量为null，则返回false，否则，返回true。
     * unset() 功能是销毁变量。
     */ 
?>