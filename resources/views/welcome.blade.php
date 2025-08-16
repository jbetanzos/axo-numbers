<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Form</title>
</head>
<body>
<h1>Number Form</h1>

@if($errors->any())
    <div style="color: red; margin-bottom: 15px;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('submit.form') }}">
    @csrf
    <div>
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" value="{{ old('number') }}">
    </div>
    <button type="submit" style="margin-top: 10px;">Submit</button>
</form>

<p>
@if(isset($pyramid))
    <div style="text-align: center; white-space: pre;">
        @foreach($pyramid as $row)
            <div>{{ $row }}</div>
        @endforeach
    </div>
@endif
</p>
</body>
</html>
