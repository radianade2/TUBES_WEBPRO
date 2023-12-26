<script>
  var images = ["https://images.pexels.com/photos/60013/desert-drought-dehydrated-clay-soil-60013.jpeg?auto=compress&cs=tinysrgb&w=600", "ghttps://images.pexels.com/photos/7796619/pexels-photo-7796619.jpeg?auto=compress&cs=tinysrgb&w=600", "https://images.pexels.com/photos/1710352/pexels-photo-1710352.jpeg?auto=compress&cs=tinysrgb&w=600"];
  var currentImage = 0;
  
  function changeImage() {
    document.getElementById("gambar-rotasi").src = images[currentImage];
    currentImage = (currentImage + 1) % images.length;
  }
  
  setInterval(changeImage, 5000); // Ganti gambar setiap 5 detik
</script>
