const modal = document.getElementById("modal");
const addBtn = document.getElementById("add-btn");
const updateBtn = document.getElementById("update-btn");

const confirmBox = document.getElementById("confirm-box");
const disableBtn = document.getElementById("disable-btn");
const cancelBtn = document.getElementById("cancel");

if (window.location.href.includes(".php?new")) {
    modal.classList.add("open-modal");
    addBtn.style.display = "inline-block";
    updateBtn.style.display = "none";
}

if (window.location.href.includes(".php?edit")) {
    modal.classList.add("open-modal");
    addBtn.style.display = "none";
    updateBtn.style.display = "inline-block";
}

if (window.location.href.includes(".php?confirm")) {
    confirmBox.classList.add("open-modal");
}

function closeForm() {
    modal.classList.remove("open-modal");
    window.location.href = window.location.href.split("?")[0];
}

function closeConfirmBox(){
    confirmBox.classList.remove("open-modal");
    window.location.href = window.location.href.split("?")[0];
}