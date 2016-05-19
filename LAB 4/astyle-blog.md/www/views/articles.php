<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="icon.jpg" />
 <head>
 <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8" />
  <title>A BLOG</title>
  <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
 <div class = "container">
      
<a href='index.php'><img src='/logo.jpg' Style='width:40%;height:40%;'></a>

      <div>

<table border="0" style="width:40%" align="center"  bgcolor="white" ;>
  <tr>
    <td>
    
          
        <?php foreach ($articles as $a ):?> 
        
        <div class="article">
          <h2><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h2>
          
          <p><?=$a['content']?></p>
          <em>|   Posted: <?=$a['date']?>   | </em> <br>
          <img src='/space.jpg' > <br>
        </div>
      <?php endforeach ?>
      </div>
    </div>
  



    </td>    
  </tr> 
</table>

  
 </body>
<br> <font color="white"> A STYLE Prod. &copy; </font>
</html>