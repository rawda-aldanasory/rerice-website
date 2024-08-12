// var slideIndex = 1;

//     showSlides(slideIndex);
//     // Next/previous controls
//     function plusSlides(n) {
//       showSlides(slideIndex += n);
//     }
//     // Thumbnail image controls
//     function currentSlide(n) {
//       showSlides(slideIndex = n);
//     }
//     function showSlides(n) {
//       var i;
//       var slides = document.getElementsByClassName("productSlides");
//       var dots = document.getElementsByClassName("dot");
//       if (n > slides.length) {
//         slideIndex = 1
//       }
//       if (n < 1) {
//         slideIndex = slides.length
//       }
//       for (i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//       }
//       for (i = 0; i < dots.length; i++) {
//         dots[i].className = dots[i].className.replace(" active", "");
//       }
//       slides[slideIndex - 1].style.display = "block";
//       dots[slideIndex - 1].className += " active";
//     }
//     $('.like-btn').on('click', function() {
//       $(this).toggleClass('is-active');
//    });
//    $('.like-btn').on('click', function() {
//     $(this).toggleClass('is-active');
//  });  

 function pluse(){
   var num=document.getElementById('prouductquantity').value;
 

   document.getElementById('prouductquantity').value=Number(num)+1;
 }
 function min(){
   var num=document.getElementById('prouductquantity').value;
   console.log(num)
if(Number(num)>1)
{

  document.getElementById('prouductquantity').value=Number(num)-1;
}
 }