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

function delete_article($article)
{
    $i = 0;
    $array = file_get_contents('private/articles');
    $array = unserialize($array);
    foreach ($array as $element)
    {
        if ($element['title'] === $article)
        {
            unset($array[$i]);
            sort($array);
            $array = serialize($array);
            file_put_contents('private/articles', $array);
        }
        $i++;
    }
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
$articles[] = $article;
delete_article($_POST['old_title']);
$serialized_array = serialize($articles);
file_put_contents('private/articles', $serialized_array);
?>
