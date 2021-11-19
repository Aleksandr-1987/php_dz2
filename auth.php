<?php
if($_COOKIE['user'] == 'Да')
    setcookie('user', 'Да', time() - 3600, '/php_dz2/' );
else
    setcookie('user', 'Да', time() + 3600, '/php_dz2/' );
header('Location: /php_dz2/');
?>