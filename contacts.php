<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>GARBUZYONISH.TECH</h1>
        <nav>
            <ul class="nav-menu">
                <li><a href="index.php">Главная</a></li>
                <li><a href="news.php">Новости</a></li>
                <li><a href="content.php">Контент</a></li>
                <li><a href="">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Контакты</h2>
        <p>Если у вас есть вопросы или предложения, а возможно вы нашли ошибку, пожалуйста заполните форму ниже. 📧</p>

        <div class="contact-info">
            <p><strong>Email:</strong> garbuzyonish@gmail.com</p>
        </div>

        <form class="contact-form">
            <h2>Тех. поддержка👨‍🦱🛠</h2>
            <label for="name">Имя:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="message">Сообщение:</label><br>
            <textarea id="message" name="message" rows="4" required></textarea><br>

            <button type="submit" class="button-gradient">Отправить</button>
        </form>

    </div>

    <footer>
        <p>Все права защищены &copy; 2024</p>
    </footer>
</body>

</html>