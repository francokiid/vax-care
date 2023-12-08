const pregnantBtn = document.getElementById("pregnant-btn");
const newbornBtn = document.getElementById("newborn-btn");

const pregnantForm = document.getElementById("pregnant-form");
const newbornForm = document.getElementById("newborn-form");

function showPregnantForm(){
    newbornForm.style.display = "none";
    pregnantForm.style.display = "block";
}

function showNewbornForm(){
    pregnantForm.style.display = "none";
    newbornForm.style.display = "block";
}