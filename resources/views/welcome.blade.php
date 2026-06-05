<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Julia Oldman</title>
    <meta name="description" content="Julia Oldman personal website and project hub.">

    <style>
        body {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            background: #faf6f1;
            color: #241c18;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 32px 20px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 90px;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: -0.5px;
        }

        nav {
            display: flex;
            gap: 24px;
        }

        nav a {
            color: #6f625a;
            text-decoration: none;
            font-size: 15px;
            font-family: Arial, sans-serif;
        }

        nav a:hover {
            color: #241c18;
        }

        .hero {
            max-width: 760px;
            margin-bottom: 90px;
        }

        .label {
            font-family: Arial, sans-serif;
            font-size: 13px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #9b6f5d;
            margin-bottom: 18px;
        }

        h1 {
            font-size: 76px;
            line-height: 0.95;
            letter-spacing: -4px;
            margin: 0 0 28px;
            font-weight: normal;
        }

        .hero p {
            font-family: Arial, sans-serif;
            font-size: 20px;
            line-height: 1.7;
            color: #6f625a;
            max-width: 650px;
            margin-bottom: 34px;
        }

        .button {
            display: inline-block;
            background: #241c18;
            color: white;
            padding: 14px 24px;
            border-radius: 999px;
            text-decoration: none;
            font-family: Arial, sans-serif;
            font-weight: bold;
            font-size: 15px;
        }

        .section-title {
            font-size: 42px;
            font-weight: normal;
            letter-spacing: -2px;
            margin-bottom: 10px;
        }

        .section-subtitle {
            font-family: Arial, sans-serif;
            color: #6f625a;
            margin-bottom: 28px;
        }

        .projects {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 90px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #eadfd6;
            border-radius: 28px;
            padding: 26px;
            min-height: 230px;
            text-decoration: none;
            color: #241c18;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 18px 40px rgba(70, 45, 30, 0.08);
        }

        .card h2 {
            margin: 0 0 14px;
            font-size: 28px;
            font-weight: normal;
            letter-spacing: -1px;
        }

        .card p {
            font-family: Arial, sans-serif;
            color: #6f625a;
            line-height: 1.6;
            font-size: 15px;
            margin: 0;
        }

        .card span {
            font-family: Arial, sans-serif;
            color: #9b6f5d;
            font-weight: bold;
            margin-top: 24px;
        }

        .about {
            background: #ffffff;
            border: 1px solid #eadfd6;
            border-radius: 34px;
            padding: 44px;
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 44px;
            margin-bottom: 70px;
        }

        .about h2 {
            font-size: 42px;
            font-weight: normal;
            letter-spacing: -2px;
            margin: 0;
        }

        .about p {
            font-family: Arial, sans-serif;
            font-size: 18px;
            line-height: 1.7;
            color: #6f625a;
            margin-top: 0;
        }

        footer {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
            font-family: Arial, sans-serif;
            color: #8a7d75;
            font-size: 14px;
            padding-bottom: 24px;
        }

        footer a {
            color: #8a7d75;
            text-decoration: none;
        }

        @media (max-width: 900px) {
            h1 {
                font-size: 54px;
            }

            .projects {
                grid-template-columns: repeat(2, 1fr);
            }

            .about {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
                margin-bottom: 60px;
            }

            nav {
                flex-wrap: wrap;
                gap: 16px;
            }

            h1 {
                font-size: 46px;
                letter-spacing: -2px;
            }

            .projects {
                grid-template-columns: 1fr;
            }

            .about {
                padding: 28px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <div class="logo">Julia Oldman</div>

            <nav>
                <a href="#projects">Projects</a>
                <a href="#about">About</a>
                <a href="mailto:hello@juliaoldman.com">Contact</a>
            </nav>
        </header>

        <main>
            <section class="hero">
                <div class="label">Personal website & project hub</div>

                <h1>Ideas, projects, and creative work by Julia Oldman.</h1>

                <p>
                    Welcome to my main online home. This website connects my personal work,
                    creative projects, and digital ideas in one simple place.
                </p>

                <a class="button" href="#projects">Explore Projects</a>
            </section>

            <section id="projects">
                <h2 class="section-title">Projects</h2>
                <p class="section-subtitle">Choose where you would like to go next.</p>

                <div class="projects">
                    <a class="card" href="#">
                        <div>
                            <h2>IBR</h2>
                            <p>A dedicated space for IBR, its work, updates, and future direction.</p>
                        </div>
                        <span>Visit IBR →</span>
                    </a>

                    <a class="card" href="#">
                        <div>
                            <h2>Notebook</h2>
                            <p>A personal planning app for daily tasks, weekly habits, and goals.</p>
                        </div>
                        <span>Visit Notebook →</span>
                    </a>

                    <a class="card" href="#">
                        <div>
                            <h2>BeeDance</h2>
                            <p>A creative project with movement, energy, and visual identity.</p>
                        </div>
                        <span>Visit BeeDance →</span>
                    </a>

                    <a class="card" href="#">
                        <div>
                            <h2>HelloLadybug</h2>
                            <p>A soft, memorable brand space for future products and ideas.</p>
                        </div>
                        <span>Visit HelloLadybug →</span>
                    </a>
                </div>
            </section>

            <section id="about" class="about">
                <div>
                    <h2>About Julia</h2>
                </div>

                <div>
                    <p>
                        I am building a collection of personal, creative, and digital projects.
                        This website is the central place to learn more about me and explore
                        the different ideas I am developing.
                    </p>

                    <p>
                        More details, photos, project pages, and contact options will be added
                        as the website grows.
                    </p>
                </div>
            </section>
        </main>

        <footer>
            <div>© {{ date('Y') }} Julia Oldman</div>
            <div><a href="mailto:hello@juliaoldman.com">hello@juliaoldman.com</a></div>
        </footer>
    </div>
</body>
</html>
