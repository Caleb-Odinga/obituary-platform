// public/js/validation.js

document.getElementById('obituaryForm').addEventListener('submit', function (event) {
    let isValid = true;

    // Validate Name
    const name = document.getElementById('name').value;
    if (name.trim() === '') {
        isValid = false;
        alert('Name is required');
    }

    // Validate Date of Birth
    const dob = document.getElementById('dob').value;
    if (dob === '') {
        isValid = false;
        alert('Date of Birth is required');
    }

    // Validate Date of Death
    const dod = document.getElementById('dod').value;
    if (dod === '') {
        isValid = false;
        alert('Date of Death is required');
    }

    // Validate Content
    const content = document.getElementById('content').value;
    if (content.trim() === '') {
        isValid = false;
        alert('Content is required');
    }

    // Validate Author
    const author = document.getElementById('author').value;
    if (author.trim() === '') {
        isValid = false;
        alert('Author is required');
    }

    if (!isValid) {
        event.preventDefault();
    }
});
