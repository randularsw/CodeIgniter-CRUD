<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>CodeIgniter CRUD</title>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">CodeIgniter CRUD</a>
    </nav>

    <br>
    <table class="table table-striped table-light">
        <thead>
            <tr class="bg-dark">
                <th class="text-light" scope="col">User ID</th>
                <th class="text-light" scope="col">Username</th>
                <th class="text-light" scope="col">Speed</th>
                <th scope="col" colspan="2">
                    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">Add New</button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url('index.php/Crud/create');?>">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <label>Speed</label>
                                            <input type="number" class="form-control" name="speed" placeholder="Enter Speed">
                                        </div>
                                        <button type="submit" class="btn btn-primary" value="save" name="save">Add</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $i=1;
            foreach($data as $row){
                echo "<tr>";
                echo "<td>".$row->userid."</td>";
                echo "<td>".$row->username."</td>";
                echo "<td>".$row->speed."</td>";
                ?>
                    <td>
                        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="<?php echo "#exampleModal".$i ?>">Update</button>
                        <div class="modal fade" id="<?php echo "exampleModal".$i ?>" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Update User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="<?php echo base_url('index.php/Crud/update');?>">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo $row->username ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Speed</label>
                                                <input type="number" class="form-control" name="speed" value="<?php echo $row->speed ?>">
                                            </div>
                                            <input type="hidden" class="form-control" name="uid" value="<?php echo $row->userid ?>">
                                            <button type="submit" class="btn btn-primary" value="save" name="save">Update</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <form method="post" action="<?php echo base_url('index.php/Crud/delete');?>">
                            <input type="hidden" class="form-control" name="uid" value="<?php echo $row->userid ?>">
                            <button type="submit" class="btn btn-danger btn-block">Delete</button>
                        </form>
                    </td>
                <?php
                echo "</tr>";
                $i++;
            }
        ?>
        </tbody>
        </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>