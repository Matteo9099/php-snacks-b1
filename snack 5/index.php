<!-- 
    Prendere un testo abbastanza lungo, contenente diverse frasi. Prendere il testo e suddividerlo in tanti paragrafi ogni volta in cui si incontrerà un punto. 
-->


<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse non tenetur, sit ratione dolore consequuntur velit repudiandae incidunt obcaecati. Asperiores tenetur labore iusto magnam necessitatibus distinctio iure sunt, ad sequi.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi ad nobis, ipsum illo culpa placeat vero. At unde provident repellat, nostrum natus tenetur. Perferendis nemo distinctio asperiores maxime ullam natus!
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci nostrum vitae consequuntur molestiae! Quod sunt quae vel! Consequuntur, totam amet maxime blanditiis, provident recusandae molestiae culpa laboriosam dignissimos repellendus consequatur.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aliquam repudiandae vitae ratione neque cum, ab eveniet nam eius mollitia hic dolorem consectetur delectus atque minima ipsum esse laudantium architecto."
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>

<?php
    $array_stringa = explode('.', $text);

    var_dump($array_stringa);
?>
    
</body>
</html>