<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Obituaries</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Obituaries</h1>

        @if($obituaries->isEmpty())
            <p>No obituaries found.</p>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Date of Death</th>
                        <th>Content</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($obituaries as $obituary)
                        <tr>
                            <td>{{ $obituary->name }}</td>
                            <td>{{ $obituary->dob }}</td>
                            <td>{{ $obituary->dod }}</td>
                            <td>{{ $obituary->content }}</td>
                            <td>{{ $obituary->author }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <script src="{{ asset('js/validation.js') }}"></script>
</body>
</html>
