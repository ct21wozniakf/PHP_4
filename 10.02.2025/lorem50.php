<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border:2px solid black;
        }
        #OP{color:red;
        font-style:italic;}
        </style>
</head>
<body>
    <fieldset>
        <legend>Lorem50</legend>
 <?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){?>
 <p>Oto wpisany tekst</p>
 

 <p id="OP"><?php echo $_POST['lorem']?></p>
 <?php } else {?>
    <form method="post">
        <textarea name="lorem" cols="50" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro delectus id labore dicta magnam rerum, quo totam ullam, iusto sed aperiam ipsum ea atque facilis, repellendus aut distinctio eos voluptatum a est vel. Obcaecati similique reiciendis iste esse eos cupiditate ab dolorum deleniti pariatur qui, aspernatur corrupti quis, nihil voluptatum.</textarea><br>




<input type=submit value="Wyslij" >
 </form>
 <?php } ?>
</fieldet>
</body>
</html>