<!-- resources/views/countries/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countries List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            display: block;
            text-align: center;
            margin: 20px 0;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Countries List</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>Country</th>
                <th>Capital</th>
                <th>Code</th>
            </tr>
        </thead>
        <tbody>
            @foreach($countries as $country)
                <tr>
                    <td>{{ $country->country }}</td>
                    <td>{{ $country->capital }}</td>
                    <td>{{ $country->code }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('countries.create') }}">Add New Country</a>
</body>
</html>
