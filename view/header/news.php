<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=big5" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>NICS 威脅情資平台</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="shortcut icon" href="/images/logo.ico" />

        <!-- jquery-->
        <script src="/node_modules/jquery/dist/jquery.min.js"></script>

        <!-- node_modules-->
        <script src="/node_modules/d3js/d3.min.js"></script>
        <link href="/node_modules/c3js/c3.min.css" rel="stylesheet" type="text/css">
        <script src="/node_modules/c3js/c3.min.js"></script>
        <script src="/node_modules/jquery-tablesort/jquery.tablesort.min.js"></script>
        <script src="https://www.gstatic.com/charts/loader.js"></script>

        <!-- semantic ui -->
        <link rel="stylesheet" type="text/css" href="/node_modules/semantic/semantic.css">
        <script src="/node_modules/semantic/semantic.js"></script>

        <!-- datatables -->
        <link rel="stylesheet" type="text/css" href="/node_modules/datatables.net-dt/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="/node_modules/datatables.net-buttons/css/buttons.dataTables.min.css">
        <script src="/node_modules/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="/node_modules/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
        <script src="/node_modules/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="/node_modules/jszip/dist/jszip.min.js"></script>

        <!-- template css-->
        <link href="/css/default.css" rel="stylesheet" type="text/css" media="all" />

        <!-- my css-->
        <link href="/css/subpage.css" rel="stylesheet"/>
        <link href="/css/app.css" rel="stylesheet"/>

        <!-- my js-->
        <script src="/js/app.js"></script>
        <script src='/js/c3chart.js'></script>
        <script src='/js/gchart.js'></script>
        <script src="/js/datatables/news.js"></script>

    </head>
    <body id="example">
        <div class="ui vertical inverted sidebar menu left" id="toc">
        <?php require 'view/sidebar.php'; ?>
        </div>
        <?php require 'view/nav.php'; ?>
        <div class="pusher">
            <div class="full height">
                <div class="toc">
                    <div class="ui vertical inverted sidebar menu left overlay visible">
                        <?php require 'view/sidebar.php'; ?>
                    </div>
                </div>
                <div class="article">
