<?php
//CONNECTING
$insert = false;
$servername = "localhost";
$username ="root";
$password = "";
$database = "cwh_music_app";

$con = mysqli_connect($servername, $username, $password, $database);
if(!$con){
  echo "failed";
}
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $songname = $_POST["songname"];
  $date = $_POST["date"];
  $imgurl = $_POST["imgurl"];
//INSERTION OF DATA
  $sql = "INSERT INTO `songs` (`songname`, `date`, `imgurl`) VALUES ('$songname', '$date', '$imgurl')";
  $result = mysqli_query($con, $sql);
if($result){
  $insert = true;
header("Location: song_add.php");

}
else{
  echo 'div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>FAILDED</strong> To add info.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div><br>';
}

}
// header("location:song_add.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" href="css/master.css"> -->

    <style>
      img{
        width:100px;
        height:100px;
      }
      /* header .nav{
        width: 100%;
        padding: 15px 0;
        background: #000;
        display: flex;
        justify-content: space-between;
      }
      header .nav a{
        text-decoration: none;
        color: #fff;
        margin-left: 20px;
      } */
    </style>

    <title>Song Addition</title>
  </head>
  <body>

  <!-- EDIT MODAL -->

<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit Modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Song</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/delX/song_add.php" method="post">

              <div class="mb-3">
                <label for="songname" class="form-label">Song Name</label>
                <input type="text" class="form-control" id="songnameEdit" name="songnameEdit" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Release date</label>
                <input type="text" class="form-control" id="dateEdit" name="dateEdit" placeholder="YYYY-MM-DD">
              </div>
              <div class="mb-3">
                  <label for="imgurl" class="form-label">Artwork</label>
                  <input type="text" class="form-control" placeholder="Add Img URL" name="imgurlEdit" id="imgurlEdit">
              </div>

              <button type="submit" onclick="alert('Song Updated')" class="btn btn-primary">Update</button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!-- NAV BAR -->
  <?php require 'partials/nav.php' ?>
      <?php
      if($insert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      ?>
        <div class="container mt-2 w-50">
          <h3>Add A New Song</h3>
            <form action="/delX/song_add.php" method="post">

                <div class="mb-3">
                  <label for="songname" class="form-label">Song Name</label>
                  <input type="text" class="form-control" id="songname" name="songname" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="date" class="form-label">Release date</label>
                  <input type="text" class="form-control" id="date" name="date" placeholder="YYYY-MM-DD">
                </div>
                <div class="mb-3">
                    <label for="imgurl" class="form-label">Artwork</label>
                    <input type="text" class="form-control" placeholder="Add Img URL" name="imgurl" id="imgurl">
                </div>

                <button type="submit" onclick="alert('New Song Added')" class="btn btn-primary">Submit</button>
              </form>
        </div>
      <div class="container w-30">
      <table class="table" id="myTable">
        <thead>
          <tr>
            <th scope="col">Songs</th>
            <th scope="col">R. Date</th>
            <th scope="col">Artwork</th>
            <th scope="col">Artists</th>
          </tr>
        </thead>
        <tbody>
        <?php
        $user_id = $_SESSION['user_id'];
          $sql = "SELECT * FROM `songs` WHERE user_id = '$user_id'";
          $result = mysqli_query($con, $sql);
          while($row = mysqli_fetch_assoc($result)){
            $song_id=$row['songs_id'];
             ?>
          <tr>
           <td><?php echo $row['songname'];?> </td>
           <td><?php echo $row['date']?></td>
           <td><img src="<?php echo $row['imgurl']?>"/></td>
           <?php 
              $sql1="SELECT * FROM `artist` INNER JOIN `songs` ON `artist`.`songs_id`=`songs`.`songs_id`";
              $result1 = mysqli_query($con, $sql1);?>
            <td><?php
              while($row1 = mysqli_fetch_assoc($result1)){
                if( $row1['songs_id'] == $song_id)
                    echo $row1['artist_name'] ."<br>";
                
              }
              ?></td>
          </tr>
          <?php
          }
        ?>
        </tbody>
      </table>
      </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
       } );
    </script>
    <!-- <script>
      edits = document.getElementsByClassName('edit')
      Array.from(edits).forEach((element)=>{
        element.addEventListener("click", (e)=>{
          console.log("edit", );
          tr = e.target.parentNode.parentNode;
          songname = tr.getElementsByTagName("td")[0].innerText;
          date = tr.getElementsByTagName("td")[1].innerText;
          imgurl = tr.getElementsByTagName("td")[2].id;
          console.log(songname);
          console.log(date);
          console.log(imgurl);
          songnameEdit.value = songname;
          dateEdit.value = date;
          imgurlEdit.value = imgurl;
          $('#editModal').modal('toggle');

        })
      })
    </script> -->
  </body>
</html>
