<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/adminpanel.css">
</head>
<body>

    <section id = 'menu'>
        <div class="logo">
            <img src="images/Logo.png" alt="Hacktaton Logo">
        </div>

        <div class  = "items">
            <li><a href="Dashboard/DB.html">
                <button><img src="images/Dashboard.png" alt="Dashboard">    Dashboard</button>
            </a></li>
            <div class="robot">
                <img src="images/Robot.png" alt="Robot Hacktaton">
            </div>
        </div>
    </section>

    <section id="interface">
        <div class="profile">
            <a href="notification"><button><img class="notification" src="images/notification.png" alt="notification">
            </button></a>
            <a href="profile"><button>
            <img class="prof" src="images/Profile.png" alt="profile">
        </button></a>
        </div>
        <dir class="board">
            <table width = "100%">
                <thead >
                    <tr>
                        <td>No</td>
                    <td>Team Name</td>
                    <td>University</td>
                    <td>Detail</td>
                    <td> </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($groups as $index => $g)
                        <tr class="parent">
                            <td class="No">
                                {{ $index + 1 }}
                            </td>

                            <td class="people">
                                <h5>{{ $g->Group_name }}</h5>
                            </td>

                            <td class="University">
                                <h5>{{ $g->part }}</h5>
                            </td>

                            <td class="editremove">
                                <div class="satu">
                                    <a href="detail"><img src="images/Detail.png" alt=""></a>
                                    <a href="edit"><img src="images/edit.png" alt=""></a>
                                    <form action="{{ route('delete', $g->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="remove"  type="submit"><img src="images/Remove.png" alt=""></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </dir>
    </section>

    <script src="AP.js"></script>
</body>
</html>
