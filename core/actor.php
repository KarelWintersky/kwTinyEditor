<?php
require_once 'core.db.php';

$title = $_POST['title'];
$content = $_POST['textdata'];
$is_wrap_bb_code = isset($_POST['cb_use_parsehtmlbbcode']); /* && $_POST['cb_use_parsehtmlbbcode'] == 'on'; */

$save_data = array(
    'title'     => $title,
    'content'   => $content,
    'is_bb'     => $is_wrap_bb_code,
    'ip'        => $_SERVER['REMOTE_ADDR'],
    'datetime'  => strftime('%Y-%m-%d %H:%M:%S', time())
);
// save data
$link = ConnectDB();
$query = MakeInsert($save_data, getTable());
mysql_query($query, $link);
CloseDB($link);


if ($is_wrap_bb_code) {
    $content = <<<PARSEHTML
[parsehtml]
{$content}
[/parsehtml]
PARSEHTML;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?=$title?></title>
</head>
<body>
<a href="../">Back</a>
<hr>
<textarea cols="90" rows="30">
<? echo $content?>
</textarea>
<hr>
<a href="../">Back</a><br>
<small>Hosted at <?=$_SERVER['HTTP_HOST']?> </small>
</body>
</html>
