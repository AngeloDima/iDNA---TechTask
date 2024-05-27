let arrayChiaveValore = [
    { Titolo: "JR Surfboards The Donny Stoker Yellow/Green Rail Fade", Descrizione: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et id architecto earum debitis. Quod veritatis laboriosam vitae. Voluptatem, id veritatis ut, beatae, debitis facilis ex quod voluptate unde animi iure!", Features: "Features1", Dimensions: "Dimensions1", Price: "100", img1: "http://lepistina.com/projects/SurfsCo/img/surf-board-1.png", img2: "https://shop.citybeachboardshop.com/prodotti/13074/XXL/13074foto.jpg", img3: "https://shop.citybeachboardshop.com/prodotti/16338/XXL/16338foto.jpg" },
    { Titolo: "Surfboards The Big Heart Red/Brown Rail Fade", Descrizione: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et id architecto earum debitis. Quod veritatis laboriosam vitae. Voluptatem, id veritatis ut, beatae, debitis facilis ex quod voluptate unde animi iure!", Features: "Features2", Dimensions: "Dimensions2", Price: "200", img1: "http://lepistina.com/projects/SurfsCo/img/surf-board-4.png", img2: "https://media.istockphoto.com/id/514622028/it/foto/piccolo-su-albero-di-procione.jpg?s=612x612&w=0&k=20&c=v-XYkYMyHugalZKoNTOiuc8ITjy_W8y1r3cVed1tV0o=", img3: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2B1hpyZH2XXzAUynEvCa4qm0m_8Ze5PopXcqOcLGSww&s" },
    { Titolo: "Surfboards The Big Heart Red/Brown Rail Fade", Descrizione: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Et id architecto earum debitis. Quod veritatis laboriosam vitae. Voluptatem, id veritatis ut, beatae, debitis facilis ex quod voluptate unde animi iure!", Features: "Features2", Dimensions: "Dimensions2", Price: "300", img1: "http://lepistina.com/projects/SurfsCo/img/surf-board-3.png", img2: "https://media.istockphoto.com/id/514622028/it/foto/piccolo-su-albero-di-procione.jpg?s=612x612&w=0&k=20&c=v-XYkYMyHugalZKoNTOiuc8ITjy_W8y1r3cVed1tV0o=", img3: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2B1hpyZH2XXzAUynEvCa4qm0m_8Ze5PopXcqOcLGSww&s" },

];

const titoloElement = document.getElementById("Titolo");
const descrizioneElement = document.getElementById("Descrizione");
const featuresElement = document.getElementById("Features");
const dimensionsElement = document.getElementById("Dimensions");
const priceElement = document.getElementById("Price");
const descriptionOption = document.getElementById("DescriptionOption");
const featuresOption = document.getElementById("FeaturesOption");
const dimensionsOption = document.getElementById("DimensionsOption");
const img1Element = document.getElementById("img1");
const img2Element = document.getElementById("img2");
const img3Element = document.getElementById("img3");
const box1Element = document.getElementById("box1");
const box2Element = document.getElementById("box2");
const indexElement = document.getElementById("Index");
const indexElement2 = document.getElementById("Index2");
let currentIndex = 0;

function mostraElementoCorrente(option) {
    const element = arrayChiaveValore[currentIndex];
    titoloElement.textContent = element.Titolo;
    descrizioneElement.textContent = option === "Description" ? element.Descrizione : "";
    featuresElement.textContent = option === "Features" ? element.Features : "";
    dimensionsElement.textContent = option === "Dimensions" ? element.Dimensions : "";
    priceElement.textContent = '$' + element.Price.toString();
    img1Element.src = element.img1;
    img2Element.src = element.img2;
    img3Element.src = element.img3;
    indexElement.textContent = `${currentIndex + 1}/${arrayChiaveValore.length}`;
    indexElement2.textContent = `${currentIndex + 1}/${arrayChiaveValore.length}`;
}

function swapImages(imgElement1, imgElement2) {
    const tempSrc = imgElement1.src;
    imgElement1.src = imgElement2.src;
    imgElement2.src = tempSrc;
}

mostraElementoCorrente("Description");

descriptionOption.addEventListener("click", function() {
    mostraElementoCorrente("Description");
});

featuresOption.addEventListener("click", function() {
    mostraElementoCorrente("Features");
});

dimensionsOption.addEventListener("click", function() {
    mostraElementoCorrente("Dimensions");
});

document.querySelectorAll('.btnC').forEach(button => {
    button.addEventListener('click', function() {
        currentIndex = (currentIndex + 1) % arrayChiaveValore.length;
        mostraElementoCorrente("Description");
    });
});

document.querySelectorAll('.btnC2').forEach(button => {
    button.addEventListener('click', function() {
        currentIndex = (currentIndex - 1 + arrayChiaveValore.length) % arrayChiaveValore.length;
        mostraElementoCorrente("Description");
    });
});

box1Element.addEventListener("click", function() {
    swapImages(img1Element, img2Element);
});

box2Element.addEventListener("click", function() {
    swapImages(img1Element, img3Element);
});
