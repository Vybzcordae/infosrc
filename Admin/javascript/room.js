const form = document.querySelector(".function table"),
    acceptBtn = document.querySelector(".button .accept");


acceptBtn.onclick = () => {
    // lets start ajax
    let xhr = new XMLHttpRequest(); //creating XML object
    xhr.open("POST", "php/accept.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data)
                if (data == "success") {
                    location.href = "index.php";
                } else {
                    console.log("unsuccess")
                }
            }
        }
    }
    xhr.send(acceptBtn); //sending form data to php
}