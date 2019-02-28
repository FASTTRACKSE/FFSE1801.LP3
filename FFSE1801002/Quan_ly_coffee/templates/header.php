<!doctype html>
<html class="no-js" lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bug-coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="../../assets/front_end/img/bug-3x.png">
    <link rel="stylesheet" href="../../assets/back_end/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/back_end/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/back_end/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/back_end/css/metisMenu.css">
    <link rel="stylesheet" href="../../assets/back_end/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/back_end/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="../../assets/back_end/css/typography.css">
    <link rel="stylesheet" href="../../assets/back_end/css/default-css.css">
    <link rel="stylesheet" href="../../assets/back_end/css/styles.css?v.0.0.2">
    <link rel="stylesheet" href="../../assets/back_end/css/styles2.css?v.0.0.2">
    <link rel="stylesheet" href="../../assets/back_end/css/responsive.css">
    <!-- modernizr css -->
    <script src="../../assets/back_end/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class='body-bg' onLoad="init()" >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div id="loading" style="position:absolute; width:99.9999999999%; text-align:center; top:200px;">
            <!-- Đang nạp trang. Vui lòng đợi giây lát!<br /> -->
            <img src="../../assets/front_end/img/Cup_cafe_so_kute.gif" height='200px' width='200px'>       
        </div>

        <script>
            var ld = (document.all);
            var ns4 = document.layers;
            var ns6 = document.getElementById&&!document.all;
            var ie4 = document.all;
            if(ns4){
                ld=document.loading;
            }else{
                if(ns6){
                    ld = document.getElementById("loading").style;
                }else{ 
                    if(ie4){
                        ld = document.all.loading.style;
                    }
                }
            }
            function init(){
                if(ns4){
                    ld.visibility="hidden";
                }else{
                    if(ns6 || ie4){
                        ld.display="none";
                    }
                }
            }
        </script>
    </div>
    <!-- preloader area end -->
    <!-- main wrapper start -->
    <div class="horizontal-main-wrapper">