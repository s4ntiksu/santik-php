let audio = new Audio('../$werve - young.mp3'); // Замените 'audio.mp3' на путь к вашему аудиофайлу

document.getElementById("openModalBtn").addEventListener("click", function() {
  document.getElementById("myModal").style.display = "block";
});

document.getElementsByClassName("close")[0].addEventListener("click", function() {
  document.getElementById("myModal").style.display = "none";
});

document.getElementById("enableAudioBtn").addEventListener("click", function() {
  audio.play();
});
