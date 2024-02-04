<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/notification.css">
</head>
<body>
    @foreach ($groups as $g)
    <div class="container">
        <h1 class="header">Notifications</h1>
        <h1></h1>
        <div class="box">
            <h2>Team - Login</h2>
            <p class="message">The {{' '}}{{$g->Group_name}}{{' '}} team has registered</p>
            <p class="time">
            20 hours ago
            </p>
        </div>
        @endforeach
        {{-- <div class="box2">
            <h2>Team - Update</h2>
            <p class="message">The Thunder team updated the data</p>
            <p class="time">
            2 days ago
            </p>
        </div>
    </div> --}}

    <script src="js/notification.js"></script>
</body>
</html>
