<!-- resources/views/auth/sign-up.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h2>Sign Up</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="username">Your Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="email">Your E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Create Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
