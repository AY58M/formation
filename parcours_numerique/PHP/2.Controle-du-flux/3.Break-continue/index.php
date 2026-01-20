<h1>
    PHP : Break et continue
</h1>

<?php

// le break permet de casser et de sortir d'une boucle

// *Je compte jusque 15, et je casse la boucle à 7

for ($i=1; $i<=15; $i++) {
    echo "tour n° $i.<br>";
    if ($i==7) {
        break;
    }
    
}

echo"<hr>";

// le continue permet d'ignorer un tour de boucle

for ($i=1; $i<=15; $i++) {

    if ($i==7) {
        continue;
    }

    echo "tour n° $i.<br>";
    
}

?>