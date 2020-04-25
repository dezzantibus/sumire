<?php

abstract class layout_page extends layout
{

    protected $title;

    protected function renderTop()
    {

        echo '<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">
<head>
  <!-- Basic -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="keywords" content="Responsive, HTML5, Template" />
  <meta name="description" content="Responsive HTML5 Template" />

  <title>', $this->title , '</title>

  <link rel="shortcut icon" href="/img/favicon.ico">

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
<body>';

    }

    protected function renderBottom()
    {
        echo '</body></html>';
    }

}