// Header Country Toggle JS
$(document).ready(function(){
	$(".selectedCountry a").click(function(){
	  $(".hdrCountryList").toggleClass("show-country-list");
	});
});


// Menu Toggle JS
$(document).ready(function(){
	$(".navbar-toggler").click(function(){
	  $("body").toggleClass("body-fixed");
	});
});
  
$(document).ready(function () {
	$('.navbar-toggler').on('click', function () {
	  $('.navbar-toggler').toggleClass('open');
	  $('.headerMenu').toggleClass('show-nav');
	});
});


$(document).click(function(){
		$(".dropdown").click(function(){
		  $(".dropdown-menu").toggleClass("show");
		});
});



// Input Type Number JS
document.addEventListener('DOMContentLoaded', function() {
	var inputs = document.getElementsByClassName('prdctQuantity')
	function incInputNumber(input, step) {
		var val = +input.value
		if (isNaN(val)) val = 1
		val += step
		input.value = val > 1 ? val: 1
	}
	Array.prototype.forEach.call(inputs, function(el) {
		var input = el.getElementsByTagName('input')[0]
		
		el.getElementsByClassName('increase')[0].addEventListener('click', function() { incInputNumber(input, 1) })
		el.getElementsByClassName('decrease')[0].addEventListener('click', function() { incInputNumber(input, -1) })
	})
})
$( "#spinner" ).spinner();