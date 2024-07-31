<!-- resources/views/obituary_form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Obituary</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Submit Obituary</h1>

        <form id="obituaryForm" method="POST" action="{{ route('submit_obituary') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <label for="dod">Date of Death:</label>
            <input type="date" id="dod" name="dod" required>

            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>

            <button type="submit">Submit</button>
        </form>
    </div>
    <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
