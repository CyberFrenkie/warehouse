<!-- resources/views/upload/form.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload Excel Form</title>
</head>
<body>
    <h2>Upload Excel File</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('upload.excel') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="excel_file">Select Excel File:</label>
        <input type="file" id="excel_file" name="excel_file" required>
        <br><br>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
