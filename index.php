<?php error_reporting(0);?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Comments</title>
  </head>
  <body>
    <div class="navbar navbar-light bg-light">
        <div class="navbar-brand">
            Navbar 
        </div>
    </div>

    <div class="container">
        <div class="row pt-3">
            <div class="col-sm-4 col-md-4">
                <div class="card">
                    <div class="card-header">Comments</div>
                    <div class="card-body">
                        <?php if (!$_GET['edit']) { ?>
                            <form action="insert.php" method="POST">
                                <div class="form-group">
                                    <textarea name="comment" id="" cols="40" rows="4" placeholder="New Comment..."></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Save Comment</button>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-md8">
                <table class="table">
                    <thead>                        
                        <tr>
                            <th>ID</th>
                            <th>Comment</th>
                            <th>Acctions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('list.php');
                            while($rows = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <?php if($_GET['edit'] && $_GET['edit'] == $rows['id']) { ?>
                                <form action="update.php" method="POST">
                                    <td>
                                        <?php echo $rows['id'] ?>
                                        <input type="hidden" name="id" value="<?php echo $rows['id'] ?>" />
                                    </td>
                                    <td><input type="text" name="comment" class="form-control" value="<?php echo $rows['comment'] ?>"/></td>
                                    <td>
                                        <input type="submit" class="btn btn-success" value="update" />
                                        <a href="index.php" class="btn btn-warning">Cancel</a>
                                    </td>
                                </form>
                            <?php } else { ?>
                            <td><?php echo $rows['id'] ?></td>
                            <td><?php echo $rows['comment'] ?></td>
                            <td>
                                <a class="btn btn-warning" href="index.php?edit=<?php echo $rows['id']; ?>">Edit</a>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="app.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

