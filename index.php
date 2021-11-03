
<?php
    require "conn.php";
    $data = $conn->query("SELECT * FROM tasks");
    $data->execute();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method=POST action="insert.php" class="inline">
          <div class="form-group">
              <label for="inputPassword2" class="sr-only">create</label>
                <input name="mytask" type="text" class="form-control" id="inputpassword2" placeholder="enter task">

          </div>  

          <button name="submit" type="submit">Create</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task Name</th>
                    <th>Action</th>

                </tr>
            </thead>
            
            <tbody>
            <?php while($rows = $data->fetch(PDO::FETCH_OBJ)):?>
                <tr>
                    <td><?php echo $rows->id;?></td>
                    <td><?php echo $rows->name;?></td>
                    <td><a class="btn-danger" href="delete.php?
                    del_id=<?php echo $rows->id;?>">Delete</a></td>
                </tr>
            <?php endwhile;?>
            </tbody>  
        
        </table>
    </div>
</body>
</html>