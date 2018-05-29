<?php
function create_admin_account()
{
    if (!(file_exists('private/users')))
    {
        $admin_account = array(array('login' => 'admin'), 'passwd' => hash('whirlpool', 'toto'));
        $admin_account = serialize($admin_account);
        mkdir('private/', 0777, true);
        file_put_contents('private/users', $admin_account);
        echo "Admin account created", PHP_EOL;
    }
}
?>
