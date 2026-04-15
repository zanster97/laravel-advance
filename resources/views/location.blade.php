<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <p>Country name:{{ $country->name }}</p>
        City:
            <ul>
                @foreach ($country->cities as $city )
                    <li>{{ $city->name }}</li>
                @endforeach
            </ul>
        States
        {{-- <ul>
            @foreach ($country->states  as $state)
                <li>{{ $state->name }}</li>
                City:
                <ul>
                    @foreach ($state->cities as $city )
                        <li>{{ $city->name }}</li>
                    @endforeach
                </ul>
            @endforeach
        </ul> --}}
    </div>
</body>
</html>
