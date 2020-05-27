<?php

abstract class layout_page extends layout
{

    protected $title;

    protected function renderTop()
    {

        echo '<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2L7F2TBMCZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag(\'js\', new Date());

      gtag(\'config\', \'G-2L7F2TBMCZ\');
    </script>

  <!-- Basic -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="keywords" content="Responsive, HTML5, Template" />
  <meta name="description" content="Responsive HTML5 Template" />

  <title>', $this->title , '</title>

  <link rel="shortcut icon" href="/img/favicon.ico">

  <script data-ad-client="ca-pub-0866520425041689" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.min.css" media="screen">

  <!-- Stylesheets -->
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/colors.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/owl.theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v7.0&appId=163662910477169"></script>
';

    }

    protected function renderBottom()
    {
        echo
            '<!-- JAVASCRIPTS -->',
            '<script type="text/javascript" src="/js/plugins/jquery-1.12.3.min.js"></script>',
            '<script type="text/javascript" src="/js/plugins/owl.carousel.min.js"></script>',
            '<script type="text/javascript" src="/js/plugins/cycle.all.js"></script>',
            '<script type="text/javascript" src="/js/plugins/bootstrap.min.js"></script>',
            '<script type="text/javascript" src="/js/plugins/resizesensor.min.js"></script>',
            '<script type="text/javascript" src="/js/plugins/theia-sticky-sidebar.js"></script>',
            '<script type="text/javascript" src="/js/functions/main.js"></script>',
        '</body></html>';
    }

}