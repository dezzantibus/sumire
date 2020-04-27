<?php

abstract class layout_admin_page extends layout
{

    protected $title;

    protected function renderTop()
    {

        echo '<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>', $this->title ,'</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">';

    }

    protected function renderBottom()
    {

            echo
            '</div>',

            // <!-- Mainly scripts -->
            '<script src="/js/jquery-2.1.1.js"></script>',
            '<script src="/js/bootstrap.min.js"></script>',
            '<script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>',
            '<script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>',

            //<!-- Flot -->
            '<script src="/js/plugins/flot/jquery.flot.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.spline.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.resize.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.pie.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.symbol.js"></script>',
            '<script src="/js/plugins/flot/jquery.flot.time.js"></script>',

/*

            <!-- Peity -->
            <script src="/js/plugins/peity/jquery.peity.min.js"></script>
            <script src="/js/demo/peity-demo.js"></script>

            <!-- Custom and plugin javascript -->
            <script src="/js/inspinia.js"></script>
            <script src="/js/plugins/pace/pace.min.js"></script>

            <!-- jQuery UI -->
            <script src="/js/plugins/jquery-ui/jquery-ui.min.js"></script>

            <!-- Jvectormap -->
            <script src="/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
            <script src="/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

            <!-- EayPIE -->
            <script src="/js/plugins/easypiechart/jquery.easypiechart.js"></script>

            <!-- Sparkline -->
            <script src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>

            <!-- Sparkline demo data  -->
            <script src="/js/demo/sparkline-demo.js"></script>',

            */

        '</body></html>';
    }

}