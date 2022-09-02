<?php

if(isset($_POST['btn'])){
    $name=$_POST['name'];
    $loan=$_POST['loan'];
    $year=$_POST['year'];
    $time=$year*12;
    if($time <= 36){
        $sub_total=$loan+($loan/100*10);
        $total=$year*$sub_total;
        $all_total=$total/$time;
    }elseif($time > 36){
        $sub_total=$loan+($loan/100*15);
        $total=$year*$sub_total;
        $all_total=$total/$time;
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

    <title>Patient Number</title>
</head>

<body>


    <div class="container">
        <div class="row">

            <div class="col-md-6 offset-3 border border-primary mt-5 p-5">
          
                <form action="<?php $_SERVER['PHP_SELF'] ;?>" method="POST">
                <div class="mb-3">
                        <label class="form-label"> UserName </label>
                        <input type="text" name="name"  class="form-control" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">The loan </label>
                        <input type="number" name="loan"  class="form-control" value="<?php if (isset($_POST['loan'])) echo $_POST['loan']; ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">number of years </label>
                        <input type="number" name="year"  class="form-control" value="<?php if (isset($_POST['year'])) echo $_POST['year']; ?>">
                    </div>
                    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                </form>
                <?php if (isset($total) && isset($all_total)) : ?>
                    <h5 class="alert alert-success text-center mt-2"><?php echo "Borrower name is :". $name."<br>"."The all loan is: ".$total  ."<br>" ."The  loan per month is: ". $all_total; ?></h5>
                <?php endif;  ?>
            </div>
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