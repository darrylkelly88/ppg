function scrollToSection(targetId) {
    const targetElement = document.getElementById(targetId);

    if (targetElement) {
    const offset = 100; // Adjust this value to set your desired offset
    const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY;

    window.scrollTo({
        top: targetPosition - offset,
        behavior: 'smooth'
    });
}
}

document.querySelectorAll('button[href^="#"]').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        scrollToSection(targetId);
    });
});