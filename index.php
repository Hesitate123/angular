<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache">
		<meta http-equiv="expires" content="0">    
		<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<meta http-equiv="description" content="This is my page">
		<title></title>
		<link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="css/angular-style.css"/>
        <link rel="stylesheet" href="css/angular-bookrack.css" />
	</head>
	<body ng-app="myApp" ng-controller="myCler">
		<header>
			<div class="header">
				<p><a href="#/bookrack">全下</a></p>
				<span>
					<a href="#/search"><i class="fa fa-search fa-lg"></i></a>
				</span>
			</div>
		</header>
		
	    <div ui-view="" class="content" ng-cloak></div>
	    
	    <footer>
	    	<nav class="nav">
				<a ui-sref="bookrack" ui-sref-active="active">展架</a>
				<a ui-sref="community" ui-sref-active="active">社区</a>
				<a ui-sref="discover" ui-sref-active="active">发现</a>
				<a ui-sref="myself" ui-sref-active="active">我</a>
			</nav>
	    </footer>
	    
		<script type="text/javascript" src="js/jquery-1.8.3.min.js" ></script>
		<script src="js/angular.min.js"></script>
		<script src="js/angular-route.js"></script>
		<script type="text/javascript" src="js/angular-ui-router.js" ></script>
		<script type="text/javascript" src="configuration/configuration.js" ></script>
		<script type="text/javascript" src="configuration/navPage.js"></script>
		<script type="text/javascript" src="layer/layer.js" ></script>
	</body>
</html>
