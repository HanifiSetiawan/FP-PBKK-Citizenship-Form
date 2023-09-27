<!DOCTYPE html>
<html>
<head>
    <title>Form Validation</title>
</head>
<body>
    <h1>This Is a Simple Form</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/submit" enctype="multipart/form-data">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        <br><br>

        <label for="address">Address:</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}" required>
        <br><br>

        <label for="score">Score (2.50 - 99.99):</label>
        <input type="number" step="0.01" name="score" id="score" value="{{ old('score') }}" required>
        <br><br>

        <label for="picture">Picture (Max 2MB):</label>
        <input type="file" name="picture" id="picture" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
