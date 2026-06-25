<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id="monbouton"></button>
    <div id="resultat"></div>
    <script>
        let monBouton = document.getElementById("monbouton");
        monBouton.addEventListener("click", "chargerProduit");
        async function chargerProduit() {
            try {
                const response = await fetch("http://10.1.0.199/api-alex/index.php/products");
                if (!response.ok === false) {
                    throw new Error("erreur serveur");
                } else {
                    const produit = await response.json();
                    let html = `<ul>`;
                    for(let p of produit){
                        html += `<li>nom :${p.name}</li>
                        <li>prix :${p.price}</li>`;
                    }
                    html += `</ul>`;

                }
            } catch (error) {
                console.log(error);
            }
        }
    </script>
</body>

</html>