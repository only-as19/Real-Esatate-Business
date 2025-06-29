const icon = document.getElementById('eye-icon');
    const eye = document.getElementById('eye-img');
    const pass = document.getElementById('password');

    icon.addEventListener('click', () => {
        if (pass.type === "password") {
            pass.type = "text";
            eye.src = "../Img/eye_open.png";
        } else {
            pass.type = "password";
            eye.src = "../Img/eye_close.png";
        }
    });