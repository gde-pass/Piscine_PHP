<?PHP
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected' OR $_SESSION['admin'] == 'no')
{
   header('HTTP/1.0 401 Unauthorized');
   header('Location: index.php');
}

function img_checker($img)
{
    $header = get_headers($img, 1);

    if (preg_match("#OK#i", $header[0]) AND preg_match("#image#i", $header['Content-Type']))
        return TRUE;
    else
        return FALSE;
}

function find_checked_box()
{
    $box = '0';
    foreach ($_POST as $key => $value)
    {
        if ($value == 'on')
        {
            $box = $box . $key . "0";
        }
    }
    return ($box);
}



?>
