<?php

class banner
{

    public static function wide()
    {
        echo '<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-0866520425041689" data-ad-slot="2053200818" data-auto-format="rspv" data-full-width=""> <div overflow=""></div></amp-ad>';
    }

    public static function tall()
    {
        echo '<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-0866520425041689" data-ad-slot="6140070896" data-auto-format="rspv" data-full-width=""><div overflow=""></div></amp-ad>';
    }

    public static function square()
    {
        echo '<amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-0866520425041689" data-ad-slot="2020862483" data-auto-format="rspv" data-full-width=""><div overflow=""></div></amp-ad>';
    }

    public static function article()
    {
        echo
        '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>',
        '<ins class="adsbygoogle" style="display:block; text-align:center;" data-ad-layout="in-article" data-ad-format="fluid" data-ad-client="ca-pub-0866520425041689" data-ad-slot="2748169531"></ins>',
        '<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
    }

    public static function in_feed()
    {
        echo
        '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>',
        '<ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-6t+ed+2i-1n-4w" data-ad-client="ca-pub-0866520425041689" data-ad-slot="3391646292"></ins>',
        '<script>(adsbygoogle = window.adsbygoogle || []).push({});</script>';
    }

}