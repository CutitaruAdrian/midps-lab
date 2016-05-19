<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> A BLOG ADD post</title>
    <link rel="stylesheet" href="../style.css">
   
</head>

<body>
<table border="0" style="width:40%" align="center" bgcolor="white">
<tr>
<td>
     <div class="container">
         <h1> A Style Add post! </h1>
         <div>
         <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
         <label> Denumirea <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required >  </label> <br><br>
         <label> Data <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required  > </label> <br><br>
         <label> Continut <textarea class="form-item" name="content" required> <?=$article['content']?></textarea>  </label> <br>
         <input type="submit" value="Salvati" class="btn"   > 
         </form> 
         </div>
</div>
</td>
</tr>
</table>
</body>
</html>