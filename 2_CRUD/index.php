<?php include "routes.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@600&display=swap" rel="stylesheet">
    <title> Trips </title>
</head>

<body>

<!-- /Search bar -->
<form action="" method="get">
    <nav class="navbar navbar-light bg-light">
        <div class="col-3">
            <div class="container-fluid">
            <a href="index.php" class="navbar-brand">Trips</a>
            </div>
        </div>
        <div class = "col-9"> 
            <div class="row mt-2">
                <div class="col-4"></div>
                    <div class="col-8 pe-3">
                    <div class="input-group pt-2">
                    <form class="d-flex">
                        <input class="form-control me-2" type="text" placeholder="..." aria-label="Search" name="search" >
                        <button class="btn btn-outline-success" type="submit">Ieškoti</button>
                    </form>
                    </div>        
                    </div>
                </div> 
            </div>        
        </div>
    </nav>


<!-- Forma isideti keliones -->
    <div class="container">
        <div class="row mb-3" >
            <div class="col-1"></div>
            <?php include "form.php" ?>
            <div class="col-1"></div>
        </div>
    </div>

<!-- Lentele su kelionem -->
    <table class="table">
            <thead class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Max people allowed</th>
                    <th>Distance</th>
                    <th>Animal friendly</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($trips as $trip) { ?>
                <tr>
                        <td> <?=$trip->id?> </td>
                        <td> <?=$trip->name?> </td>
                        <td> <?=$trip->month?> </td>
                        <td> <?=$trip->number?> </td>
                        <td> <?=$trip->distance?> </td>
                        <td> <?=$trip->animals?> </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$trip->id?>">
                                <button type="submit" name="edit" class="btn btn-outline-success">edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value=" <?=$trip->id?>">
                                <button type="submit" name="destroy" class="btn btn-outline-danger">delete</button>
                            </form>
                        </td>

                </tr>
                <?php  } ?>
            </tbody>
        </table>

</body>
</html>