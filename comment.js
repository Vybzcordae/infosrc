const form = document.querySelector(".container form"),
    continueBtn = form.querySelector("button"),
    recentPost = document.querySelector(".recent-posts");


form.onsubmit = (e) => {
    e.preventDefault(); //prevent form from submitting
}
continueBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "addcomment.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "";
                } else {
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            }
        }
    }

    //sending the form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData); //sending form data to php
}