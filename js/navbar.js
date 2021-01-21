const toggle = document.querySelector(".toggle");
const item = document.querySelectorAll(".item");

toggle.addEventListener("click", function() {
	for (var i = 0; i < item.length; i++) {
		item[i].classList.toggle("show");
	}
});