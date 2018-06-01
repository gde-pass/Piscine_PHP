<?php
function create_admin_account()
{
    if (!(file_exists('private/users')))
    {
        $pass = hash('whirlpool', 'toto');
        $admin_account = array(array('login' => 'admin', 'passwd' => $pass));
        $admin_account = serialize($admin_account);
        mkdir('private/', 0777, true);
        file_put_contents('private/users', $admin_account);
    }
}
?>
