<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="flex-container">
        <div class="header">     
               <?php include 'logo.inc.php' ?> 
            <h1>
               <?php  echo $p  ?>
            </h1>        	   
        </div>       
     
        <div class="about_me">
            <div class="data">
                <div class="myImg">
                    <img src="/img/code.jpeg">                   
                </div>
                <div class="fullname">
                    <p>
                        Добрый день, меня зовут <?php echo $name, ' ', $surname ?>. Я из города <?php echo $city ?>.
                        Годиков мне немного, всего <?php echo $age ?>.
                    </p>
                </div>
            </div>
            <div class="knowledge">
                <code class="code">
                    <?php  include 'knowledge.inc.php'; ?>
                </code>
                <h1>
                    <?php   echo $a, ' ', $b, ' ', $c; ?>
                </h1>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>
    </div>
</body>
</html>
