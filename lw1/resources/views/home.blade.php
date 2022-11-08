<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>LARAVEL</title>
    </head>
    <body>
        <div class="text1">{{ $filmone }}<br>
			{{ $descriptionone }}
			</div>
			<div class="text2">{{ $filmtwo }}<br>
			{{ $descriptiontwo }}
			</div>
			<div class="text3">{{ $filmthree }}<br>
			{{ $descriptionthree }}
			</div>
			<div class="text4">{{ $filmfour }}<br>
			{{ $descriptionfour }}
			</div>
    </body>
</html>
