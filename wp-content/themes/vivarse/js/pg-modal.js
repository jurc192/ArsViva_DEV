/* Script that opens a "full screen" version of image, on single.php */

var pg_modal = document.getElementById('pg-modal');
var modal_img = document.getElementById('pg-modal-image');

function open_modal(src) {
  pg_modal.style.display = "block";
  modal_img.src = src;

  pg_modal.addEventListener("click", close_modal);
}

function close_modal(event) {
  console.log(event.target.tagName);
  if (event.target.tagName != 'IMG') {

    pg_modal.style.display = "none";
    pg_modal.removeEventListener("click", close_modal);

  }
}
