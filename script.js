document.querySelectorAll(".clickable-phone").forEach(function(element) {
    element.addEventListener("click", function() {
        var phone = this.getAttribute("data-phone");
        window.location.href = phone;
    });
});



function downloadImage(imageUrl) {
    var link = document.createElement('a');
    link.href = imageUrl;
    link.download = imageUrl.split('/').pop(); // Extracting filename
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);
}

document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting via the browser

    var formData = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'process_form.php', true);
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert(xhr.responseText); // Display the response from the server
            // Clear form fields if needed
        } else {
            alert('Error: ' + xhr.responseText);
        }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.send(formData);
});
