<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <h3>Proyecto Web</h3>
      <hr>
      <img src="public/foto.jpg" alt="Profile Picture">
      <h3>Bruna Antelo Prado</h3>
      <ul>
        <li>Facebook <br><a href="https://www.facebook.com/univallesc" target="_blank"> Univalle  </a></li>
        <li>Instagram <br><a href="https://www.instagram.com/univalle_santacruz/" target="_blank"> Univalle </a></li>
        <li>Sociedad Cientifica <br><a href="https://www.instagram.com/isi_soc_cientifica/" target="_blank"> Univalle SC</a></li>
      </ul>
    </div>
    <div class="content">
      <div id="header">
        <?php require "views/header.php"?>
      </div>
      <div class="right-div">
        <h3>Llamaste al Controlador Categoria</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem excepturi asperiores quas doloremque, qui doloribus maxime vel iste provident fuga praesentium pariatur quasi. Modi ea aliquid officiis eum sed ad!</p>
      </div>
      <div id="footer">
        <?php require "views/footer.php"?>
      </div>
    </div>
  </div>
</body>
</html>
