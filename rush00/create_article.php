<?PHP
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected')
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

if ($_POST['title'] != NULL AND $_POST['img'] != NULL AND $_POST['price'] != NULL AND $_POST['description'] != NULL)
{
    if (img_checker($_POST['img']) == TRUE)
    {
        $articles = file_get_contents('private/articles');
        $articles = unserialize($articles);
        $articles[] = array('title' => $_POST['title'], 'description' => $_POST['description'], 'price' => $_POST['price'], 'img' => $_POST['img']);
        $articles = serialize($articles);
        file_put_contents('private/articles', $articles);
        header('Location: index.php');
    }
    else
        echo "Merci de bien vouloir insérer le lien d'une image valide", PHP_EOL;
}

?>
