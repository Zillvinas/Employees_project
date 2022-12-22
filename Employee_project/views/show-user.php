<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Skelbimų portalas</title>
</head>
<body>
    <main class="container">
        <nav>
            <ul>
                <li><strong>Skelbimų Portalas</strong></li>
            </ul>
            <?php require __DIR__ . '/navigation.php' ?>
        </nav>
        <article>
            <header><?= $employee['first_name'] ?></header>

            <p>Sukurta <?= $employee['last_name'] ?></p>

                <form method="POST" action="/ad/<?= $employee['id'] ?>/destroy">
                    <button type="submit">Trinti</button>
                </form>
            </footer>
        </article>
    </main>
</body>
</html>
