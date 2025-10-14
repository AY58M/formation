
fetch('data.json')
    .then(response => response.json())
    .then(data => {
        const articles = data;
        console.log(articles); // Utilise les articles ici
        // Ecrivez votre code ici
        let gallery = document.querySelector(".gallery");

        function generateGallery()
        {
            for(let i=0; i<articles.length; i++)
        { 
            // Création du conteneur
            let divTemp = document.createElement("div");
            divTemp.style.border = "1px solid black";
            // Création du titre
            let titre = document.createElement("h2");
            titre.textContent = articles[i].titre;
            // Création du paragraphe
            let paragraphe = document.createElement("p");
            paragraphe.textContent = articles[i].paragraphe;
            // Création de la date
            let date = document.createElement("p");
            date.textContent = articles[i].dateSortie;

            // Liaison différents élément
            divTemp.appendChild(titre);
            divTemp.appendChild(paragraphe);
            divTemp.appendChild(date);
            gallery.appendChild(divTemp);
            }

        }
        generateGallery();
    })
    .catch(error => console.error('Erreur de chargement JSON:', error));

let header = document.querySelector(".header");
let main = document.querySelector("#main");

console.log(header);
console.log(main);

function generateNav() {
    // Création de la balise nav
    let nav = document.createElement("nav");
    nav.style.display = "flex";
    nav.style.justifyContent = "space-between";
    nav.style.alignItems = "center";
    nav.style.color = "red";

    // Création du titre
    let titre = document.createElement("h1");
    console.log(titre);
    titre.textContent = "Titre";
    nav.appendChild(titre);

    // Création de la liste
    let liste = document.createElement("ul");
    nav.appendChild(liste);
    liste.style.display = "flex";
    liste.style.gap = "20px";

    // Création des élément de la liste
    let array = ["Accueil", "Informations", "Contact", "Connexion"];
    for (let i = 0; i < array.length; i++) {
        let elementTemp = document.createElement("li");
        elementTemp.textContent = array[i];
        liste.appendChild(elementTemp);
    }

    let liste2 = `
    <ul>
       <li>${array[0]}</li>
       <li>${array[0]}</li>
       <li>${array[0]}</li> 
    </li>`

    main.innerHTML = liste2;





    // On lie notre navigation au DOM
    header.appendChild(nav);

}

generateNav();

