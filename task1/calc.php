<?php
if (isset($_POST['btn'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $btn = $_POST['btn'];

    if($btn =="+"){
        $res=$num1 + $num2;
    }elseif($btn =="-"){
        $res=$num1 - $num2;
    }elseif($btn =="*"){
        $res=$num1 * $num2;
    }elseif($btn =="/"){
        $res=$num1 / $num2;
    }elseif($btn =="%"){
        $res=$num1 % $num2;
    }
    elseif($btn =="√"){
        $res=pow($num1, (1 / $num2));
    }elseif($btn =="^"){
        $res=pow($num1, ($num2));
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

    <title>Calculater</title>
</head>

<body>

    <div class="container border border-primary mt-3 p-3">
        <h1 class="text-center mt-3"> Calculater!</h1>
        <div class="col-md-8 offset-2">
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Number 1</label>
                    <input type="number" class="form-control" name="num1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Number 2</label>
                    <input type="number" class="form-control" name="num2">
                </div>
                <div class="row">
                    <div class="col-md-8 offset-4">
                        <input type="submit" class="btn btn-primary" name="btn" value="+" />
                        <input type="submit" class="btn btn-primary" name="btn" value="-" />
                        <input type="submit" class="btn btn-primary" name="btn" value="/" />
                        <input type="submit" class="btn btn-primary" name="btn" value="*" />
                        <input type="submit" class="btn btn-primary" name="btn" value="%"/>
                        <input type="submit" class="btn btn-primary" name="btn" value="√"/>
                        <input type="submit" class="btn btn-primary" name="btn" value="^"/>
                    </div>
                </div>
                <?php if (isset($res)) : ?>
                    <h5 class="alert alert-success text-center mt-2"><?php echo $res ?></h5>
                <?php endif;  ?>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>