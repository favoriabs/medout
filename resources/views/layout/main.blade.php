<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CWCCI MEDICAL OUTREACH 2017</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Canonical SEO -->
    <link rel="canonical" href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro"/>

    <!--  Social tags      -->
    <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap dashboard, bootstrap, css3 dashboard, bootstrap admin, light bootstrap dashboard, frontend, responsive bootstrap dashboard">

    <meta name="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta itemprop="description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">

    <meta itemprop="image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <!-- Twitter Card data -->

    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Light Bootstrap Dashboard PRO by Creative Tim">

    <meta name="twitter:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg">
    <meta name="twitter:data1" content="Light Bootstrap Dashboard PRO by Creative Tim">
    <meta name="twitter:label1" content="Product Type">
    <meta name="twitter:data2" content="$29">
    <meta name="twitter:label2" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="Light Bootstrap Dashboard PRO by Creative Tim" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/dashboard.html" />
    <meta property="og:image" content="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_thumbnail.jpg"/>
    <meta property="og:description" content="Forget about boring dashboards, get an admin template designed to be simple and beautiful." />
    <meta property="og:site_name" content="Creative Tim" />

    <!-- Bootstrap core CSS     -->
    <link href="{{asset('theme/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!--  Light Bootstrap Dashboard core CSS    -->
		<link href="{{asset('theme/assets/css/light-bootstrap-dashboard.css')}}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- <link href="../assets/css/demo.css" rel="stylesheet" /> -->


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="{{asset('icon/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    @include('layout.sidebar')

    <div class="main-panel">
		@include('layout.navbar')

    @yield('content')


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; 2017 <a target="_blank" href="http://www.covenantwordchristiancentre.org">CWCCI</a>
                </p>
            </div>
        </footer>

    </div>
</div>

</body>
    <!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
		<script src="{{asset('theme/assets/js/jquery.min.js')}}" type="text/javascript" />
		<script src="{{asset('theme/assets/js/jquery-ui.min.js')}}" type="text/javascript" />
		<script src="{{asset('theme/assets/js/bootstrap.min.js')}}" type="text/javascript" />


	<!--  Forms Validations Plugin -->
	<script src="{{asset('theme/assets/js/jquery.validate.min.js')}}" type="text/javascript" />

	<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
	<script src="{{asset('theme/assets/js/moment.min.js')}}" type="text/javascript" />

    <!--  Date Time Picker Plugin is included in this js file -->
		<script src="{{asset('theme/assets/js/bootstrap-datetimepicker.js')}}" type="text/javascript" />

    <!--  Select Picker Plugin -->
		<script src="{{asset('theme/assets/js/bootstrap-selectpicker.js')}}" type="text/javascript" />

	<!--  Checkbox, Radio, Switch and Tags Input Plugins -->
	<script src="{{asset('theme/assets/js/bootstrap-checkbox-radio-switch-tags.js')}}" />

	<!--  Charts Plugin -->
	<script src="{{asset('theme/assets/js/chartist.min.js')}}"/>

    <!--  Notifications Plugin    -->
		<script src="{{asset('theme/assets/js/bootstrap-notify.js')}}"/>

    <!-- Sweet Alert 2 plugin -->
		<script src="{{asset('theme/assets/js/sweetalert2.js')}}" />

    <!-- Vector Map plugin -->
	<script src="{{asset('theme/assets/js/jquery-jvectormap.js')}}"/>


	<!-- Wizard Plugin    -->
	<script src="{{asset('theme/assets/js/jquery.bootstrap.wizard.min.js')}}"></script>

    <!--  Bootstrap Table Plugin    -->
		<script src="{{asset('theme/assets/js/bootstrap-table.js')}}"></script>

	<!--  Plugin for DataTables.net  -->
	<script src="{{asset('theme/assets/js/jquery.datatables.js')}}"></script>


    <!--  Full Calendar Plugin    -->
		<script src="{{asset('theme/assets/js/fullcalendar.min.js')}}"></script>

    <!-- Light Bootstrap Dashboard Core javascript and methods -->
		<script src="{{asset('theme/assets/js/light-bootstrap-dashboard.js')}}"></script>

	<!--   Sharrre Library    -->
	<script src="{{asset('theme/assets/js/jquery.sharrre.js')}}"></script>

	<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
	<script src="{{asset('theme/assets/js/bootstrap.min.js')}}" type="text/javascript" />
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initDashboardPageCharts();
        	demo.initVectorMap();

        	$.notify({
            	icon: 'pe-7s-bell',
            	message: "<b>Light Bootstrap Dashboard PRO</b> - forget about boring dashboards."

            },{
                type: 'warning',
                timer: 4000
            });

    	});
	</script>

</html>
