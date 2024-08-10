<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إرسال إجابة المسابقة</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #F2F2F2;
            font-family: 'Tajawal', sans-serif;
            color: #0F0502;
        }

        header {
            background-color: #0F0502;
            color: #F2F2F2;
            padding: 20px;
            text-align: center;
            border-bottom: 5px solid #F2360C;
        }

        nav {
            background-color: #F29580;
            padding: 10px 20px;
        }

        nav a {
            color: #0F0502;
            font-weight: bold;
            margin: 0 15px;
            text-decoration: none;
        }

        h2 {
            color: #F25E3D;
            margin-top: 20px;
            font-size: 2em;
            text-align: center;
        }

        .form-container {
            background-color: #FFF;
            border: 2px solid #F2360C;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            margin: 40px auto;
        }

        .form-group label {
            color: #0F0502;
            font-weight: bold;
        }

        .form-control {
            background-color: #F2F2F2;
            border: 1px solid #F25E3D;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #F2360C;
            border-color: #F2360C;
            color: #FFF;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0F0502;
            border-color: #0F0502;
        }
    </style>
</head>
<body>
    <header>
        <h1>موقع إرسال الإجابات</h1>
    </header>

    <nav>
    <a href="/">الأسئلة</a>
    <a href="/competition-answer">إرسال الإجابة</a>
    </nav>

    <div class="form-container">
    <h2>إرسال إجابة المسابقة</h2>

    <!-- Display Success Message -->
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <form action="{{ route('submit.answer') }}" method="POST" dir="rtl" style="text-align: right;">
        @csrf
        <div class="form-group">
            <label for="registration_number">رقم القيد:</label>
            <input type="text" class="form-control" id="registration_number" name="registration_number" required>
        </div>
        <div class="form-group">
            <label for="name">الاسم:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="answer">الإجابة:</label>
            <textarea class="form-control" id="answer" name="answer" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
</div>

</body>
</html>
