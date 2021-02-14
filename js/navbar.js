window.onload = function() {
	const toggle = document.querySelector(".toggle");
	const item = document.querySelectorAll(".item");
	const burgericon = document.querySelector("#burger-icon")

	toggle.onclick = function() {
		for (var i = 0; i < item.length; i++) {
			item[i].classList.toggle("show");
		}
		burgericon.classList.toggle("change");
	}
}