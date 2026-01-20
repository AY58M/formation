<!DOCTYPE html>
<head>
    <style>
        table, tr, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
 <?php

// function genererTableau ($lignes, $colonnes){

//     echo "<table>"; 
//     for ($i = 0; $i<$lignes; $i++) {
//         echo "<tr>";
//         for ($y=0; $y<$colonnes; $y++) {
//             echo "<td></td>";
//         }
//         echo "</tr>";
//     }
//     echo "</tables>";
// }

function genererGrilleEtoile ($lignes, $colonnes){

 for ($i = 0; $i<$lignes; $i++) {
       
        for ($y=0; $y<$colonnes; $y++) {
            echo "*";
        }
        echo "</tr>";
    }
}



 ?>

 
</body>
</html>