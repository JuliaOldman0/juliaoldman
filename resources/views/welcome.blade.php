<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Oldman</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f3ee;
            color: #1f1f1f;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        header {
            margin-bottom: 80px;
        }

        h1 {
            font-size: 64px;
            margin-bottom: 20px;
        }

        p {
            font-size: 20px;
            color: #555;
            max-width: 650px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 50px;
        }

        .card {
            background: white;
            padding: 24px;
            border-radius: 20px;
            text-decoration: none;
            color: #1f1f1f;
            border: 1px solid #e5ded6;
        }

        .card h2 {
            margin-top: 0;
        }

        @media (max-width: 800px) {
            .projects {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 44px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <strong>Julia Oldman</strong>
        </header>

        <main>
            <h1>Julia Oldman</h1>

            <p>
                This is my personal website and main project hub.
                From here, you can explore IBR, Notebook, BeeDance, and HelloLadybug.
            </p>

            <div class="projects">
                <a class="card" href="#">
                    <h2>IBR</h2>
                    <p>Visit IBR</p>
                </a>

                <a class="card" href="#">
                    <h2>Notebook</h2>
                    <p>Visit Notebook</p>
                </a>

                <a class="card" href="#">
                    <h2>BeeDance</h2>
                    <p>Visit BeeDance</p>
                </a>

                <a class="card" href="#">
                    <h2>HelloLadybug</h2>
                    <p>Visit HelloLadybug</p>
                </a>
            </div>
        </main>
    </div>
</body>
</html>
