<?php
session_start();
//error_reporting(0);
$_SESSION['r1']=$_POST['r1'];
$_SESSION['r2']=$_POST['r2'];
$_SESSION['r3']=$_POST['r3'];
$_SESSION['r4']=$_POST['r4'];
$_SESSION['r5']=$_POST['r5'];
if (isset( $_SESSION['r1']) && isset( $_SESSION['r2']) && isset( $_SESSION['r3']) && isset( $_SESSION['r4']) && isset( $_SESSION['r5'])) {
    $arr = [ $_SESSION['r1'], $_SESSION['r2'], $_SESSION['r3'], $_SESSION['r4'], $_SESSION['r5']];
    $sum = array_sum($arr);
    if ($sum >= 25) {
        $totle = "Your Rating is : Good";
        $confirm = $sum;
    } elseif ($sum < 25) {
        $error = "we Will call you in your number";
        $confirm = $sum;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8  offset-2">
                <table class="table table-info mt-5 p-3">
                    <thead>
                        <tr>
                            <th scope="col">Question</th>
                            <th scope="col">Reviwe</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Are you satisfied with the level of cleanliness?</td>
                            <td><?php echo $_SESSION['r1']; ?></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the service prices?</td>
                            <td><?php echo $_SESSION['r2']; ?></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the nursing service</td>
                            <td><?php echo $_SESSION['r3']; ?></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the level of the doctor?</td>
                            <td><?php echo $_SESSION['r4']; ?></td>
                        </tr>
                        <tr>
                            <td>Are you satisfied with the calmness in the hospital?</td>
                            <td><?php echo $_SESSION['r5']; ?></td>
                        </tr>
                        <tr>
                           
                        <td>
                                
                                <?php if (isset($totle) && isset($confirm)) : ?>
                                  <h5 class="alert alert-success text-center mt-2"><?php echo $totle  ." : " . $confirm; ?></h5>
                              <?php endif;  ?>
                              <?php if (isset($error) && isset($confirm)) : ?>
                                 <p class="alert alert-danger text-center"> <?php echo $error ." : " . $_SESSION['telephone'] ; ?> </p>
                              <?php endif;  ?>  
                              
                          </td>
                          <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>

</html>