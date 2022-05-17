<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- ملفي css -->
    <link rel="stylesheet" href="css/styleSignup.css">
    <link rel="stylesheet" href="CSS/stylee.css">
    <link rel="stylesheet" href="css/bootcs.css">


</head>


<body>
    <main>
        <!-- Head with image -->
        <div class="bgimg" id="home"></div>
        <div class="divheder">
            <h1 class="sinup"> SIGN UP </h1>
            <br>
        </div>


        <div class="container">
            <div class="row justify-content-center">
                <div class="apply-wrapper">
                    <!-- بحط يدخل بداتا بيس -->
                    <form method="POST">
                        <!-- row 1-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* FIRST NAME:</label>
                                    <input class="well" type="text" name="firstName" placeholder="Enter name" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* LAST NAME :</label>
                                    <input class="well" type="text" name="lastName" placeholder="Enter name" required>
                                </div>
                            </div>
                        </div>
                        <!-- row 2-->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single-form  d-flex">
                                    <label class="labelselect">* Select Gender :</label>
                                </div>
                                <!-- <div class="select-radio6"></div> -->
                            </div>
                            <div class="col-sm-4">
                                <div class="radio">
                                    <input id="radio" name="gender" value="m" type="radio" checked>
                                    <label for="radio-1" for="gender" value="m" class="radio-label">Male</label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="radio">
                                    <input id="radio" name="gender" value="f" type="radio">
                                    <label for="radio-2" for="gender" value="f" class="radio-label"> Female </label>
                                </div>
                            </div>
                        </div>

                        <!-- row 3-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* ID NUMBER : </label>
                                    <input class="well" type="text" name="ID" placeholder="Enter ID" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* BANK CARD :</label>
                                    <input class="well" type="text" name="Bankcard" placeholder="Enter Bank card  Number" required>
                                </div>
                            </div>
                        </div>

                        <!-- row 4-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* EMAIL ADDRESS :</label>
                                    <input class="well" type="email" name="email" placeholder="Enter email" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* PASSWORD : </label>
                                    <input class="well" type="password" name="pass" placeholder="Enter PASS" required>
                                </div>
                            </div>
                        </div>

                        <!-- row  5-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* TOWN/CITY : </label>
                                    <input class="well" type="text" name="city" placeholder="Enter city" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* ADDRESS</label>
                                    <input class="well" type="text" name="addr" placeholder="Enter Street Address" required>
                                </div>
                            </div>
                        </div>

                        <!-- row 7-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <label>* PHONE NUMBER :</label>
                                    <input class="well" type="text" name="phone" placeholder="Enter Phone Number" required>
                                </div>
                            </div>
                        </div>

                        <br><br>
                        <!-- row  8-->
                        <div class="row">
                            <div class="col-sm-12">
                                <button id="clickSIGNUP" class="w3-button w3-light-green" name="submit" value="signUp">SIGN UP</button>



                                <script type="text/javascript">
                                    $('#clickSIGNUP').on('click', function() {
                                        Swal.fire(
                                            '✓ Your sign UP successfully',
                                            'You clicked the button!',
                                            'success',
                                            50000
                                        )
                                    })
                                    // function fun1() {
                                    //     Swal.fire(
                                    //         '✓ Your sign UP successfully',
                                    //         'You clicked the button!',
                                    //         'success'
                                    //     )
                                    // }

                                    // function fun2() {
                                    //     Swal.fire({
                                    //         icon: 'error',
                                    //         title: 'Oops...',
                                    //         text: 'Something went wrong!'
                                    //     })

                                    // }
                                    // }
                                </script>

                                <button class="w3-button w3-amber" onclick="window.location.href='ds.html' ; ">CANCEL</button>
                            </div>
                        </div>
                        <br> <br><br><br>

                    </form>
                </div>
            </div>
        </div>


    </main>



    <?php


    if (!empty($_POST['submit']) && $_POST['submit'] == 'save') {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "debug_service";

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $ID = (int)$_POST['ID'];
        $Bankcard = (int) $_POST['Bankcard'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $city = $_POST['city'];
        $addr = $_POST['addr'];
        $phone = (int)$_POST['phone'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO register values('$firstName','$lastName','$gender',$ID,$Bankcard,'$email','$pass','$city','$addr',$phone)";
        if ($conn->query($sql) === TRUE) {
            echo '<script type="text/javascript">    </script>';
        } else {

            echo "eror";
            // echo '<script type="text/javascript" >   </script>';
        }
    }


    ?>




</body>

</html>