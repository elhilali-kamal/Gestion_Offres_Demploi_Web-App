<?php
include('../config.php');
session_start();
if (!isset($_SESSION['id'])) {
  header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>UCD Admin</title>

  <link href="../static/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet" />
  <link href="../static/css/style.css" rel="stylesheet" />
  <link href="../static/css/style2.css" rel="stylesheet" />


  <link rel="stylesheet" type="text/css" href="../static/css/font-awesome.min.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="../static/js/jquery-2.1.1.min.js"></script>
  <script src="../static/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />


</head>


<body>

  <form action="../controller.php" method="POST">
    <div id="header" class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand navbar-left"></a>
              </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <menu id="Menu1" runat="server" Orientation="Horizontal" RenderingMode="List" IncludeStyleBlock="false" StaticMenuStyle-CssClass="nav navbar-nav" DynamicMenuStyle-CssClass="dropdown-menu">
                  </menu>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                  <li class="logout">
                    <a><button type="submit" name="logout" value="logout" class="btn btn-danger">
                        Logout
                      </button></a>

                  </li>
                </ul>

              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </form>


  <div class="container">
    <div class="table-title">
      <div class="row">
        <h1>Liste des offers</h1>
        <div class="row">
          <h2>
            <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#mymodal">
              <i class="fa fa-plus"> Add New</i>
            </button>
          </h2>


          <table class="table table-hover table-striped text-center">
            <tr>
              <th hidden>ID</th>
              <th class="text-center">Title</th>
              <th class="text-center">Description</th>
              <th class="text-center">Date</th>
              <th class="text-center">Picture</th>
              <th class="text-center">Action</th>
            </tr>
            <?php
            $result = mysqli_query($conn, "Select * from offer");
            if ($result) {
              while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id_offer'];
                $title = $row['title'];
                $description = $row['description'];
                $date = $row['date'];
                $picture = $row['picture'];

            ?>
                <tr>
                  <td hidden><?php echo $id; ?></td>
                  <td><?php echo $title; ?></td>
                  <td><?php echo $description; ?></td>
                  <td><?php echo $date; ?></td>
                  <td> <a type="" data-toggle="modal" data-target="#myModal<?php echo $id; ?>" style="color: #d43f3a; cursor : pointer ;">
                      <?php echo ($picture == "") ? 'No picture' : $picture ?></a></td>
                  <td>

                    <a class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modaledit<?php echo $id; ?>">Edit</a>
                    <a href="../controller.php?delete=<?php echo $id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete ?')">Delete</a>
                  </td>

                <tr>
                </tr>
                <div id="myModal<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-body">
                        <img src="../static/img/<?php echo $picture ?>" class="img-responsive">
                      </div>
                    </div>
                  </div>



                </div>
                <div id="modaledit<?php echo $id; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title">Update Information</h4>
                      </div>

                      <div class="modal-body">
                        <form action="../controller.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                            <label>Title:</label>
                            <input type="hidden" name="id" value="<?php echo $id; ?>" />

                            <input type="text" class="form-control" name="title" value="<?php echo $title; ?>" />
                          </div>

                          <div class="form-group">
                            <label>Description:</label>

                            <input type="text" class="form-control" name="description" value="<?php echo $description; ?>" />
                          </div>

                          <div class="form-group">
                            <label>Date:</label>

                            <input type="date" class="form-control" name="date" value="<?php echo $date; ?>" required="1" />
                          </div>

                          <div class="form-group">
                            <label>Picture:</label>
                            <input type="file" class="form-control" name="picture" value="<?php echo $picture; ?>" />
                          </div>

                          <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="update">


                              update
                            </button>
                          </div>
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                          Close
                        </button>
                      </div>
                    </div>
                  </div>

              <?php
              }
            }
              ?>
                </div>

          </table>
        </div>


        <div id="mymodal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add New Details</h4>
              </div>
              <div class="modal-body">
                <form action="../controller.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Title:</label>
                    <input type="text" class="form-control" name="title" required="1" />
                  </div>

                  <div class="form-group">
                    <label>Description:</label>
                    <input type="text" class="form-control" name="description" />
                  </div>

                  <div class="form-group">
                    <label>Date:</label>
                    <input type="date" class="form-control" name="date" required="1" />
                  </div>

                  <div class="form-group">
                    <label>Picture:</label>
                    <input type="file" class="form-control" name="picture" />
                  </div>

                  <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="add">
                      Save
                    </button>
                  </div>
                </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container">

      <div class="table-title">

        <div class="row">
          <div class="col md-12">
            <h1>Liste des candidats</h1>
            <table class="table table-hover table-striped text-center">
              <tr>
                <th hidden>ID</th>
                <th class="text-center">Nom Complet</th>
                <th class="text-center">Email</th>
                <th class="text-center">Telephone</th>
                <th class="text-center">Lettre</th>
                <th class="text-center">Cv</th>
                <th class="text-center">Action</th>
              </tr>
              <?php
              $result = mysqli_query($conn, "Select * from candidat");
              if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                  $idCandidat = $row['id_candidat'];
                  $nom = $row['nomComplet'];
                  $email = $row['email'];
                  $telephone = $row['telephone'];
                  $lettre = $row['lettre'];
                  $cv = $row['cv'];
              ?>
                  <tr>
                    <td hidden><?php echo $idCandidat; ?></td>
                    <td><?php echo $nom; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $telephone; ?></td>
                    <td> <a type="" data-toggle="modal" data-target="#myModal<?php echo $idCandidat; ?>" style="color: #d43f3a; cursor : pointer ;">
                        <?php echo ("$lettre" == "") ? "No lettre" : $lettre ?> </a></td>

                    <td> <a type="" data-toggle="modal" data-target="#myModal1<?php echo $idCandidat; ?>" style="color: #d43f3a; cursor : pointer ;">
                        <?php echo ($cv == "") ? "No cv" : $cv ?></a></td>


                    <td>

                      <a href="../controller.php?deleteCandidat=<?php echo $idCandidat; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure To Delete ?')">Delete</a>
                    </td>

                  <tr>
                  </tr>

                  <div id="myModal<?php echo $idCandidat; ?>" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <a href="../static/pdf/<?php echo $lettre; ?>" target="_blank" class="img-responsive">
                            <embed src="../static/pdf/<?php echo $lettre; ?>" frameborder="0" width="100%" height="800px">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div id="myModal1<?php echo $idCandidat; ?>" class="modal fade" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-body">
                          <a href="../static/pdf/<?php echo $cv; ?>" target="_blank" class="img-responsive">
                            <embed src="../static/pdf/<?php echo $cv; ?>" frameborder="0" width="100%" height="900px">
                        </div>
                      </div>
                    </div>
                <?php
                }
              } ?>

                  </div>
          </div>
        </div>
      </div>
      </table>

      </section>


      </main>


</body>

</html>