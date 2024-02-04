<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/APDU.css">
</head>
<body>

    <section id="interface">
        <div class="profile">
            <img class="Logo" src="images/Logo.png" alt="">
            <a class="nots" href="notification/notification.html"><button><img class="notification" src="images/notification.png" alt="notification">
            </button></a>
            <a href="Profile/Profile.html"><button>
            <img class="prof" src="images/Profile.png" alt="profile">
        </button></a>
        </div>
        <div class="TN">

        </div>
        <div class="univ">

        </div>
        <dir class="board">
            <table width = "100%">
                <thead>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Place of Birth</td>
                    <td>Date of Birth</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="No">
                            @foreach ($detail as $g)
                            <h5>{{$g->id}}</h5>
                            @endforeach

                        </td>
                        <td class="No">
                            @foreach ($detail as $g)
                            <h5>{{$g->name}}</h5>
                            @endforeach
                        </td>
                        <td class="No">
                            @foreach ($detail as $g)
                            <h5>{{$g->email}}</h5>
                            @endforeach
                        </td>
                        <td class="No">
                            @foreach ($detail as $g)
                            <h5>{{$g->birth_place}}</h5>
                            @endforeach

                        </td>
                        <td class="No">
                            @foreach ($detail as $g)
                            <h5>{{$g->birth_date}}{{' '}}{{$g->birth_month}}{{' '}}{{$g->birth_year}}</h5>
                            @endforeach

                        </td>
                    </tr>
                </tbody>
            </table>
        </dir>
    <section id = "logo">
        <img src="images/Robot.png" alt="HACKTATON LOGO">
        <a href="adminpanel"><button class="back">Back</button></a>
    </section>

    <script src="js/APDU.js"></script>
</body>
</html>
