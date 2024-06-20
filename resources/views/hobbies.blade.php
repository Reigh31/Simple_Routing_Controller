<!DOCTYPE html>
<html>
<head>
    <title>Hobbies</title>
</head>
<body>
    <h1>Hobbies</h1>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @endforeach
    </ul>
    <button onclick="window.location.href='{{ route('about-me') }}'">About Me</button>
    <button onclick="window.location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="window.location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
