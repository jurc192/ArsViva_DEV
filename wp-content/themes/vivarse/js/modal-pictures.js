var modal1 = document.getElementById('myModal1');
//var modal2 = document.getElementById('myModal2');
var modal3 = document.getElementById('myModal3');
var modal4 = document.getElementById('myModal4');
var modal5 = document.getElementById('myModal5');

var img1 = document.getElementById('myImg1');
//var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var img5 = document.getElementById('myImg5');

img1.onclick = function(){
    modal1.style.display = "block";
}
//img2.onclick = function(){
//    modal2.style.display = "block";
//}
img3.onclick = function(){
    modal3.style.display = "block";
}
img4.onclick = function(){
    modal4.style.display = "block";
}
img5.onclick = function(){
    modal5.style.display = "block";
}

var span1 = document.getElementById("close1");
//var span2 = document.getElementById("close2");
var span3 = document.getElementById("close3");
var span4 = document.getElementById("close4");
var span5 = document.getElementById("close5");

span1.onclick = function() { 
  modal1.style.display = "none";
}
//span2.onclick = function() { 
 // modal2.style.display = "none";
//}
span3.onclick = function() { 
  modal3.style.display = "none";
}
span4.onclick = function() { 
  modal4.style.display = "none";
}
span5.onclick = function() { 
  modal5.style.display = "none";
}


