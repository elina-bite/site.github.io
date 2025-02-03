

<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Тесты - Электронно-образовательный ресурс</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .content-section {
            margin: 20px;
        }

        .test-item {
            border: 2px solid #87CEEB; /* Цвет рамки (тускло-голубой) */
            border-radius: 5px; /* Закругление углов */
            padding: 15px; /* Отступы внутри рамки */
            margin-bottom: 15px; /* Отступ между тестами */
            background-color: #B0E0E6; /* Цвет фона (тускло-голубой) */
        }

        .test-link {
            font-size: 15px; /* Размер шрифта для тестов */
            color: #2F4F4F; /* Цвет текста (темно-серый) */
            text-decoration: none; /* Убираем подчеркивание */
        }

        .test-link:hover {
            text-decoration: underline; /* Подчеркивание при наведении */
        }
    </style>
</head>
<body>
<header>
    <h1>Тесты по искусственному интеллекту и нечёткой логике</h1>
</header>
<nav class="tab-menu">
    <ul>
        <li><a href="index.php" class="tab-link">Главная</a></li>
        <li><a href="tests.php" class="tab-link">Тест</a></li>
        <li><a href="lab_work.php" class="tab-link">Лабораторная работа</a></li>
        <li><a href="about.php" class="tab-link">Теория</a></li>
    </ul>
</nav>
<main>
    <div class="welcome">
        <h2>Выберите тест для прохождения:</h2>
    </div>
    <div class="content-section">
        <div class="test-item">
            <a href="test1.php" class="test-link">Тест 1: Основы ИИ</a>
        </div>
        <div class="test-item">
            <a href="test2.php" class="test-link">Тест 2: Нечёткая логика</a>
        </div>
        <div class="test-item">
            <a href="test3.php" class="test-link">Тест 3: Применение ИИ в реальных задачах</a>
        </div>
        <div class="test-item">
            <a href="test4.php" class="test-link">Тест 4: Алгоритмы машинного обучения</a>
        </div>
        <!-- Добавьте другие тесты по мере необходимости -->
    </div>
</main>
<footer>
    <p>&copy; 2025 Электронно-образовательный ресурс.</p>
</footer>
<script src="script.js"></script>
</body>
</html>
