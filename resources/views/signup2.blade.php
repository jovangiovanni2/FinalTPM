<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register 2</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/signup2.css">

</head>
<body>
    <div class="container">
        <img src="images/logo.png" alt="logo" style="margin: 38.97px;">
        <div class="box">
            <div class="bg-box"></div>
            <img src="images/group 11.png" alt="">

            <h1 class="header-sign">INFORMASI LEADER</h1>

            <form action="{{route('store2')}}" method="POST" id="step2-form" name="forms" enctype="multipart/form-data">
                @csrf
                <div class="inputs">
                    <label for="nama">Full name</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap anda...">
                    <p id="error-name" class="error-message"></p>
                </div>

                <div class="inputs">
                    <label for="nama">Your email</label>

                    <input type="text" id="email" name="email" placeholder="Masukkan email anda...">

                    <p id="error-email" class="error-message"></p>
                </div>

                <div class="inputs">
                    <label for="nama">Your whatsapp number</label>

                    <input type="text" id="wa" name="whatsapp" placeholder="08xxxxxxx...">

                    <p id="error-wa" class="error-message"></p>
                </div>

                <div class="wrap">

                    <div class="selection2">

                        <label for="nama" class="bd-label">Birth Place</label>
                         <select name="birth_place" id="bp" class="birth-p" >
                            <option value="0" selected class="selected">Masukkan tempat lahir...</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Surabaya">Surabaya</option>
                            <option value="Bandung">Bandung</option>
                            <option value="Medan">Medan</option>
                            <option value="Others">Others</option>
                        </select>


                        <p id="error-bp" class="error-message"></p>
                    </div>

                    <div class="selection">
                        <div class="label-selection">
                            <label for="nama" class="bd-label">Birth Date</label>
                            <img src="images/calender.png" alt="">
                        </div>


                        <div class="div-select">
                            <select name="birth_month" id="bd1">
                                <option value="0" selected class="selected">mm</option>
                                <option value="January">01</option>
                                <option value="February">02</option>
                                <option value="March">03</option>
                                <option value="April">04</option>
                                <option value="May">05</option>
                                <option value="June">06</option>
                                <option value="July">07</option>
                                <option value="August">08</option>
                                <option value="September">09</option>
                                <option value="October">10</option>
                                <option value="November">11</option>
                                <option value="December">12</option>
                            </select>

                            <select name="birth_date" id="bd2">
                                <option value="0" selected class="selected">dd</option>
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>

                            <select name="birth_year" id="bd3">
                                <option value="0" selected class="selected">yy</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                            </select>
                        </div>


                        <p id="error-bd" class="error-message"></p>

                    </div>

                    <div class="inputs2">
                        <label for="nama">Your line ID</label>

                        <input type="text" id="line" name="line_ID" placeholder="Masukkan ID line...">

                        <p id="error-line" class="error-message"></p>
                    </div>

                    <div class="inputs3">
                        <label for="nama">Your github ID</label>

                        <input type="text" id="git" name="github_ID" placeholder="Masukkan ID github...">

                        <p id="error-git" class="error-message"></p>
                    </div>
                </div>
        </div>

        <button id="step-btn" type="submit" href="">STEP SELANJUTNYA</button>
    </div>
 </form>
    <script src="js/signup2.js"></script>
</body>
</html>
