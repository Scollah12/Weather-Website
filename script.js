function showRegister() {
    const container = document.querySelector(".container");
    const registerForm = document.getElementById("register-form");
    
    container.classList.add("active");
    
    // Update the container's height based on the register form
    container.style.height = `${registerForm.scrollHeight}px`;
}

function showLogin() {
    const container = document.querySelector(".container");
    const loginForm = document.getElementById("login-form");
    
    container.classList.remove("active");
    
    // Update the container's height based on the login form
    container.style.height = `${loginForm.scrollHeight}px`;
}

// Set initial height to match the login form
window.onload = function() {
    const container = document.querySelector(".container");
    const loginForm = document.getElementById("login-form");
    container.style.height = `${loginForm.scrollHeight}px`;
};
