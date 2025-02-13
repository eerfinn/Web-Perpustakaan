<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Book</title>
</head>
<body>
    <h1>Create Book</h1>
    <form action="{{ route('book.store') }}" method="POST">
        @csrf
        <div>
            <label for="code">Kode Buku:</label>
            <input type="text" id="code" name="code">
            @error('code')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="title">Nama Buku:</label>
            <input type="text" id="title" name="title">
            @error('code')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="publisher">Penerbit Buku:</label>
            <input type="text" id="publisher" name="publisher">
            @error('code')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="year">Tahun Terbit:</label>
            <input type="text" id="year" name="year">
            @error('code')
                <p>{{ $message }}</p>
             @enderror
        </div>
        <div>
            <label for="author">Penulis Buku:</label>
            <input type="text" id="author" name="author">
            @error('code')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>