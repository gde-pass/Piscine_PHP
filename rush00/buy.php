<?php
session_start();
$articles = file_get_contents('private/articles');
$articles = unserialize($articles);
if (isset($_SESSION['list']))
{
    $list = $_SESSION['list'];
}
print_r($articles);
foreach($list as $key => $elem)
{
    $i = 0;
    foreach($articles as $keye => $eleme)
    {
        if($eleme['title'] === $key)
        {
            echo($elem."<br />");
            echo($articles[$i]['quantity']."<br />");
            $articles[$i]['quantity'] = ($articles[$i]['quantity'] - $elem);
        }
        $i++;
    }
}
print_r($articles);
unset($_SESSION['cart']);
unset($_SESSION['artname']);
$articles = serialize($articles);
file_put_contents('private/articles', $articles);
header("Location: index.php");
?>
