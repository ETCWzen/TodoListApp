<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your List</title>
</head>
<body>
<h1>To Do List</h1>

<div class="highPriority"></br>
    <label for="highTask">High Priority Tasks</label></br>
    <input type="text" name="highTask">
    <input type="submit" value="Submit">
</div>

<div class="mediumPriority"></br>
    <label for="mediumTask">Medium Priority Tasks</label></br>
    <input type="text" name="mediumTask">
    <input type="submit" value="Submit">
</div>

<div class="lowPriority"></br>
    <lable for="lowTask">No Priority Tasks</lable></br>
    <input type="text" name="lowTask">
    <input type="submit" value="Submit">
</div>
</body>
</html>
