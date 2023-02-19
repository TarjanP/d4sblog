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
					<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
						<h1 class="display-4">Create a New Post</h1>
						<p>Fill and submit this form to create a post</p>

						<hr>

						<form action="" method="POST">
							@csrf
							<div class="row">
								<div class="control-group col-4">
									<label for="title">Post Title</label>
									<input type="text" id="title" class="form-control" name="title"
										   placeholder="Enter Post Title" required>
								</div>
								<div class="control-group col-4">
									<label for="title">Post Tag</label>
									
									<div class="s2-example">
									  <p>
										<select class="js-example-basic-multiple js-states form-control" multiple="multiple">										  <option selected="selected">orange</option>
										  <option>white</option>
										  <option selected="selected">purple</option>
										</select>
									  </p>
									</div>
								</div>
								<!-- <div class="control-group col-4">
									 <label for="title">Post Tag</label>
									 <input type="text" id="tag" class="form-control" name="tag"
									  placeholder="Enter Post Tag" required>
								</div> -->
								<div class="control-group col-12 mt-2">
									<label for="body">Post Body</label>
									<textarea id="body" class="form-control" name="body" placeholder="Enter Post Body"
											  rows="" required></textarea>
								</div>
							</div>
							<div class="row mt-2">
								<div class="control-group col-12 text-center">
									<button id="btn-submit" class="btn btn-primary">
										Create Post
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>

	@endsection

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>