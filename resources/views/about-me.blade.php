<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
</head>
<body>
    <h1>About Me</h1>
    <p>Name: {{ $name }}</p>
    <p>Description: {{ $description }}</p>
    <button onclick="window.location.href='{{ route('about-me') }}'">About Me</button>
    <button onclick="window.location.href='{{ route('skills') }}'">Skills</button>
    <button onclick="window.location.href='{{ route('hobbies') }}'">Hobbies</button>
</body>
</html>
