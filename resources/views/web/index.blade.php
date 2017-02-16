<?php
/**
 * Created by PhpStorm.
 * User: liuchen
 * Date: 16/12/24
 * Time: 下午3:37
 */
        echo 'execuse me';
echo '<br/>';

        echo isset($_GET['id']) ? $_GET['id']:'not id';
//        echo '<br/>';

//        echo $share1;

        echo $user;
echo '<br />';
echo '<a href="category">跳转添加</a>';
echo '<br />';
foreach ($news as $new){
    echo "<a href='$new->link'>$new->title</a>";
    echo '<br />';
}

//testXdebug();
//function testXdebug() {
//    require_once('abc.php');
//}





