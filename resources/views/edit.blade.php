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
            <h2>Team Name : Phoenix</h2>
        </div>
        <div class="univ">
            <h2>University : BINUS</h2>
        </div>
        <dir class="board">
            <table width = "100%">
                <thead>
                    <td>No</td>
                    <td>Name</td>
                    <td>Age</td>
                    <td>Gender</td>
                    <td>Place of Birth</td>
                    <td>Date of Birth</td>
                </thead>
                <tbody>
                    <tr>
                        <td class="No">
                            @foreach ($groups as $g)
                            <h5>{{$g->id}}</h5>
                            @endforeach


                        </td>
                        <td class="No">
                            <h5>Calvin</h5>
                            <h5>Kevin</h5>
                            <h5>Grace</h5>
                        </td>
                        <td class="No">
                            <h5>19</h5>
                            <h5>18</h5>
                            <h5>18</h5>
                        </td>
                        <td class="No">
                            <h5>Male</h5>
                            <h5>Male</h5>
                            <h5>Female</h5>
                        </td>
                        <td class="No">
                            <h5>Jakarta</h5>
                            <h5>Surabaya</h5>
                            <h5>Surakarta</h5>
                        </td>
                        <td class="No">
                            <h5>3 November 2004</h5>
                            <h5>8 August 2005</h5>
                            <h5>27 July 2005</h5>
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
