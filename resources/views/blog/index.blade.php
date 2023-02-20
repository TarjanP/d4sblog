<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Az első blogom</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                 <div class="row">
                    <div class="col-6">
                        <h1 class="display-one">Első blogom!</h1>
                        <p>A posztra címére kattintva olvashatja a bejegyzéseket.</p>
                    </div>
					<div class="col-3">
						<p>Szűrés</p>
						<select id="tag" name="tag[]" class="form-control col-12" rows="" multiple="multiple" required>
							<option>auto</option>
							<option>motor</option>
							<option>kamion</option>
						</select>
						<script>
							$(function(){
							  // bind change event to select
							  $('#tag').on('change', function () {
								  var url = $(this).val(); // get selected value
								  if (url) { // require a URL
									  window.location = "./blog?a=" + url; // redirect
								  }
								  return false;
							  });
							});
						</script>
						<a href="./blog" class="btn btn-primary btn-sm">Szűrés törlése</a>						
					</div>
                    <div class="col-3">
                        <p>Írj egy új posztot!</p>
                        <a href="/blog/create/post" class="btn btn-primary btn-sm">Új poszt</a>
                    </div>
                </div>                
                @forelse($posts as $post)
                    <ul>
                        <li><a href="./blog/{{ $post->id }}">{{ ucfirst($post->title) }}</a></li>
						<p href="./blog/{{ $post->id }}">Tag(ek): {{ ucfirst($post->tag) }}</p>
                    </ul>
                @empty
                    <p class="text-warning">No blog Posts available</p>
                @endforelse
            </div>
        </div>
    </div>
	@endsection

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>