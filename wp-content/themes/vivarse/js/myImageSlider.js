/* Script that runs banner image slider */
var slides = document.querySelectorAll('.image_slide');
var i = 0;

// NAREDI DA SE TO KLIČE SAMO NA FRON-PAGEu!!!
// Set initial showing image
slides[0].className = 'image_slide showing';
setInterval(nextSlide, 5000);

function nextSlide() {

  slides[i].className = 'image_slide';
  i = (i+1)%slides.length;
  slides[i].className = 'image_slide showing';
}
