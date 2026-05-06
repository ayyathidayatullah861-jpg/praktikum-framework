<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #0f0f0f;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Card */
.card {
    width: 350px;
    padding: 30px;
    border-radius: 15px;
    background: #1a1a1a;
    box-shadow: 0 0 25px rgba(0,255,200,0.2);
    color: white;
    text-align: center;
}

/* Title */
h2 {
    color: #00ffc8;
}

/* Input */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: none;
    background: #2a2a2a;
    color: white;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(45deg, #00ffc8, #00bfff);
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    transform: scale(1.05);
}

/* Error */
.error {
    color: red;
    margin-bottom: 10px;
}
</style>
</head>

<body>

<div class="card">
    <h2>🔐 Login</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html><!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
body {
    margin: 0;
    font-family: Arial;
    background: #0f0f0f;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

/* Card */
.card {
    width: 350px;
    padding: 30px;
    border-radius: 15px;
    background: #1a1a1a;
    box-shadow: 0 0 25px rgba(0,255,200,0.2);
    color: white;
    text-align: center;
}

/* Title */
h2 {
    color: #00ffc8;
}

/* Input */
input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 8px;
    border: none;
    background: #2a2a2a;
    color: white;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(45deg, #00ffc8, #00bfff);
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    transform: scale(1.05);
}

/* Error */
.error {
    color: red;
    margin-bottom: 10px;
}
</style>
</head>

<body>

<div class="card">
    <h2>🔐 Login</h2>

    @if(session('error'))
        <div class="error">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>

        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label>

        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>