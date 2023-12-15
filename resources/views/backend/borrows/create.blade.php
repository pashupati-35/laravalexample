

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>

<h2>Add a New Borrow</h2>
<div class="container">
    <div class="row">

<form action="{{ route('backend.borrow.store') }}" method="post">
    @csrf
    <div class="mb-3">
    <label for="student_id">Student:</label>
    <select name="student_id" required>
        @foreach($student as $student)
            <option value="{{ $student->student_id }}">{{ $student->name }} {{ $student->surname }}</option>
        @endforeach
    </select>
    <br>
    </div>
    <div class="mb-3">
    <label for="book_id">Book:</label>
    <select name="book_id" required>
        @foreach($book as $book)
            <option value="{{ $book->book_id }}">{{ $book->name }}</option>
        @endforeach
    </select>
    <br>
    </div>
    <div class="mb-3">
    <label for="taken_date">Taken Date:</label>
    <input type="date" name="taken_date" required>
    <br>
    </div>
    <div class="mb-3">
    <label for="brought_date">Brought Date:</label>
    <input type="date" name="brought_date" required>
    <br>
    </div>
    <div class="mb-3">
    <input type="submit" value="Submit"  class="btn btn-primary">
    </div>
</form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
