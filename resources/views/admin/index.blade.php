@extends('layouts.index')

@section('content')
	<div class="layui-layout layui-layout-admin">
	  <div class="layui-header">
	    <div class="layui-logo"><a style="color: #fff;" href="{{ url('admin/main') }}">layui 后台布局</a></div>
	    <!-- 头部区域（可配合layui已有的水平导航） -->
	    <!-- <ul class="layui-nav layui-layout-left">
	      <li class="layui-nav-item"><a href="">控制台</a></li>
	      <li class="layui-nav-item"><a href="">商品管理</a></li>
	      <li class="layui-nav-item"><a href="">用户</a></li>
	      <li class="layui-nav-item">
	        <a href="javascript:;">其它系统</a>
	        <dl class="layui-nav-child">
	          <dd><a href="">邮件管理</a></dd>
	          <dd><a href="">消息管理</a></dd>
	          <dd><a href="">授权管理</a></dd>
	        </dl>
	      </li>
	    </ul> -->
	    <ul class="layui-nav layui-layout-right">
	      <li class="layui-nav-item">
	        <a href="javascript:;">
	          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
	          贤心
	        </a>
	        <dl class="layui-nav-child">
	          <dd><a href="">基本资料</a></dd>
	          <dd><a href="">安全设置</a></dd>
	          <dd><a href="">退出</a></dd>
	        </dl>
	      </li>
	    </ul>
	  </div>
	  
	  <div class="layui-side layui-bg-black">
	    <div class="layui-side-scroll">
	      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
	      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
	        <li class="layui-nav-item">
	          <a class="" href="javascript:;">用户管理</a>
	          <dl class="layui-nav-child">
	            <dd><a href="javascript:;">用户管理</a></dd>
	          </dl>
	        </li>
	        <li class="layui-nav-item">
	          <a class="" href="javascript:;">商品管理</a>
	          <dl class="layui-nav-child">
	            <dd><a href="javascript:;">商品列表</a></dd>
	          </dl>
	        </li>
	      </ul>
	    </div>
	  </div>
	  	<!-- 内容主体区域 -->
	  	<div class="layui-body layui-form">
            <div class="layui-tab marg0" lay-filter="bodyTab" id="top_tabs_box">
                <ul class="layui-tab-title top_tab" id="top_tabs">
                    <li class="layui-this" lay-id=""><i class="iconfont icon-computer"></i> <cite>后台首页</cite></li>
                </ul>
                <!-- <ul class="layui-nav closeBox">
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="iconfont icon-caozuo"></i> 页面操作</a>
                        <dl class="layui-nav-child">
                            <dd><a href="javascript:;" class="refresh refreshThis"><i class="layui-icon">&#x1002;</i>
                                    刷新当前</a></dd>
                            <dd><a href="javascript:;" class="closePageOther"><i class="iconfont icon-prohibit"></i>
                                    关闭其他</a></dd>
                            <dd><a href="javascript:;" class="closePageAll"><i class="iconfont icon-guanbi"></i>
                                    关闭全部</a>
                            </dd>
                        </dl>
                    </li>
                </ul> -->
                <div class="layui-tab-content clildFrame">
                    <div class="layui-tab-item layui-show">
                        <iframe src="{{ url('/admin') }}"></iframe>
                    </div>
                </div>
            </div>
        </div>
	 <!--  <div class="layui-tab-content clildFrame">
		  <div class="layui-tab-item layui-show">
		  	<iframe src="{{ url('/admin/main') }}"></iframe>
		  </div>
	  </div> -->
	  <!-- <div class="layui-body">
	    
	    <iframe src="{{ url('/admin/main') }}"></iframe>

	    @yield('main')
	    
	  </div> -->
	  
	  <div class="layui-footer">
	    <!-- 底部固定区域 -->
	    © layui.com - 底部固定区域
	  </div>
	</div>
@endsection