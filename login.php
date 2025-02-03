<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Авторизация</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Авторизация</h1>
</header>
<main>
    <form action="auth.php" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Войти</button>
    </form>
    <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь!</a></p>
</main>
<footer>
    <p>&copy; 2025 Электронно-образовательный ресурс.</p>
</footer>
</body>
</html>
