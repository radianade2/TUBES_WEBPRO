// var activeImage = 1;
// var nextImage = 1;

// setInterval(function() {
//     nextImage = nextImage + 1;
//     if(nextImage < 4) {
//         document.getElementById("img"+activeImage).classList.replace("visible", "hidden");
//         document.getElementById("img"+nextImage).classList.replace("hidden", "visible");
//         activeImage = nextImage;
//     } else {
//         document.getElementById("img"+activeImage).classList.replace("visible", "hidden");
//         document.getElementById("img"+nextImage).classList.replace("hidden", "visible");
//         activeImage = 4;
//         nextImage = 0;
//     }
// }, 1000);

let image = document.getElementById('image');
let images = ["https://images.pexels.com/photos/11298681/pexels-photo-11298681.jpeg", "https://images.pexels.com/photos/1735675/pexels-photo-1735675.jpeg",
              "https://images.pexels.com/photos/10774493/pexels-photo-10774493.jpeg","https://images.pexels.com/photos/672034/pexels-photo-672034.jpeg"];
function changeImage() {
    let random = Math.floor(Math.random() * 4);
    image.src = images[random];
}
// Inisialisasi gambar pertama saat halaman dimuat
changeImage();
// Ganti gambar setiap 800ms
setInterval(changeImage, 1500);
