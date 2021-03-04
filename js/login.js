window.onload = function() {
  const firstA = document.querySelector("#firstA");
  const secondA = document.querySelector("#secondA");
  // Onclick function for both links
  firstA.addEventListener("click",function() {changeForm(0);});
  secondA.addEventListener("click",function() {changeForm(1);});

  function changeForm(form) {
      let forms = document.querySelectorAll("form>div");
      if (form == 0) {
          forms[0].classList.remove("hidden");
          forms[0].classList.add("form-style");
          forms[1].classList.add("hidden");
          forms[1].classList.remove("form-style");
      } else {
          forms[1].classList.remove("hidden");
          forms[1].classList.add("form-style");
          forms[0].classList.add("hidden");
          forms[0].classList.remove("form-style");
      }
  }
}