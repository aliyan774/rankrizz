
function isMobileDevice() {
    return window.innerWidth <= 768; // Adjust the width threshold as needed
}

var phoneNumber = "+923357476708"; // Removed unnecessary characters

if (isMobileDevice()) {
    document.getElementById('whatsapp-link').href = 'whatsapp://send?phone=' + phoneNumber;
} else {
    document.getElementById('whatsapp-link').href = 'https://web.whatsapp.com/send?phone=' + phoneNumber;
}

