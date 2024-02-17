const photo = document.querySelector(".edit img");
//photo preview
document.querySelector('input[name="image"]').addEventListener('change', function(e) {
    var output = document.querySelector('.photo');
    output.src = URL.createObjectURL(e.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src); //free memory
    }
})