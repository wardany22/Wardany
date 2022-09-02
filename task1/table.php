<?php


$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football', 'swimming', 'running'
        ],
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phones' => [012312312, 1231513513, 89746543],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones' => [1231513513, 89746543],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones' => [],
    ],
    (object)[
        'id' => 4,
        'name' => 'wardany',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'football','handball'
        ],
        'activities' => [
            "school" => 'math',
            'home' => 'reading'
        ],
        'phones' => [40906050],
    ],
];

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>table


























        
    </title>
</head>

<body>

    <div class="container  mt-3 p-3">
        <h1 class="text-center mt-3"> User Data!</h1>
        <div class="col-md-8 offset-2">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Hobbies</th>
                        <th scope="col">Activities</th>
                        <th scope="col">Phones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $key => $user) { ?>
                          
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td>
                                <?php  
                                if($user->gender->gender ==="m"){
                                    echo"Male";
                                }else{
                                    echo "female";
                                };
                                ?>
                                <td>
                                    <?php
                                     for($x=0;$x < sizeof($user->hobbies);$x++){
                                        echo $user->hobbies[$x]."<br>";
                                     }
                                     
                                     ?>
                                </td>
                                <td>
                                <?php
                                     foreach($user->activities as $act){
                                        echo $act."<br>";
                                     }
                                     ?>
                                     </td>
                               
                            </td>
                            <td>
                                    <?php
                                     for($x=0;$x < sizeof($user->phones);$x++){
                                        echo $user->phones[$x]."<br>";
                                     }
                                     
                                     ?>
                                </td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>