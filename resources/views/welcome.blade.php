<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My First Blog</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
		@extends('layouts.app')
		@section('content')
			<div class="container">
				<div class="row">
					<div class="col-12 text-center pt-5">
						<h1 class="display-one mt-5">D4S Test Blog</h1>
						<p>This awesome blog has many articles, click the button below to see them</p>
						<br>
						<a href="/blog" class="btn btn-outline-primary">Show Blog</a>
					</div>
				</div>
			</div>
		@endsection

    </body>
</html>
