<?php

    // $_GET 后面加上中括号，将 username 作为字符串放在中括号里面，就得到了表单里面的 <input type="text" name="username" /> 的值

    $username = $_REQUEST['username'];
    echo $username.'<br />';

    // $_GET['pwd'] 得到表单 <input type="password" name="pwd" /> 的值

    $password = $_REQUEST['pwd'];
    echo $password.'<br />';

?>