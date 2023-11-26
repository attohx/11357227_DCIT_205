<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads</title>
    <!--css file-->
    <link rel="stylesheet" href="css/style.css">
</head>
<?php
    @include "include/headie.php";
?>

<body class="p-3 mb-2 bg-light text-white>
<?php
    @include "include/navbar.php";
?> 

<div class="main-container">

<section class="sect-gap">
    <div class="container">
        <div class="section-align">

            <table class="table table-hover .table-borderless .table-responsive">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">File Name</th>
                        <th scope="col">Downloads</th>
                        <th scope="col">URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Computer Science</td>
                        <td>29000</td>
                        <td><button type="button" class="btn btn-outline-success">offline</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Course Handbook</td>
                        <td>20000</td>
                        <td><button type="button" class="btn btn-outline-success">offline</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>DCIT PassCo Bundle</td>
                        <td>40000</td>
                        <td><button type="button" class="btn btn-outline-success">offline</button></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Github.exe</td>
                        <td>16000</td>
                        <td><button type="button" class="btn btn-outline-success">offline</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>2023-2024 Schedule</td>
                        <td>120000</td>
                        <td><button type="button" class="btn btn-outline-success">offline</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

</div>

<?php
    @include "include/footer.php";
?> 
</body>

</html>