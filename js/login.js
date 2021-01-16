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

const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')

function validate() {
  // let inputs = document.querySelectorAll("input");
  // usrname = inputs[0].value;
  // password = inputs[1].value;
  // if (usernameReg.test(usrname) && password != "") {
  //     return true;
  // }
  // return false;
  return true;
}
