<!-- @extends('admin.index')

@section('main') -->
	<link rel="stylesheet" type="text/css" href="{{ asset('static/css/users.css') }}">
	<div class="layui-tab layui-tab-card" lay-allowClose="true">
		<ul class="layui-tab-title">
			<li class="layui-tab-item layui-this"><i class="layui-icon layui-icon-table"></i>用户管理</li>
		</ul>
	</div>
	<div class="users-container">	
		<blockquote class="layui-elem-quote">
			<div class="layui-inline">
				<div class="layui-input-inline layui-form">
					<input class="layui-input" type="text" name="phone" placeholder="手机" autocomplete="off">
				</div>
				<div class="layui-input-inline layui-form">
					<input class="layui-input" type="text" name="email" placeholder="邮箱" autocomplete="off">
				</div>
				<div class="layui-input-inline layui-form">
					<input class="layui-input" type="text" name="name" placeholder="姓名" autocomplete="off">
				</div>
				<div class="layui-input-inline layui-form">
					<input class="layui-input" id="created" type="text" name="createdAt" placeholder="创建时间" readonly="readonly">
				</div>
				<a class="layui-btn">查询</a>
			</div>
		</blockquote>
		<div class="table-wrap">
			<table class="layui-table" lay-even>
			  <colgroup>
			    <col width="10%">
			    <col width="20%">
			    <col width="20%">
			    <col width="50%">
			  </colgroup>
			  <thead>
			    <tr>
			      <th>id编号</th>
			      <th>昵称</th>
			      <th>加入时间</th>
			      <th>签名</th>
			    </tr> 
			  </thead>
			  <tbody id="users-table-container">
			  </tbody>
			</table>
		</div>
	</div>
	<div class="users-page" id="page"></div>
	<script type="text/javascript">
		var data = [
			{'id': 1,'name': '陈炬', 'date': '2018-05-31', 'signature': '人生就像是一场修行'},
		]
		for(var i = 0; i < 30; i++) {
			data.push({
				'id': i + 2,
				'name': '陈炬' + (i + 1),
				'date': new Date().getFullYear() + '-' + '0' + (new Date().getMonth() + 1) + '-' + new Date().getDate(),
				'signature': '人生就像是一场修行'
			})
		}
		layui.use(['laydate', 'laypage', 'jquery'], function(){
		 	var laydate = layui.laydate;
			var laypage = layui.laypage;
		  	var $ = layui.jquery;
		  	
		  	var limit = 20;
		  	var offset = 0;

		  	//初次渲染
		  	renderTable(data, limit, offset)

			//执行一个laydate实例
			laydate.render({
				elem: '#created' //指定元素
				,range: true
			});

			//分页
			laypage.render({
				elem: 'page',
				count: data.length,
				limit: limit,
				layout: ['count', 'prev', 'page', 'next', 'skip'],
				jump: function(obj, first) {
					offset = (obj.curr - 1) * limit
					if(!first) {
						renderTable(data, limit, offset)
					}
				}
			})

		  	/**
		  	 * 渲染表格
		  	 * @author ChenJu 2018-05-31
		  	 * @param  {[array]} data   [数据]
		  	 * @param  {[number]} limit  [一次渲染多少]
		  	 * @param  {[number]} offset [从那条数据开始渲染]
		  	 */
		  	function renderTable(data, limit, offset) {
		  		var tmplateHtml = ''
	  		    for(var i = offset; i < (offset + limit); i++) {
	  		    	if(data[i]) {
		    		    tmplateHtml += 
		    		    '<tr>'+
		    		    	'<td>' + data[i]['id'] + '</td>'+
		    				'<td>' + data[i]['name'] + '</td>'+
		    				'<td>' + data[i]['date'] + '</td>'+
		    				'<td>' + data[i]['signature'] + '</td>'+
		    		    '</tr>';
	  		    	}else{
	  		    		break;
	  		    	}
	  		    }
	  		   	$('#users-table-container').html(tmplateHtml) 
		  	}
		});
	</script>
<!-- @endsection -->