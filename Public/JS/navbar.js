// Function to toggle the navbar menu
function toggleMenu() {
    var navbarLinks = document.getElementById('navbar-links');
    navbarLinks.classList.toggle('active');
}

// Event listener for the hamburger menu to open/close
document.getElementById('hamburger-menu').addEventListener('click', function(event) {
    toggleMenu();
    event.stopPropagation(); // Prevents click event from bubbling up to document
});

// Close the menu when clicking outside or on a menu item
document.addEventListener('click', function(event) {
    var navbar = document.getElementById('navbar-links');
    var isClickInside = navbar.contains(event.target) || event.target.id === 'hamburger-menu';

    if (!isClickInside && navbar.classList.contains('active')) {
        toggleMenu();
    }
});

// Close the menu when clicking on a menu item
document.querySelectorAll('.navbar-list a').forEach(function(item) {
    item.addEventListener('click', toggleMenu);
});