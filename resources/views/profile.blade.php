<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>Logout Alert</title>
</head>
<body>


    <div id = "modal">

        <div class = "modal-box">
            @foreach ($leader as $g)
            <div class = "header">
                <img src="images/Profile.png" alt="Your profile">
                <h2>{{$g->name}}</h2>
            </div>
            <div class="level">
                <p>Chief Internal Officer</p>
            </div>
           @endforeach
            <div class="items">
                <a href=""><li>Change Password</li></a>
                <a href=""><li>Privacy Policy</li></a>
                <a href=""><li>Terms & Conditions</li></a>
                <a href="../Logout/Logout.html" class="Logout"><li>Sign Out</li></a>
            </div>
        </div>

    </div>

    <script src="js/profile.js"></script>
</body>
</html>
