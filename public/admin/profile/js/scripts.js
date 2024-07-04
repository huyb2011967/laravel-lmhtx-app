function showEditForm() {
    document.getElementById('edit-form-container').style.display = 'block';
    document.getElementById('edit-name').value = document.getElementById('full-name').textContent;
    document.getElementById('edit-job-title').value = document.getElementById('job-title').textContent;
    document.getElementById('edit-email').value = document.getElementById('email').textContent;
    document.getElementById('edit-phone').value = document.getElementById('phone').textContent;
    document.getElementById('edit-address').value = document.getElementById('address').textContent;
    document.getElementById('edit-social-link').value = document.getElementById('social-link').textContent;
}

function hideEditForm() {
    document.getElementById('edit-form-container').style.display = 'none';
}

function saveChanges() {
    document.getElementById('full-name').textContent = document.getElementById('edit-name').value;
    document.getElementById('job-title').textContent = document.getElementById('edit-job-title').value;
    document.getElementById('email').textContent = document.getElementById('edit-email').value;
    document.getElementById('phone').textContent = document.getElementById('edit-phone').value;
    document.getElementById('address').textContent = document.getElementById('edit-address').value;
    document.getElementById('social-link').textContent = document.getElementById('edit-social-link').value;
    document.getElementById('social-link').href = document.getElementById('edit-social-link').value;
    hideEditForm();
}

function loadFile(event) {
    var output = document.getElementById('avatar-preview');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src); // free memory
    }
}
