<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Your List</title>
</head>
<body>
<h1>To Do List</h1>

<div class="highPriority">
    <form method="POST" action="{{ route('save.task') }}">
        @csrf
        <label for="highTask">High Priority Tasks</label><br>
        <input type="text" name="highTask">
        <input type="submit" value="Submit">
    </form>
    <div>
        <strong>Submitted High Priority Task:</strong>
        {{ isset($highTask) ? $highTask : 'No task submitted' }}
    </div>
</div>

<div class="mediumPriority">
    <form method="POST" action="{{ route('save.task') }}">
        @csrf
        <label for="mediumTask">Medium Priority Tasks</label><br>
        <input type="text" name="mediumTask">
        <input type="submit" value="Submit">
    </form>
    <div>
        <strong>Submitted Medium Priority Task:</strong>
        {{ isset($mediumTask) ? $mediumTask : 'No task submitted' }}
    </div>
</div>

<div class="lowPriority">
    <form method="POST" action="{{ route('save.task') }}">
        @csrf
        <label for="lowTask">No Priority Tasks</label><br>
        <input type="text" name="lowTask">
        <input type="submit" value="Submit">
    </form>
    <div>
        <strong>Submitted Low Priority Task:</strong>
        {{ isset($lowTask) ? $lowTask : 'No task submitted' }}
    </div>
</div>
</body>
</html>
