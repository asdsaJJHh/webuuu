function validateForm() {
    var username = document.getElementById("usernameInput").value.trim();
    if (username === "") {
        JSalert("Oops...", "Write Cashtag !!", 'error', true); 
        return false; 
    } else if (username.length < 3) {
        JSalert("Oops...", "This User Not In CashApp", 'error', true); 
        return false; 
    }


    JSalert("Welcome Back", username, 'success', false); 
    return true;
}
function JSalert(title, message, icon, showConfirmButton) {
    Swal.fire({
        title: title,
        text: message,
        icon: icon,
        showConfirmButton: showConfirmButton, 
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
        width: 'fit-content',
        padding: '2rem',
        width: 512,
        height: 325,
        customClass: {
            content: 'center'
        }
    });
}