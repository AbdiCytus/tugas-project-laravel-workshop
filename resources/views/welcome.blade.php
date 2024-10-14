<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to LaraTao</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle at top left, #ff0000, #1c1c1c 50%);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            color: #fff;
        }

        .navbar {
            background-color: rgba(80, 0, 0, 0.8);
            /* Warna merah tematik Hu Tao */
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
            /* Warna teks putih */
            font-family: 'Playfair Display', serif;
            /* Font yang elegan */
        }

        .nav-link:hover {
            color: red !important;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
        }

        .content {
            background-color: rgb(40, 40, 40);
            border-radius: 10px;
            padding: 1rem;
            width: max-content;
        }

        .desc {
            background-color: rgb(80, 80, 80);
            border-radius: 10px;
            padding: 1rem;
        }

        .content h1 {
            font-size: 1.5rem;
            margin: 10px;
        }

        .content p {
            font-size: 0.8em;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" width="25" class="mx-2">
                <a class="navbar-brand">LaraTao</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products/create">Create</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <h1 class="text-center mt-4">Laravel x Hu Tao</h1>
        <article style="display:flex; justify-content:center; align-items:center;" class="mt-4 gap-5">
            <div class="content">
                <img src="https://www.pngall.com/wp-content/uploads/14/Hu-Tao-PNG-Image.png" width="400">
            </div>
            <div class="content" style="display:flex; flex-direction: column; width:29.5%">
                <div>
                    <h1>What is LaraTao?</h1>
                    <p class="desc">LaraTao is a fanmade theme from AbdiCytus. This theme is a combination of Laravel
                        and the Hu Tao
                        character, there is nothing special about this theme, this theme was created because the color
                        match of the Hu Tao character with the color of Laravel 11. This theme is also intended for
                        users who want to have a different Laravel interface than usual.</p>
                </div>
                <div>
                    <h1>Laravel Framework</h1>
                    <p class="desc">Laravel is a free, open-source PHP framework that helps web developers build modern
                        web
                        applications. It's a backend framework that provides features for building web apps at scale,
                        such as: routing, validation, caching, queues, and file storage.
                        <br>
                        <a href="https://laravel.com/docs/11.x" class="text-warning">View Laravel Documentation</a>
                    </p>
                </div>
                <div>
                    <h1>View your Project</h1>
                    <p class="desc">You can see your ongoing project here. Change the href route in this source code to
                        your project,
                        then click the link below.
                        <br>
                        <a href="/products" class="text-warning">View your projects</a>
                    </p>
                </div>
            </div>
        </article>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!-- https://www.pngall.com/wp-content/uploads/14/Hu-Tao-PNG-Image.png -->
<!-- https://genshin-impact.fandom.com/wiki/Papilio_Charontis_Chapter?file=Papilio_Charontis_Chapter.png -->