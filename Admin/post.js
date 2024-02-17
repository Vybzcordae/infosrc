const form = document.querySelector(".section .posts"),
    form1 = document.querySelector(".section .OTP"),
    continueBtn = form.querySelector(".button button"),
    OTPBtn = form1.querySelector(".but button");


form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}
form1.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}

continueBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "verify.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
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

OTPBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "OTP.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "forms-elements.php";
                } else {
                    console.log("Error");
                }
            }
        }
    }

    let formData = new FormData(form1);
    xhr.send(formData); //sending form data to php
}