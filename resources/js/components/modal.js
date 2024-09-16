// JavaScript for handling modals
document.addEventListener('DOMContentLoaded', () => {
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.modal .close');

    modals.forEach(modal => {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.classList.remove('show');
            }
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.closest('.modal').classList.remove('show');
        });
    });

    // Example: Open a modal programmatically
    const openModal = (modalId) => {
        const modal = document.getElementById(modalId);
        if (modal) {
            modal.classList.add('show');
        }
    };

    // Export the function for use elsewhere
    window.openModal = openModal;
});
