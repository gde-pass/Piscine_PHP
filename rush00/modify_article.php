<?PHP
// if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected' OR $_SESSION['admin'] == 'no')
// {
//    header('HTTP/1.0 401 Unauthorized');
//    header('Location: index.php');
// }

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
    $box = ' ';
    foreach ($_POST as $key => $value)
    {
        if ($value == 'on')
        {
            $box = $box . $key . " ";
        }
    }
    return ($box);
}

$articles = file_get_contents('private/articles');
$articles = unserialize($articles);
$checked_box = find_checked_box();
$checked_box = trim($checked_box);
$checked_box = preg_split("/[\s]+/", $checked_box);

foreach ($articles as $value)
{
    if ($value['title'] == $_POST['old_title'])
    {
        $article = $value;
        break ;
    }
}

$article['title'] = $_POST['new_title'];
$article['img'] = $_POST['img'];
$article['description'] = $_POST['description'];
$article['price'] = $_POST['price'];
$article['quantity'] = $_POST['quantity'];

?>
