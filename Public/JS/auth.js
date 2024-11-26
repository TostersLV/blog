
    const welcomeText = document.querySelector('.welcome-text');
    const messages = ['Welcome to Dauni!', 'Discover Your Journey', 'Your Adventure Awaits!'];
    let index = 0;

    function changeText() {
        welcomeText.textContent = messages[index];
        index = (index + 1) % messages.length;
    }

    // Change text every 3 seconds
    setInterval(changeText, 3000);

