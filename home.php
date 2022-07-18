<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="lth">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/master.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Welcome - <?php echo $_SESSION['username']?></title>
  </head>
  <body>
    <section>
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome  <?php echo $_SESSION['username']?> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">About</a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
      <div class="next">
        <h2>Top 10 Songs</h2>
        <button type="button" name="button" class="new" onClick="document.location.href='song_add1.php'">+ Add a New Song</button>
      </div>
      <div class="Song_list">
        <table>
          <tr>
            <th>Artwork</th>
            <th>Song</th>
            <th>Date of Release</th>
            <th>Artists</th>
            <th>Ratings</th>
          </tr>
          <!-- SONG 1 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/0pTAM-QDCjQ/maxresdefault.jpg" alt="asitwas" class="Song10"></td>
            <td>As It Was</td>
            <td>April 1, 2022</td>
            <td>Harry Styles</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 2 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/kTJczUoc26U/mqdefault.jpg" alt="stay" class="Song10"></td>
            <td>Stay</td>
            <td>July 9, 2021</td>
            <td>Justin Bieber, The Kid LAROI</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 3 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/h3h035Eyz5A/maxresdefault.jpg" alt="Unstoppable" class="Song10"></td>
            <td>Unstoppable</td>
            <td>Sept 28, 2021</td>
            <td>Sia</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 4 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/Yx3K3g4CtoQ/hqdefault.jpg" alt="holdmyhand" class="Song10"></td>
            <td>Hold My Hand</td>
            <td>May 6, 2022</td>
            <td>Lady Gaga</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 5 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/GFy3fKalkmM/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLD0-rXsW9lnnAditKmtMCRrAUp-xQ" alt="coldheart" class="Song10"></td>
            <td>Cold Heart</td>
            <td>Sept 21, 2021</td>
            <td>Dua Lipa, Elton John</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 6 -->
          <tr>
            <td><img src="https://i.ytimg.com/vi/X1FMUlz13T4/maxresdefault.jpg" alt="shivers" class="Song10"></td>
            <td>Shivers</td>
            <td>Oct 16, 2021</td>
            <td>Ed Sheeran</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 7 -->
          <tr>
            <td><img src="https://i1.sndcdn.com/artworks-aenR6oI3KR4EjUXD-sDWGgw-t500x500.jpg" alt="bambam" class="Song10"></td>
            <td>Bam Bam</td>
            <td>May 11, 2022</td>
            <td>Camila Cabello, Ed Sheeran</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 8 -->
          <tr>
            <td><img src="https://miro.medium.com/max/1400/1*hakRYnOITyX8fKtlD_eAcQ.jpeg" alt="Blindinglights" class="Song10"></td>
            <td>Bliinding lights</td>
            <td>Nov 29, 2020</td>
            <td>The Weeknd</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 9 -->
          <tr>
            <td><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP8rb6eqw9R3iVlYtPT8BvpPwHE-VPEstruDSwqpUk_sbojxbU7ivaS6sp4sifuBDzIqY&usqp=CAU" alt="don'tbeshy" class="Song10"></td>
            <td>Don't Be Shy</td>
            <td>Sept 14, 2021</td>
            <td>KAROL G, Tiësto</td>
            <td>rating section</td>
          </tr>
          <!-- SONG 10 -->
          <tr>
            <td><img src="https://images.indianexpress.com/2021/05/BTS.jpg" alt="BUtter" class="Song10"></td>
            <td>Butter</td>
            <td>May 21, 2021</td>
            <td>BTS</td>
            <td>rating section</td>
          </tr>

        </table>
      </div>
      <div class="next">
        <h2>Top 10 Artists</h2>
      </div>
      <div class="Song_list">
        <table>
      <tr>
        <th>Artists</th>
        <th>Date Of Birth</th>
        <th>List of Songs</th>
      </tr>
      <!-- ARTIST 1 -->
      <tr>
        <td>Harry Styles</td>
        <td>1 February 1994</td>
          <td>Sign of the Times, Two Ghosts, Kiwi</td>
      </tr>
      <!-- ARTIST 2 -->
      <tr>
        <td>BTS</td>
        <td>2013</td>
        <td>Dope, Spring Day, Dynamite</td>
      </tr>
      <!-- ARTIST 3 -->
      <tr>
        <td>Justin Bieber</td>
        <td> 1 March 1994</td>
        <td>Justice, Changes, Purpose</td>
      </tr>
      <!-- ARTIST 4 -->
      <tr>
        <td>Ed Sheeran</td>
        <td>17 February 1991</td>
        <td>Shape of You, Perfect, Photograph</td>
      </tr>
      <!-- ARTIST 5 -->
      <tr>
        <td>Taylor Swift</td>
        <td>13 December 1989</td>
        <td>Evermore, Folklor, Bad Bloode</td>
      </tr>
      <!-- ARTIST 6 -->
      <tr>
        <td>Dua Lipa</td>
        <td>22 August 1995</td>
        <td>One Kiss, Don't Start Now, Levitating</td>
      </tr>
      <!-- ARTIST 7 -->
      <tr>
        <td>Bille Eilish</td>
        <td>18 December 2001</td>
        <td>Ocean Eyes, Watch, Bad Guys</td>
      </tr>
      <!-- ARTIST 8 -->
      <tr>
        <td>Bruno Mars</td>
        <td>8 October 1985</td>
        <td>That's What I like, Grenade, Count on me</td>
      </tr>
      <!-- ARTIST 9 -->
      <tr>
        <td>Ariana Grande</td>
        <td>26 June 1993</td>
        <td>Break free, Bang Bang, Problem</td>
      </tr>
      <!-- ARTIST 10 -->
      <tr>
        <td>Lady Gaga</td>
        <td>28 March 1986</td>
        <td>The Edge Of Glory, Born This Way, Paparazzi</td>
      </tr>
        </table>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
