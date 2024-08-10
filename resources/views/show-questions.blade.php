<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الأسئلة</title>
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

        .table-container {
            background-color: #FFF;
            border: 2px solid #F2360C;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 1000px;
            margin: 40px auto;
        }

        .table thead th {
            background-color: #F2360C;
            color: #FFF;
        }

        .table tbody tr:nth-child(odd) {
            background-color: #F2F2F2;
        }

        .table tbody tr:hover {
            background-color: #F29580;
        }
    </style>
</head>
<body>
    <header>
        <h1>عرض أسئلة الضيف</h1>
    </header>

    <nav>
        <a href="/">الأسئلة</a>
        <a href="/competition-answer">إرسال الإجابة</a>
    </nav>

    <div class="table-container">
        <h2>الأسئلة المقدمة</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>الطالب</th>
                    <th>رقم القيد</th>
                    <th>السؤال</th>
                    <th>تاريخ الإضافة</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $question)
                <tr>
                    <td>{{ $question->name }}</td>
                    <td>{{ $question->registration_number }}</td>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
