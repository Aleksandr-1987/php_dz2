<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">Приложение PHP</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/index.php" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Обо мне</a></li>
            <li class="nav-item"><a href="/about.php" class="nav-link">Контакты</a></li>

            <?php
            if(isset($_COOKIE['user']) ):
            ?>
            <li class="nav-item"><a href="/auth.php" class="nav-link active" aria-current="page">Кабинет пользователя</a></li>

            <?php else: ?>
            <li class="nav-item"><a href="/auth.php" class="nav-link active" aria-current="page">Войти</a></li>
            <?php endif;?>
        </ul>
    </header>
</div>
