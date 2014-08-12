<?
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    mail('kirk@saricden.com', 'site view', 'Someone went to saricden.com\n\nTheir user agent:\n'.$userAgent);
?>