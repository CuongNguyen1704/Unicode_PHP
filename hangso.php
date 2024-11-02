<?php 
        // Hằng số là biến không thay đổi
        define('_WEB_HOST_ROOT','https://hoangan.net');
        echo _WEB_HOST_ROOT;
        echo '<br>';
        const _WEB_PATH_ROOT = 'C:/xampp/htdocs';
        echo _WEB_PATH_ROOT;
        echo '<br>';
        // check xem 
        $checkDefine = defined('_WEB_HOST_ROOT' );
        var_dump($checkDefine);
