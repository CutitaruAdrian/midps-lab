<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="icon.jpg" />
 <head>
  <meta charset="utf-8" />
  <title>    A Style ADMIN page</title>
  <!--[if IE]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
 


    <table  border="0" style="width:40%" align="center" bgcolor="lightgrey">  
     <tr>
     <td>

   <div class = "container">
      <h1>A Style Admin Page</h1>
     
     <a href="index.php?action=add">  Adauga o Postare </a> <br>
       <table class="admin-table">
         <tr>
             <th> Data </th>
             <th> Post Name </th>
             <th> </th>
             <th> </th>
         </tr>
         <?php foreach($articles as $a ):?> 
        
         <tr> 
              <td> <?=$a['date']?> </td>
              <td> <?=$a['title']?> </td>
            <!--  <td> <a href="index.php?action=edit&id=<?=$a['id']?>">Editati</a>
              </td>
              <td>  <a href="index.php?action=delete&id=<?=$a['id']?>">Stergeti</a>
              </td> --> 
              </tr>
          <?php endforeach ?>
          </table>
         </div>
  

     </td>
    </tr>
  </table>

 </body>
</html>