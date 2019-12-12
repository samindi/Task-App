<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="text-center">
   <h1> Daily Task App</h1>
   <div class="raw">
   <div class="col-md-12">
   <form method="post" action="/saveTask">
   {{csrf_field()}}
   <input type="text" class="form-control" name="task" placeholder="Enter Your Task Here">
   </br>
   <input type="submit" class="btn btn-primary" value="SAVE">
   <input type="button" class="btn btn-warning" value="CLEAR">

   </form>
   </br></br>
   <table class="table table-dark">
   <th>ID</th>
   <th>Task</th>
   <th>Completed</th>
   <tr>
   <td>1</td>
   <td>I have to learn Laravel</td>
   <td> Not Yet</td>
   </tr>


   



   </table>
   </div>
   </div>
    </div>
    </div>
</body>
</html>