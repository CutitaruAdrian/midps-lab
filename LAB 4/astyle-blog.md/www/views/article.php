<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="icon.jpg" />
 <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>A BLOG</title>
  
  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
    <div class = "container">
      <a href='index.php'><img src='/logo.jpg' Style='width:40%;height:40%;'></a>
      <div>
       

       <table border="0" style="width:40%" align="center" bgcolor="white">
  <tr>
    <td>

        <div class="article">
          <h2><?=$article['title']?></h2>
          <img src='/spatiere.jpg' width="80%" > <br>

          <p><?=$article['content']?></p>
          <br><br><em>Posted: <?=$article['date']?> </em>
        </div>
      </div>
    </div>

    </td>    
  </tr> 
</table>


  
 </body>
 <br> <font color="white"> A STYLE Prod. &copy; </font>
</html>