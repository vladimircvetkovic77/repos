<html>
<head>
	<meta charset="UTF-8">
	<title>List of Topics</title>
</head>
<body>
	@foreach($topics as $topic)
	<p><strong>{{ $topic->title }} {{ $topic->created_at->diffForHumans() }}</strong></p>
		@foreach($topic->posts as $post)
		<p>{{ $post->body }} - {{ $post->user->name }}</p>
	@endforeach
	@endforeach
	
</body>
</html>