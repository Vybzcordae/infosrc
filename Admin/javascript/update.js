const form = document.querySelector(".update form"),
    continueBtn = form.querySelector(".button button"),
    photoBtn = document.querySelector(".edit a");

form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}
continueBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/update.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "users-profile.php";
                } else {
                    location.href = "users-profile.php";
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}
photoBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/delete.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "users-profile.php";
                } else {
                    location.href = "users-profile.php";
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}