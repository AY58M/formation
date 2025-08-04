<h1>PHP : Les opérateurs</h1>
<?php

/**
 * 1. C’est quoi un opérateur ?
 * Un opérateur permet de faire des calculs, des comparaisons, ou de combiner des valeurs.
 */

/**
 * 2. Les opérateurs arithmétiques (calculs)
 * | Opérateur | Exemple   | Résultat       |
 * | --------- | --------- | -------------- |
 * | `+`       | `$a + $b` | Addition       |
 * | `-`       | `$a - $b` | Soustraction   |
 * | `*`       | `$a * $b` | Multiplication |
 * | `/`       | `$a / $b` | Division       |
 * | `%`       | `$a % $b` | Reste (modulo) |
 */

$a = 10;
$b = 3;
echo $a + $b; // 13

/**
 * 3. Les opérateurs d’affectation (raccourcis utiles)
 * | Opérateur | Signifie                    |
 * | --------- | --------------------------- |
 * | `+=`      | `$a += 1;` → `$a = $a + 1;` |
 * | `-=`      | `$a -= 2;` → `$a = $a - 2;` |
 * | `*=`      | `$a *= 3;` → `$a = $a * 3;` |
 */

/**
 * 4. Les opérateurs de comparaison (pour tester)
 * | Opérateur | Exemple     | Signification        |
 * | --------- | ----------- | -------------------- |
 * | `==`      | `$a == $b`  | Égal (valeur)        |
 * | `===`     | `$a === $b` | Égal (valeur + type) |
 * | `!=`      | `$a != $b`  | Différent            |
 * | `<`       | `$a < $b`   | Inférieur            |
 * | `>`       | `$a > $b`   | Supérieur            |
 * 
 * ⚠️ == compare juste la valeur, === compare aussi le type.
 */

/**
 * 5. Les opérateurs logiques (utile pour les conditions)
 * | Opérateur | Exemple             | Signification |           |   |            |    |
 * | --------- | ------------------- | ------------- | --------- | - | ---------- | -- |
 * | `&&`      | `$a > 0 && $b < 10` | ET            |           |   |            |    |
 * | \`        |                     | \`            | \`\$a > 0 |   | \$b < 10\` | OU |
 * | `!`       | `!true`             | NON (inverse) |           |   |            |    |
 */