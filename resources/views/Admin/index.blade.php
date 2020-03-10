<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
@include('Admin.adminPartials._aside')

<section id="contents">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <i class="fa fa-align-right"></i>
                </button>
                <a class="navbar-brand" href="#">Admins<span class="main-color">Dashboard</span></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
                            <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
                    <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
                    <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >Create Product</button>

{{--create product modal--}}

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CREATE PRODUCT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <label>Product Category</label>
                        <select class="browser-default custom-select">
                            <option selected>Shoes</option>
                            <option value="1">Clothes</option>
                            <option value="2">Electronics</option>
                            <option value="3">Utensils</option>
                        </select>
                        <label>Photo Location</label>
                        <select class="browser-default custom-select">
                            <option selected>Main Slider</option>
                            <option value="1">Deal of the Week</option>
                            <option value="2">New Arrivals</option>
                            <option value="3">Top Selling</option>
                            <option value="3">Best Reviewed</option>
                            <option value="3">Home & Kitchen Appliances</option>

                        </select>
                        <br>
                        <br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Product Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Product Size</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Size">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Product Quantity</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Quantity">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Product Price</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Price">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Choose Vendor</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option value="1">Admin</option>
                                <option value="2">Vendor</option>
                            </select>
                        </div>
                        <input type="file">
                        <br>
                        <input type="file">
                        <br>
                        <input type="file">
                        <br>
                        <input type="file">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        <h2>Welcome to Admin Dashboard</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="statistics">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-envelope fa-fw bg-primary"></i>
                        <div class="info">
                            <h3>1,245</h3> <span>Emails</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-file fa-fw danger"></i>
                        <div class="info">
                            <h3>34</h3> <span>Projects</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box">
                        <i class="fa fa-users fa-fw success"></i>
                        <div class="info">
                            <h3>5,245</h3> <span>Users</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<style>
    * {
        padding: 0;
        margin: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        font-family: 'Droid Sans', sans-serif;
        outline: none;
    }
    ::-webkit-scrollbar {
        background: transparent;
        width: 5px;
        height: 5px;
    }
    ::-webkit-scrollbar-thumb {
        background-color: #888;
    }
    ::-webkit-scrollbar-thumb:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }
    body {background-color: #2a2b3d}
    #contents {
        position: relative;
        transition: .3s;
        margin-left: 290px;
        background-color: #2a2b3d;
    }
    .margin {
        margin-left: 0 !important;
    }
    /* Start side navigation bar  */

    .side-nav {
        float: left;
        height: 100%;
        width: 290px;
        background-color: #252636;
        color: #CCC;
        -webkit-transform: translateX(0);
        -moz-transform: translateX(0);
        transform: translateX(0);
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        transition: .3s;
        position: fixed;
        top: 0;
        left: 0;
        overflow: auto;
        z-index: 9999999
    }
    .side-nav .close-aside {
        position: absolute;
        top: 7px;
        right: 7px;
        cursor: pointer;
        color: #EEE;
    }
    .side-nav .heading {
        background-color: #252636;
        padding: 15px 15px 15px 30px;
        overflow: hidden;
        border-bottom: 1px solid #2a2b3c
    }
    .side-nav .heading > img {
        border-radius: 50%;
        float: left;
        width: 28%;
    }
    .side-nav .info {
        float: left;
        width: 69%;
        margin-left: 3%;
    }
    .side-nav .heading .info > h3 {margin: 0 0 5px}
    .side-nav .heading .info > h3 > a {
        color: #EEE;
        font-weight: 100;
        margin-top: 4px;
        display: block;
        text-decoration: none;
        font-size: 18px;
    }
    .side-nav .heading .info > h3 > a:hover {
        color: #FFF;
    }
    .side-nav .heading .info > p {
        color: #BBB;
        font-size: 13px;
    }
    /* End heading */
    /* Start search */
    .side-nav .search {
        text-align: center;
        padding: 15px 30px;
        margin: 15px 0;
        position: relative;
    }
    .side-nav .search > input {
        width: 100%;
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #23262d;
        padding: 7px 0 7px;
        color: #DDD
    }
    .side-nav .search > input ~ i {
        position: absolute;
        top: 22px;
        right: 40px;
        display: block;
        color: #2b2f3a;
        font-size: 19px;
    }
    /* End search */

    .side-nav .categories > li {
        padding: 17px 40px 17px 30px;
        overflow: hidden;
        border-bottom: 1px solid rgba(255, 255, 255, 0.02);
        cursor: pointer;
    }
    .side-nav .categories > li > a {
        color: #AAA;
        text-decoration: none;
    }
    /* Start num: there are three options primary, danger and success like Bootstrap */
    .side-nav .categories > li > a > .num {
        line-height: 0;
        border-radius: 3px;
        font-size: 14px;
        color: #FFF;
        padding: 0px 5px
    }
    .dang {background-color: #f35959}
    .prim {background-color: #0275d8}
    .succ {background-color: #5cb85c}
    /* End num */
    .side-nav .categories > li > a:hover {
        color: #FFF
    }
    .side-nav .categories > li > i {
        font-size: 18px;
        margin-right: 5px
    }
    .side-nav .categories > li > a:after {
        content: "\f053";
        font-family: fontAwesome;
        font-size: 11px;
        line-height: 1.8;
        float: right;
        color: #AAA;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
    }
    .side-nav .categories .opend > a:after {
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }
    /* End categories */
    /* Start dropdown menu */
    .side-nav .categories .side-nav-dropdown {
        padding-top: 10px;
        padding-left: 30px;
        list-style: none;
        display: none;
    }
    .side-nav .categories .side-nav-dropdown > li > a {
        color: #AAA;
        text-decoration: none;
        padding: 7px 0;
        display: block;
    }
    .side-nav .categories p {
        margin-left: 30px;
        color: #535465;
        margin-top: 10px;
    }

    /* End dropdown menu */

    .show-side-nav {
        -webkit-transform: translateX(-290px);
        -moz-transform: translateX(-290px);
        transform: translateX(-290px);
    }


    /* Start media query */
    @media (max-width: 767px) {
        .side-nav .categories > li {
            padding-top: 12px;
            padding-bottom: 12px;
        }
        .side-nav .search {
            padding: 10px 0 10px 30px
        }
    }

    /* End side navigation bar  */
    /* Start welcome */

    .welcome {
        color: #CCC;
    }
    .welcome .content {
        background-color: #313348;
        padding: 15px;
        margin-top: 25px;
    }
    .welcome h2 {
        font-family: Calibri;
        font-weight: 100;
        margin-top: 0
    }
    .welcome p {
        color: #999;
    }


    /* Start statistics */
    .statistics {
        margin-top: 25px;
        color: #CCC;
    }
    .statistics .box {
        background-color: #313348;
        padding: 15px;
        overflow: hidden;
    }
    .statistics .box > i {
        float: left;
        color: #FFF;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        line-height: 60px;
        font-size: 22px;
    }
    .statistics .box .info {
        float: left;
        width: auto;
        margin-left: 10px;
    }
    .statistics .box .info h3 {
        margin: 5px 0 5px;
        display: inline-block;
    }
    .statistics .box .info p {color:#BBB}

    /* End statistics */
    /* Start charts */
    .charts {
        margin-top: 25px;
        color: #BBB
    }
    .charts .chart-container {
        background-color: #313348;
        padding: 15px;
    }
    .charts .chart-container h3 {
        margin: 0 0 10px;
        font-size: 17px;
    }

    /* Start users */

    .admins {
        margin-top: 25px;
    }
    .admins .box {

    }
    .admins .box > h3 {
        color: #ccc;
        font-family: Calibri;
        font-weight: 300;
        margin-top: 0;
    }
    .admins .box .admin {
        margin-bottom: 20px;
        overflow: hidden;
        background-color: #313348;
        padding: 10px;
    }
    .admins .box .admin .img {
        width: 20%;
        margin-right: 5%;
        float: left;
    }
    .admins .box .admin .img img {
        border-radius: 50%;
    }
    .admins .box .info {
        width: 75%;
        color: #EEE;
        float: left;
    }
    .admins .box .info h3 {font-size: 19px}
    .admins .box .info p {color: #BBB}

    /* End users */
    /* Start statis */

    .statis {
        color: #EEE;
        margin-top: 15px;
    }
    .statis .box {
        position: relative;
        padding: 15px;
        overflow: hidden;
        border-radius: 3px;
        margin-bottom: 25px;
    }
    .statis .box h3:after {
        content: "";
        height: 2px;
        width: 70%;
        margin: auto;
        background-color: rgba(255, 255, 255, 0.12);
        display: block;
        margin-top: 10px;
    }
    .statis .box i {
        position: absolute;
        height: 70px;
        width: 70px;
        font-size: 22px;
        padding: 15px;
        top: -25px;
        left: -25px;
        background-color: rgba(255, 255, 255, 0.15);
        line-height: 60px;
        text-align: right;
        border-radius: 50%;
    }

    /*chart*/
    .chrt3 {
        padding-bottom: 50px;
    }
    .chrt3 .chart-container {
        height: 350px;
        padding: 15px;
        margin-top: 25px;
    }
    .chrt3 .box {
        padding: 15px;
    }













    .main-color {
        color: #ffc107
    }
    .warning {background-color: #f0ad4e}
    .danger {background-color: #d9534f}
    .success {background-color: #5cb85c}
    .inf {background-color: #5bc0de}


    /* كمية الإمبورتات دى علشان البوتستراب تبطل غتاته وتسيب العناصر اللى متعدله فى حالها طبعا الكلام ده فى كود بن بس */

    /* Start bootstrap */
    .navbar-right .dropdown-menu {
        right: auto !important;
        left: 0 !important;
    }
    .navbar-default {
        background-color: #6f6486 !important;
        border: none !important;
        border-radius: 0 !important;
        margin: 0 !important
    }
    .navbar-default .navbar-nav>li>a {
        color: #EEE !important;
        line-height: 55px !important;
        padding: 0 10px !important;
    }
    .navbar-default .navbar-brand {color:#FFF !important}
    .navbar-default .navbar-nav>li>a:focus,
    .navbar-default .navbar-nav>li>a:hover {color: #EEE !important}

    .navbar-default .navbar-nav>.open>a,
    .navbar-default .navbar-nav>.open>a:focus,
    .navbar-default .navbar-nav>.open>a:hover {background-color: transparent !important; color: #FFF !important}

    .navbar-default .navbar-brand {line-height: 55px !important; padding: 0 !important}
    .navbar-default .navbar-brand:focus,
    .navbar-default .navbar-brand:hover {color: #FFF !important}
    .navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {margin: 0 !important}
    @media (max-width: 767px) {
        .navbar>.container-fluid .navbar-brand {
            margin-left: 15px !important;
        }
        .navbar-default .navbar-nav>li>a {
            padding-left: 0 !important;
        }
        .navbar-nav {
            margin: 0 !important;
        }
        .navbar-default .navbar-collapse,
        .navbar-default .navbar-form {
            border: none !important;
        }

    }

    .navbar-default .navbar-nav>li>a {
        float: left !important;
    }
    .navbar-default .navbar-nav>li>a>span:not(.caret) {
        background-color: #e74c3c !important;
        border-radius: 50% !important;
        height: 25px !important;
        width: 25px !important;
        padding: 2px !important;
        font-size: 11px !important;
        position: relative !important;
        top: -10px !important;
        right: 5px !important
    }
    .dropdown-menu>li>a {
        padding-top: 5px !important;
        padding-right: 5px !important;
    }
    .navbar-default .navbar-nav>li>a>i {
        font-size: 18px !important;
    }




    /* Start media query */

    @media (max-width: 767px) {
        #contents {
            margin: 0 !important
        }
        .statistics .box {
            margin-bottom: 25px !important;
        }
        .navbar-default .navbar-nav .open .dropdown-menu>li>a {
            color: #CCC !important
        }
        .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
            color: #FFF !important
        }
        .navbar-default .navbar-toggle{
            border:none !important;
            color: #EEE !important;
            font-size: 18px !important;
        }
        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {background-color: transparent !important}
    }
    .btn_upload {
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        position: relative;
        color: #fff;
        background-color: #2a72d4;
        border: 1px solid #166b8a;
        padding: 5px 10px;
    }

    .btn_upload:hover,
    .btn_upload:focus {
        background-color: #7ca9e6;
    }

    .yes {
        display: flex;
        align-items: flex-start;
        margin-top: 10px !important;
    }

    .btn_upload input {
        cursor: pointer;
        height: 100%;
        position: absolute;
        filter: alpha(opacity=1);
        -moz-opacity: 0;
        opacity: 0;
    }

    .it {
        height: 100px;
        margin-left: 10px;
    }

    .btn-rmv1,
    .btn-rmv2,
    .btn-rmv3,
    .btn-rmv4,
    .btn-rmv5 {
        display: none;
    }

    .rmv {
        cursor: pointer;
        color: #fff;
        border-radius: 30px;
        border: 1px solid #fff;
        display: inline-block;
        background: rgba(255, 0, 0, 1);
        margin: -5px -10px;
    }

    .rmv:hover {
        background: rgba(255, 0, 0, 0.5);
    }


</style>
<script>
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
    });
    /*global $, console*/
    /*
      By Mostafa Omar
        https://www.facebook.com/MostafaOmarIbrahiem
    */
    $(function () {

        'use strict';

        (function () {

            var aside = $('.side-nav'),

                showAsideBtn = $('.show-side-btn'),

                contents = $('#contents');

            showAsideBtn.on("click", function () {

                $("#" + $(this).data('show')).toggleClass('show-side-nav');

                contents.toggleClass('margin');

            });

            if ($(window).width() <= 767) {

                aside.addClass('show-side-nav');

            }
            $(window).on('resize', function () {

                if ($(window).width() > 767) {

                    aside.removeClass('show-side-nav');

                }

            });

            // dropdown menu in the side nav
            var slideNavDropdown = $('.side-nav-dropdown');

            $('.side-nav .categories li').on('click', function () {

                $(this).toggleClass('opend').siblings().removeClass('opend');

                if ($(this).hasClass('opend')) {

                    $(this).find('.side-nav-dropdown').slideToggle('fast');

                    $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

                } else {

                    $(this).find('.side-nav-dropdown').slideUp('fast');

                }

            });

            $('.side-nav .close-aside').on('click', function () {

                $('#' + $(this).data('close')).addClass('show-side-nav');

                contents.removeClass('margin');

            });

        }());

        // Start chart

        var chart = document.getElementById('myChart');
        Chart.defaults.global.animation.duration = 2000; // Animation duration
        Chart.defaults.global.title.display = false; // Remove title
        Chart.defaults.global.title.text = "Chart"; // Title
        Chart.defaults.global.title.position = 'bottom'; // Title position
        Chart.defaults.global.defaultFontColor = '#999'; // Font color
        Chart.defaults.global.defaultFontSize = 10; // Font size for every label

        // Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
        Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
        Chart.defaults.global.legend.labels.padding = 0;
        Chart.defaults.scale.ticks.beginAtZero = true;
        Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
        Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';

        Chart.defaults.global.legend.display = false;

        var myChart = new Chart(chart, {
            type: 'bar',
            data: {
                labels: ["January", "February", "March", "April", "May", 'Jul'],
                datasets: [{
                    label: "Lost",
                    fill: false,
                    lineTension: 0,
                    data: [45, 25, 40, 20, 45, 20],
                    pointBorderColor: "#4bc0c0",
                    borderColor: '#4bc0c0',
                    borderWidth: 2,
                    showLine: true,
                }, {
                    label: "Succes",
                    fill: false,
                    lineTension: 0,
                    startAngle: 2,
                    data: [20, 40, 20, 45, 25, 60],
                    // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                    backgroundColor: "transparent",
                    pointBorderColor: "#ff6384",
                    borderColor: '#ff6384',
                    borderWidth: 2,
                    showLine: true,
                }]
            },
        });
        //  Chart ( 2 )


        var Chart2 = document.getElementById('myChart2').getContext('2d');
        var chart = new Chart(Chart2, {
            type: 'line',
            data: {
                labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
                datasets: [{
                    label: "My First dataset",
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 79, 116)',
                    borderWidth: 2,
                    pointBorderColor: false,
                    data: [5, 10, 5, 8, 20, 30, 20, 10],
                    fill: false,
                    lineTension: .4,
                }, {
                    label: "Month",
                    fill: false,
                    lineTension: .4,
                    startAngle: 2,
                    data: [20, 14, 20, 25, 10, 15, 25, 10],
                    // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                    backgroundColor: "transparent",
                    pointBorderColor: "#4bc0c0",
                    borderColor: '#4bc0c0',
                    borderWidth: 2,
                    showLine: true,
                }, {
                    label: "Month",
                    fill: false,
                    lineTension: .4,
                    startAngle: 2,
                    data: [40, 20, 5, 10, 30, 15, 15, 10],
                    // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
                    backgroundColor: "transparent",
                    pointBorderColor: "#ffcd56",
                    borderColor: '#ffcd56',
                    borderWidth: 2,
                    showLine: true,
                }]
            },

            // Configuration options
            options: {
                title: {
                    display: false
                }
            }
        });


        console.log(Chart.defaults.global);

        var chart = document.getElementById('chart3');
        var myChart = new Chart(chart, {
            type: 'line',
            data: {
                labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
                datasets: [{
                    label: "Lost",
                    fill: false,
                    lineTension: .5,
                    pointBorderColor: "transparent",
                    pointColor: "white",
                    borderColor: '#d9534f',
                    borderWidth: 0,
                    showLine: true,
                    data: [0, 40, 10, 30, 10, 20, 15, 20],
                    pointBackgroundColor: 'transparent',
                },{
                    label: "Lost",
                    fill: false,
                    lineTension: .5,
                    pointColor: "white",
                    borderColor: '#5cb85c',
                    borderWidth: 0,
                    showLine: true,
                    data: [40, 0, 20, 10, 25, 15, 30, 0],
                    pointBackgroundColor: 'transparent',
                },
                    {
                        label: "Lost",
                        fill: false,
                        lineTension: .5,
                        pointColor: "white",
                        borderColor: '#f0ad4e',
                        borderWidth: 0,
                        showLine: true,
                        data: [10, 40, 20, 5, 35, 15, 35, 0],
                        pointBackgroundColor: 'transparent',
                    },
                    {
                        label: "Lost",
                        fill: false,
                        lineTension: .5,
                        pointColor: "white",
                        borderColor: '#337ab7',
                        borderWidth: 0,
                        showLine: true,
                        data: [0, 30, 10, 25, 10, 40, 20, 0],
                        pointBackgroundColor: 'transparent',
                    }]
            },
        });

    });
</script>
<script src='http://code.jquery.com/jquery-latest.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
</body>
</html>
