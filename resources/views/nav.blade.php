<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Navigation - Notepad</title>

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
        }

        nav ul li a:hover {
            color: #38bdf8;
        }

        .container {
            max-width: 1000px;
            margin: 60px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            text-align: center;
        }

        .card h2 {
            color: #2563eb;
            margin-bottom: 15px;
        }

        .card p {
            color: #64748b;
            line-height: 1.6;
        }

        footer {
            margin-top: 80px;
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

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

    <div class="container">

        <h1>Notepad Text Editor</h1>

        <div class="grid">

            <div class="card">
                <h2>Create</h2>
                <p>
                    Create new text documents easily
                    using our simple editor.
                </p>
            </div>

            <div class="card">
                <h2>Edit</h2>
                <p>
                    Edit your text quickly with
                    a clean and simple interface.
                </p>
            </div>

            <div class="card">
                <h2>Organize</h2>
                <p>
                    Keep your notes and documents
                    organized in one workspace.
                </p>
            </div>

        </div>

    </div>

    <footer>
        <p>
            &copy; {{ date('Y') }} Notepad Text Editor.
            All rights reserved.
        </p>
    </footer>

</body>

</html>