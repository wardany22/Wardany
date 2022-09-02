<?php
session_start();

if (isset($_SESSION['r1']) && isset($_SESSION['r2']) && isset($_SESSION['r3']) && isset($_SESSION['r4']) && isset($_SESSION['r5'])) {
    $_SESSION['r1'] = $_POST['r1'];
    $_SESSION['r2'] = $_POST['r2'];
    $_SESSION['r3'] = $_POST['r3'];
    $_SESSION['r4'] = $_POST['r4'];
    $_SESSION['r5'] = $_POST['r5'];
}

error_reporting(0);
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hospital rating</title>
</head>

<body>


    <div class="container">
        <div class="col-md-8  offset-2 mt-5">
            <form action="result.php" method="post">
                <table class="table table-info">
                    <thead>
                        <tr>
                            <th scope="col">Questions</th>
                            <th scope="col" class="text-center">Bad</th>
                            <th scope="col" class="text-center">Good</th>
                            <th scope="col" class="text-center">Very Good</th>
                            <th scope="col" class="text-center">Excelant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Are you satisfied with the level of cleanliness?</td>
                            <td class="text-center"><input class="form-check-input" value="0" type="radio" name="r1" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="3" type="radio" name="r1" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="5" type="radio" name="r1" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="10" type="radio" name="r1" id="flexRadioDefault1"></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the service prices?</td>
                            <td class="text-center"><input class="form-check-input" value="0" type="radio" name="r2" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="3" type="radio" name="r2" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="5" type="radio" name="r2" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="10" type="radio" name="r2" id="flexRadioDefault1"></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the nursing service</td>
                            <td class="text-center"><input class="form-check-input" value="0" type="radio" name="r3" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="3" type="radio" name="r3" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="5" type="radio" name="r3" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="10" type="radio" name="r3" id="flexRadioDefault1"></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the level of the doctor?</td>
                            <td class="text-center"><input class="form-check-input" value="0" type="radio" name="r4" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="3" type="radio" name="r4" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="5" type="radio" name="r4" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="10" type="radio" name="r4" id="flexRadioDefault1"></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the calmness in the hospital?</td>
                            <td class="text-center"><input class="form-check-input" value="0" type="radio" name="r5" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="3" type="radio" name="r5" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="5" type="radio" name="r5" id="flexRadioDefault1"></td>
                            <td class="text-center"><input class="form-check-input" value="10" type="radio" name="r5" id="flexRadioDefault1"></td>
                        </tr>


                    </tbody>
                </table>
                <input type="submit" value="submit" class="btn btn-primary">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>