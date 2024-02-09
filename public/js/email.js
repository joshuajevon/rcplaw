function subscribe(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    var formData = new FormData(document.getElementById("form-subscribe"));

    // Send form data to the server using fetch API
    fetch(document.getElementById("form-subscribe").action, {
        method: "POST",
        body: formData
    })
    .then(response => response.json()) // Parse response as JSON
    .then(data => {
        // Check the status of the response
        if (data.status === 'success') {
            document.getElementById("subscribe-message").innerHTML = '<p class="text-green-500">' + data.message + '</p>'; // Display success message
        } else if (data.status === 'error') {
            document.getElementById("subscribe-message").innerHTML = '<p class="text-red-500">' + data.message + '</p>'; // Display error message
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
