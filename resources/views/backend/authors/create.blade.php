<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<h2>Add a New Author</h2>
<div class="container">
    <div class="row">

<form action="{{route('backend.author.store')}}" method="post">
    @csrf
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name:</label>
    <input type="text" name="name" required>
    <br>
    </div>

    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Surname:</label>
    <input type="text" name="surname" required>
    <br>
    </div>
    <input type="submit" value="Submit"  class="btn btn-primary">
</form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>
