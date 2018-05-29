<?php
function already_registered()
{
    $array = file_get_contents('../htdocs/private/passwd');
    $unserialized_array = unserialize($array);
    foreach ($unserialized_array as $element)
    {
        if ($element['login'] === $_POST['login'])
            return TRUE;
    }
    return FALSE;
}

function add_user($hashed_pw)
{
    $array = file_get_contents('../htdocs/private/passwd');
    $unserialized_array = unserialize($array);
    $unserialized_array[] = array('login' => $_POST['login'], 'passwd' => $hashed_pw);
    $serialized_array = serialize($unserialized_array);
    file_put_contents('../htdocs/private/passwd', $serialized_array);
    echo "OK", PHP_EOL;
}

if ($_POST['submit'] === 'OK' && $_POST['login'] != NULL && $_POST['passwd'] != NULL)
{
    $hashed_pw = hash('whirlpool', $_POST['passwd']);
    if (!(file_exists('../htdocs/private')))
    {
        mkdir('../htdocs/private/', 0777, true);
        $array = array(array('login' => $_POST['login'], 'passwd' => $hashed_pw));
        $serialized_array = serialize($array);
        file_put_contents('../htdocs/private/passwd', $serialized_array);
        echo "OK", PHP_EOL;
    }
    else
    {
        if (already_registered() == TRUE)
            echo "ERROR\n";
        else
            add_user($hashed_pw);
    }
}
else
    echo "ERROR\n";
?>
