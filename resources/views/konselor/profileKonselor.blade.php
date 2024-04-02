<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Profile Konselor</h1>
    <h1>Welcome, {{ $user->namaKonselor }}</h1>
    <p>Your email address is: {{ $user->email }}</p>
    <p class="text-sm font-light text-gray-500 dark:text-gray-400"><a href="{{route('homeKonselor')}}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Home Konselor</a></p>
    <form method="POST" action="{{ route('logoutKonselor') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>