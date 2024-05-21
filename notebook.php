<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Styling/header&footer.css" />
  <link rel="stylesheet" href="./Styling/notebook.css" />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <title>Notebook</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo"><a href="index.php">CI</a></div>
      <ul>
        <li><a href="AI gen.php">AI Generator</a></li>
        <li><a href="Pricing.php">Pricing</a></li>
        <li><a href="notebook.php">NoteBook</a></li>
        <li><a href="recipe.php">Recipes</a></li>
      </ul>
    </nav>
    <div class="login">
      <a href="contact.php">Contact Us</a>
    </div>
  </header>
  <!--------------------- Title Code ------------------------------------------------>
  <div class="notebook-1">
    <h1><span>Note</span>book</h1>
  </div>
  <!--------------------- Form Code ------------------------------------------------>
  <?php 
    include "connect.php";
    if(isset($_POST["submit"])){
      $title=$_POST["title"];
      $desc=$_POST["desc"];
      $sql="INSERT INTO `notes`(`title`, `description`) VALUES ('$title','$desc')";
      $res=mysqli_query($conn ,$sql);
      if(!$res){
        die("Query Failed: " . mysqli_error($conn));
      }
    }
    ?>
  <!-- Form Code -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="form" method="POST">
          <div class="mb-3">
            <input type="text" class="form-control" id="Title" placeholder="Enter Title" name="title"
              aria-label="Title" />
          </div>
          <div class="mb-3">
            <textarea class="form-control" id="desc" rows="3" placeholder="Enter Your Description"
              name="desc" aria-label="Description"></textarea>
          </div>
          <div class="mb-3 text-center">
            <button type="submit" class="btn btn-primary" name="submit">Add Note</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="notes-container">
    <h1>Your<span> Notes</span><h1>
  <div class="row">
    <!-- Assuming each note is represented by a div with the class 'card' -->
    <?php 
      $sql="SELECT * FROM `notes`";
      $res=mysqli_query($conn,$sql);
      $noNotes=true;
      while($fetch=mysqli_fetch_assoc($res)){
        $noNotes=false;
        echo '<div class="card">
                <div class="card-body">
                  <h5 class="card-title">'.$fetch["title"].'</h5>
                  <p class="card-text">'.$fetch["description"].'</p>
                  <a href="./delete.php?id='.$fetch["sno"].'" class="delete-btn">Delete</a>
                </div>
              </div>';
      }
      if($noNotes){
        echo '<div class="card">
                <div class="card-body">
                  <h5 class="card-title">Message:</h5>
                  <p class="card-text">No Notes </p>
                </div>
              </div>';
      }
    ?>
  </div>
 </div>

  <!--------------------- footer Code ------------------------------------------------>
  <footer>
    <hr />
    <div class="lower-footer">
      <p class="copyright">&copy; 2024 Culinary AI. All rights reserved</p>
      <div class="social-media">
        <a href="https://www.instagram.com/culinary_.ai?igsh=MWhzbndydTE0N2lv">Instagram</a>
        <a href="https://youtube.com/@mr-culinaryai?si=Jqo-7QQYXnv0BeIm">Youtube</a>
      </div>
    </div>
  </footer>
</body>

</html>