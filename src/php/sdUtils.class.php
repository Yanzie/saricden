<?php
class sdUtils
{
    public function sendView()
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        return @mail('kirk@saricden.com', 'site view', 'Someone went to saricden.com\n\nTheir user agent:\n'.$userAgent);
    }
}
?>