const adminPosts = document.querySelector(".dashboard div");

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "admin/recent.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                adminPosts.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 500);