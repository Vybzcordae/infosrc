const form = document.querySelector(".section .application"),
    form1 = document.querySelector(".section .book"),
    continueBtn1 = form1.querySelector(".btn button"),
    continueBtn = form.querySelector(".button button");

form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}

form1.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}

continueBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "app.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "forms-layouts.php";
                } else {
                    console.log("data");
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}
continueBtn1.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "book.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                if (data == "success") {
                    location.href = "forms-layouts.php";
                } else {
                    console.log("data");
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form1);
    xhr.send(formData); //sending form data to php
}