<?php
if(isset($_POST['btn'])){
    $grade1=$_POST['g1'];
    $grade2=$_POST['g2'];
    $grade3=$_POST['g3'];
    $grade4=$_POST['g4'];
    $grade5=$_POST['g5'];
    
    $arr=[$grade1,$grade2,$grade3,$grade4,$grade5];
    $sum=array_sum($arr);
    $totle=($sum/500)*100;
    
    if($totle >= 90){
        $g="Your Grade is : A";
        $confirm=$totle."%";
    }elseif($totle >= 80){
        $g="Your Grade is : B";
        $confirm=$totle."%";
    }elseif($totle >= 70){
        $g="Your Grade is : C";
        $confirm=$totle."%";
    }elseif($totle >= 60){
        $g="Your Grade is : D";
        $confirm=$totle."%";
    }elseif($totle >= 40){
        $g="Your Grade is : E";
        $confirm=$totle."%";
    }elseif($totle < 40){
        $error="Your Grade is : f";
        $confirm=$totle."%";
    }

}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Grade</title>
</head>

<body>

    <div class="container border border-primary mt-3 p-3" >
        <h1 class="text-center mt-3">Student Grade!</h1>
        <div class="col-md-8 offset-2">
            <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Physics</label>
                    <input type="number" class="form-control" name="g1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Chemistry</label>
                    <input type="number" class="form-control" name="g2">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Biology</label>
                    <input type="number" class="form-control" name="g3">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mathematics</label>
                    <input type="number" class="form-control" name="g4">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Computer</label>
                    <input type="number" class="form-control" name="g5">
                </div>
               
                
                <button type="submit" class="btn btn-primary" name="btn">Submit</button>
                <?php if (isset($g) && isset($confirm)) : ?>
                    <h5 class="alert alert-success text-center mt-2"><?php echo $g  ."<br>" . $confirm; ?></h5>
                <?php endif;  ?>
                <?php if (isset($error) && isset($confirm)) : ?>
                    <h5 class="alert alert-danger text-center mt-2"><?php echo $error  ."<br>" . $confirm."<br>" ."Try next time, good luck For you"; ?></h5>
                <?php endif;  ?>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>