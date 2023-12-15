
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<h2>Add a New Student</h2>
<div class="container">
    <div class="row">
        <form action="{{route('backend.student.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name:</label>
                <input type="text" name="name" maxlength="20" required>
                <br>
            </div>
            <div class="mb-3">
                <label for="surname">Surname:</label>
                <input type="text" name="surname" maxlength="20" required>
                <br>
            </div>
            <div class="mb-3">
                <label for="DOB">Date of Birth:</label>
                <input type="date" name="DOB" required>
                <br>
            </div>
            <label for="gender">Gender:</label>
            <select name="gender" required>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
            </select>
            <br>

            <label for="class">Class:</label>
            <input type="number" name="class" required>
            <br>

            <label for="point">Points:</label>
            <input type="number" name="point" required>
            <br>
            <div class="mb-3">
                <input type="submit" value="Submit"  class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>


