<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Get & Post</title>
</head>

<?php 
//$search = ($_GET['search']!="")?$_GET['search']:'';

$mysql = mysqli_connect('localhost', 'root', 'mysql', 'geekbrains');
mysqli_query($mysql, "SET NAMES utf8 COLLATE utf8_unicode_ci");

$query = "SELECT * FROM students";

if ($_GET['search']!="") {
$search = $_GET['search'];
$query .= " WHERE Name LIKE \"%" . $search . "%\"";

}

$query .=" ORDER BY students.age DESC ;";

//var_dump($query);
$mysql_query = mysqli_query($mysql, $query);

$br = '<br/>';

$students = [];

while ($row = mysqli_fetch_assoc($mysql_query)) {
$students[] = $row;
}

mysqli_close($mysql);

?>

<nav class="navbar navbar-light bg-light mb-3 mt-3">
    <form class="form-inline" method="get">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" value="<?=$search?>">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Fakultet</th>
    </tr>
    </thead>
    <tbody>

    <? foreach ($students as $student) : ?>
        <tr>
            <th scope="row"><?=$student['id']?></th>
            <td><?=$student['Name']?></td>
            <td><?=$student['age']?> years old</td>
            <td><?=$student['Fakultet']?></td>
        </tr>
    <?php
    endforeach; ?>


    </tbody>
</table>

