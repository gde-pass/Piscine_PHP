<?php
function check_content($file)
{
    foreach ($file as $login)
    {
        if ($login == $_POST['login'])
            return true;
        else
            return false;
    }
}

if ($_POST['submit'] === 'OK' && $_POST['login'] != NULL && $_POST['passwd'] != NULL)
{
    if (!file_exists('../htdocs/private'))
    {
        mkdir('../htdocs/private/', 0777, true);
        file_put_contents('../htdocs/private/passwd', '', FILE_APPEND);
    }

    $tab['login'] = $_POST['login'];
    $tab['passwd'] = hash('whirlpool', '$_POST[\'passwd\']');
    $file = unserialize(file_get_contents('../htdocs/private/passwd'));

    if (check_content($file) == false)
    {
        file_put_contents('../htdocs/private/passwd', serialize($tab), FILE_APPEND);
        echo "OK\n";
    }
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>
