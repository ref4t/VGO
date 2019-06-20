
 <link rel="stylesheet" href="<?php echo e(URL::asset('css/bikearenanavbar.css')); ?>">
<div id="navbar">
  <a href="#">Home</a>
  <a href="/bajaj">Brands</a>
  <a href="#contact">Contact</a>
</div>
<script type="text/javascript">
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
//console.log('hello');
// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>