<html>
<head>
	<meta charset="UTF-8">
	<title>List of Topics</title>
</head>
<body>
	@foreach($topics as $topic)
	<p>{{ $topic->title }} <strong>{{ $topic->created_at->diffForHumans() }}</strong></p>
	@endforeach
</body>
</html>