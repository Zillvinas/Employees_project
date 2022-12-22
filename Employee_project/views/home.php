<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <title>Employee task</title>
</head>
<body>
<main class="container">
    <nav>
        <ul>
            <li><strong>New Employee</strong></li>
        </ul>
        <?php require __DIR__ . '/navigation.php' ?>
    </nav>
    <form>

        <!-- Grid -->
        <div class="grid">

            <!-- Markup example 1: input is inside label -->
            <label for="firstname">
                First name
                <input type="text" id="firstname" name="firstname" placeholder="First name" required>
            </label>

            <label for="lastname">
                Last name
                <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
            </label>

        </div>

        <!-- Markup example 2: input is after label -->



        <!-- Button -->
        <button type="submit">Submit</button>

    </form>
</main>
</body>
</html>
