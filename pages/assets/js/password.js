var click;
const pass = document.getElementById("password");
const passIcon = document.getElementById("pass-icon");

function showPass(){
   if (click === 1){
        pass.type="password";
        passIcon.src="../assets/images/hide-24px.png";
        click = 0;
    }
    else {
        pass.type="text";
        passIcon.src="../assets/images/show-24px.png";
        click = 1;
    }
}

function checkMatch(pass1, pass2){
    if (pass1 != pass2){
        alert("Passwords do not match!");
    }
}