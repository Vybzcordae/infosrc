const dad = document.querySelector(".change form"),
    changeBtn = dad.querySelector(".button button");

dad.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}
changeBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/password.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "users-profile.php";
                } else {
                    console.log("Failed");
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}