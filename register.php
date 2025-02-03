<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Регистрация</h1>
</header>
<main>
    <form action="register_user.php" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Зарегистрироваться</button>
    </form>
    <p>Уже есть аккаунт? <a href="login.php">Войдите!</a></p>
</main>
<footer>
    <p>&copy; 2025 Электронно-образовательный ресурс.</p>
</footer>
</body>
</html>
