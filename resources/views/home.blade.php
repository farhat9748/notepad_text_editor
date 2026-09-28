<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Notepad Text Editor</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #1e293b;
        }

        /* Navbar */

        nav {
            background: #1e293b;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
        }

        nav ul li a:hover {
            color: #38bdf8;
        }

        /* Hero Section */

        .hero {
            min-height: 75vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content {
            max-width: 750px;
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #0f172a;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            color: #64748b;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            margin: 5px;
            transition: 0.3s;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            border: 1px solid #2563eb;
            color: #2563eb;
        }

        .btn-secondary:hover {
            background: #2563eb;
            color: white;
        }

        /* Features */

        .features {
            padding: 60px 8%;
            background: white;
            text-align: center;
        }

        .features h2 {
            font-size: 32px;
            margin-bottom: 40px;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .feature-card {
            padding: 30px;
            background: #f8fafc;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .feature-card h3 {
            margin-bottom: 15px;
            color: #2563eb;
        }

        .feature-card p {
            color: #64748b;
            line-height: 1.6;
        }

        /* Footer */

        footer {
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        /* Responsive */

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 34px;
            }

            .feature-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->

    <nav>
        <a href="{{ route('home') }}" class="logo">
            Notepad
        </a>

        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>

            <li>
                <a href="{{ route('nav') }}">Navigation</a>
            </li>

            <li>
                <a href="{{ route('app') }}">Text Editor</a>
            </li>
        </ul>
    </nav>

    <!-- Hero Section -->

    <section class="hero">

        <div class="hero-content">

            <h1>
                Write. Edit. <span>Organize.</span>
            </h1>

            <p>
                Welcome to Notepad Text Editor, your simple and
                powerful solution for creating, editing, and
                managing text documents with ease.
            </p>

            <a href="{{ route('app') }}" class="btn btn-primary">
                Open Text Editor
            </a>

            <a href="{{ route('nav') }}" class="btn btn-secondary">
                Explore Features
            </a>

        </div>

    </section>

    <!-- Features Section -->

    <section class="features">

        <h2>Why Choose Our Notepad?</h2>

        <div class="feature-grid">

            <div class="feature-card">
                <h3>Easy to Use</h3>

                <p>
                    A clean and simple interface designed
                    for everyone.
                </p>
            </div>

            <div class="feature-card">
                <h3>Fast Editing</h3>

                <p>
                    Create and edit your text documents
                    quickly and efficiently.
                </p>
            </div>

            <div class="feature-card">
                <h3>Organized Workspace</h3>

                <p>
                    Keep your notes and text content
                    organized in one place.
                </p>
            </div>

        </div>

    </section>

    <!-- Footer -->

    <footer>
        <p>
            &copy; {{ date('Y') }} Notepad Text Editor.
            All rights reserved.
        </p>
    </footer>

</body>

</html>