<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Countries</title>
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

        form {
            max-width: 400px; 
            margin: 0 auto;
            background: white; 
            padding: 20px; 
            border-radius: 8px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
        }

        input[type="submit"] {
            background-color: #007bff; 
            color: white; 
            border: none; 
            cursor: pointer; 
        }

        input[type="submit"]:hover {
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h1>Register Country</h1>
    <form action="{{ route('countries.store') }}" method="post">
        @csrf
        @method('post')
        <input type="text" name="country" placeholder="Country Name" required>
        <input type="text" name="capital" placeholder="City Capital" required>
        <input type="number" name="code" placeholder="Country Code" required>
        <input type="submit" value="Create Country">   
    </form>
</body>
</html>
