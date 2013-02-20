<?php
require_once dirname(__FILE__) . '/html2markdown.php';

$markdown = '';
$html     = !empty($_POST) ? $_POST["html"] : file_get_contents('example.html');

if (!is_null($html)) {
    $markdown = html2markdown($html);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>html2markdown demo</title>
<style>
body{font-family:helvetica, arial, sans;}
</style>
</head>

<body>
    <div style="width:50%;float:left;">
        <h3>HTML</h3>
        <form method="post" action="">
            <textarea rows="30"  style="width:95%" name="html" id="html"><?php echo $html ?></textarea><br />
            <input type="submit" value="Convert HTML to Markdown >>" name="submit">
        </form>

    </div>

    <div style="width:50%;float:right;">
        <h3>Markdown</h3>
        <textarea rows="30" style="width:95%; font-family:monospace;" name="markdown"  id="markdown" style="font-family:monospace"><?php echo htmlspecialchars($markdown); ?></textarea><br />
    </div>

    <div style="clear:both;"></div>

    <h3>html2markdown for PHP</h3>
    <p><a href="https://github.com/nickcernis/html2markdown">html2markdown</a> by <a href="http://twitter.com/nickcernis/">@nickcernis</a> is a PHP script to convert valid HTML into Markdown. It's available from GitHub and licensed under The MIT License.</p>

</body>
</html>

