function validate(){
    var nameValue = document.getElementById('name').value;
    var lNameValue = document.getElementById('lName').value;
    var usernameValue = document.getElementById('username').value;
    var messageValue = document.getElementById('subject').value;
    if(nameValue == "" || lNameValue == "" || usernameValue == "" || messageValue==""){
      alert("All fields are required");
    }
    else{
      alert("Message is sent");
    }
   }