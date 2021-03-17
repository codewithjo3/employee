@extends("theme")

@extends("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3"></div>
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
<h1><center>ADD EMPLOYEE</center></h1>
<table class="table">
<tr>
    <td>employee name</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td>employee code</td>
    <td><input type="number" class="form-control"></text></td>
</tr>

<tr>
    <td>designation</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td>salary</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td>date of birth</td>
    <td><input type="date" class="form-control"></text></td>
</tr>

<tr>
    <td>place</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td>pin code</td>
    <td><input type="text" class="form-control"></text></td>
</tr>

<tr>
    <td>phone number</td>
    <td><input type="number" class="form-control"></text></td>
</tr>

</table>
</div> 
<div class="col col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6"></div>   
</div>
</div>

@endsection