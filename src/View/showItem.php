<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Item</title>
</head>
<body>  
   <main>  
    <h1>Item <?= $item['title'] ?></h1>  
    <ul>  
        <li>Id : <?= $item['id'] ?></li> 
    </ul>  
    <a href='index.php?route=items'>Back to list</a>
   </main>  
</body> 
</html>