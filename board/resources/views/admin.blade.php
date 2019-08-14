<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Lab</title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery.mobile-1.3.2.min.js"></script>
	<link rel="stylesheet" href="scripts/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" href="styles.css" />
</head>

<body>
<div data-role="page" data-theme="c">

<div data-role="header">
	<h1>公告板</h1> 點擊以編輯留言
</div>
<a href="/add">新增留言</a>
<a href="/news">登出管理</a>
<div data-role="content">
	<ul data-role="listview" data-filter="true">
	@foreach ($news as $emp)
		<li>
        <a href="/edit/{{$emp->id}}" data-ajax="false">
			<h4>{{ $emp->topic }}</h4>
			<h4>{{ $emp->content }}</h4>
		</a>
		</li>
	@endforeach
	</ul>
</div>

</div>
</body>

</html>

