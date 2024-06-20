<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
</head>
<body>
    <h1>Skills</h1>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
    <button onclick="window.location.href='{{ route('about-me') }}'">About Me</button>
    <button onclick="window.location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="window.location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
