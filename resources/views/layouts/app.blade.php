<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
            padding: 30px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 8px 0 16px;
            box-sizing: border-box;
        }

        button, .btn {
            display: inline-block;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }

        .danger { background: #dc2626; }
        .success { color: green; }
        .error { color: #b91c1c; }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th { background: #f1f5f9; }

        .actions {
            display: flex;
            gap: 6px;
            align-items: center;
        }

        .actions form { margin: 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Student Management System</h1>

        @if(session('success'))
            <p class="success">{{ session('success') }}</p>
        @endif

        @if($errors->any())
            <ul class="error">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        @yield('content')
    </div>
</body>
</html>
