
  @extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-12 pt-2">
					<a href="/blog" class="btn btn-outline-primary btn-sm">Vissza</a>
					<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
						<h1 class="display-4">Poszt módosítása</h1>
						<p>Módosítsd a posztot</p>
						<hr>
						<form action="" method="POST">
							@csrf
							@method('PUT')
							<div class="row">
								<div class="control-group col-12">
									<label for="title">Poszt címe</label>
									<input type="text" id="title" class="form-control" name="title"
										   placeholder="Poszt címe" value="{{ $post->title }}" required>
								</div>
								<div class="control-group col-4">
									<label for="title">Tag(ek)</label>
									<input type="text" id="tag" class="form-control" name="tag"
										   placeholder="Enter Post Tag" value="{{ $post->tag }}" required>
								</div>
								<div class="control-group col-12 mt-2">
									<label for="body">Poszt szövege</label>
									<textarea id="body" class="form-control" name="body" placeholder="Poszt szövege"
											  rows="5" required>{{ $post->body }}</textarea>
								</div>
							</div>
							<div class="row mt-2">
								<div class="control-group col-12 text-center">
									<button id="btn-submit" class="btn btn-primary">
										Módosítás
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	@endsection
