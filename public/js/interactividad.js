// Obtener referencias a los elementos
const loginModal = document.getElementById('login-modal');
const registerModal = document.getElementById('register-modal');
const openLoginButton = document.getElementById('open-login-modal');
const openRegisterButton = document.getElementById('open-register-modal');
const closeButtons = document.querySelectorAll('.close-modal');

// Función para abrir un modal específico
function openModal(modal) {
    modal.style.display = 'flex';
}

// Función para cerrar un modal específico
function closeModal(modal) {
    modal.style.display = 'none';
}

// Eventos para abrir los modales
openLoginButton.addEventListener('click', () => openModal(loginModal));
openRegisterButton.addEventListener('click', () => openModal(registerModal));

// Eventos para cerrar los modales
closeButtons.forEach(button => {
    button.addEventListener('click', () => {
        closeModal(loginModal);
        closeModal(registerModal);
    });
});

// Cerrar modales al hacer clic fuera de ellos
window.addEventListener('click', (event) => {
    if (event.target === loginModal) closeModal(loginModal);
    if (event.target === registerModal) closeModal(registerModal);
});