const form = document.querySelector(".signup form"),
    continueBtn = form.querySelector(".button button"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}
continueBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/register.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "index.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}