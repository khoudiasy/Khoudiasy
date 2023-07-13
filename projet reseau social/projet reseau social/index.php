<?php 
include 'header.php';
 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">DASH</a>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">w
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Notification</a>
   </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">S'identifier</a>
          <a class="dropdown-item" href="inscrip.php">Creer un Compte</a>
         
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<?php 

        $sql = "SELECT * FROM posts ORDER BY id_post DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
                $id_p = $row['id'];
                $titre = $row['titre'];
                $contenu = $row['contenu'];
                $photo = $row['photo'];
                $like = 0; 
                $commentaire = array();
                
                echo '<div class="posts">';
                echo '<h4>' . $titre . '</h4>';
                echo '<p>' . $contenu . '</p>';
                if (!empty($photo)) {
                    echo '<img src="uploads/' . $photo . '" 
class="img-fluid" alt="Image">';
                }
                echo '<div class="actions">';
                echo '<button class="btn btn-secondary">J\'aime (' . $aime . ')</button>';
                echo '<button class="btn btn-secondary">Commenter (' . count($comment) . ')</button>';
                echo '<button class="btn btn-secondary">Partager</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Aucun posts disponible.';
        }
        
 ?>
 <?php 
include 'footer.php';
  ?>






















