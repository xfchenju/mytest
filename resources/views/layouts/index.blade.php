<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mytest</title>
	<!-- 引入layui的css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('static/plugins/layui-v2.3.0/css/layui.css') }}">
</head>
<body class="layui-layout-body">

	@yield('content')
	
<!-- 引入layui的js -->
<script type="text/javascript" src="{{ asset('static/plugins/layui-v2.3.0/layui.js') }}"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
	
</html>