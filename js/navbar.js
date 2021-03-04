window.onload = function() {
	const toggle = document.querySelector(".toggle");
	// Saves all HTML elements with the "item" class in an array
	const item = document.querySelectorAll(".item"); 
	const burgericon = document.querySelector("#burger-icon")

	toggle.onclick = function() {
		// Looping through the item array
		for (var i = 0; i < item.length; i++) {
			item[i].classList.toggle("show");
		}
		burgericon.classList.toggle("change");
	}
}