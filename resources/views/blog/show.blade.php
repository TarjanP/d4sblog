<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My First Blog</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>

  @extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-12 pt-2">
					<a href="/blog" class="btn btn-outline-primary btn-sm">Go back</a>
					<h1 class="display-one">{{ ucfirst($post->title) }}</h1>
					Tag(s): {{ ucfirst($post->tag) }}
					<p>{!! $post->body !!}</p> 
					<hr>
					<a href="/blog/{{ $post->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
					<br><br>
					<form id="delete-frm" class="" action="" method="POST">
						@method('DELETE')
						@csrf
						<button class="btn btn-danger">Delete Post</button>
					</form>
				</div>
			</div>
		</div>
	@endsection

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>