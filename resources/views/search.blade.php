<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background color:cadetblue;">


@yield("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
<h1><center>SEARCH EMPLOYEE</center></h1>
<table class="table">

<tr>
    <td>code</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td></td>
    <td><button class="btn btn-primary">search</button></text></td>
</tr>



</table>
</div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6"></div>
</div>
</div>
</body>
</html>