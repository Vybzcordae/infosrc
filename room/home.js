const popular = document.querySelector(".box-container");


popular.onload = (e) => {
    e.preventDefault(); //prevent form from submitting
}

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "popular.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                popular.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);