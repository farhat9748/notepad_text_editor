<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Text Editor - Notepad</title>

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

        .editor-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .editor-box {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        textarea {
            width: 100%;
            height: 400px;
            padding: 20px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            resize: vertical;
            font-size: 16px;
            font-family: Consolas, monospace;
            outline: none;
        }

        textarea:focus {
            border-color: #2563eb;
        }

        .buttons {
            margin-top: 20px;
            display: flex;
            gap: 10px;
        }

        button {
            padding: 12px 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
        }

        .save {
            background: #2563eb;
            color: white;
        }

        .clear {
            background: #dc2626;
            color: white;
        }

        button:hover {
            opacity: 0.9;
        }

        footer {
            margin-top: 80px;
            background: #1e293b;
            color: white;
            text-align: center;
            padding: 20px;
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

    <div class="editor-container">

        <h1>Notepad Text Editor</h1>

        <div class="editor-box">

            <textarea
                id="editor"
                placeholder="Start writing your notes here..."></textarea>

            <div class="buttons">

                <button class="save" onclick="saveText()">
                    Save
                </button>

                <button class="clear" onclick="clearText()">
                    Clear
                </button>

            </div>

        </div>

    </div>

    <footer>
        <p>
            &copy; {{ date('Y') }} Notepad Text Editor.
            All rights reserved.
        </p>
    </footer>

    <script>
        function saveText() {
            const text = document.getElementById('editor').value;

            localStorage.setItem('notepad_text', text);

            alert('Text saved successfully!');
        }

        function clearText() {
            document.getElementById('editor').value = '';

            localStorage.removeItem('notepad_text');
        }

        window.onload = function () {
            const savedText = localStorage.getItem('notepad_text');

            if (savedText) {
                document.getElementById('editor').value = savedText;
            }
        };
    </script>

</body>

</html>