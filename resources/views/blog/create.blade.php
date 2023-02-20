  @extends('layouts.app')
  
	@section('content')

		<div class="container">
			<div class="row">
				<div class="col-12 pt-2">
					<a href="/blog" class="btn btn-outline-primary btn-sm">Vissza</a>
					<div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
						<h1 class="display-4">Készíts egy új posztot</h1>
						<p>Töltsd ki a mezőket, hogy kreálj egy új posztot!</p>

						<hr>

						<form action="" method="POST">
							@csrf
							<div class="row">
								<div class="control-group col-4">
									<label for="title">Poszt címe</label>
									<input type="text" id="title" class="form-control" name="title"
										   placeholder="Poszt címe" required>
								</div>
								<div class="control-group col-8">
									<label for="title">Poszt tag</label>
										<select id="tag" name="tag[]" class="form-control col-12" rows="" multiple="multiple" required>
											<option>auto</option>
											<option>motor</option>
											<option>kamion</option>
										</select>
								</div>
								<div class="control-group col-12 mt-2">
									<label for="body">Poszt szövege</label>
									<textarea id="body" class="form-control" name="body" placeholder="Poszt szövege"
											  rows="" required></textarea>
								</div>
							</div>
							<div class="row mt-2">
								<div class="control-group col-12 text-center">
									<button id="btn-submit" class="btn btn-primary">
										Mehet
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

	@endsection