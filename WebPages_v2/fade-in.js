const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show-1');
            observer1.unobserve(entry.target);
        }
    });
}, { threshold: getThreshold() });

const hiddenElements1 = document.querySelectorAll('.hidden-1');
hiddenElements1.forEach((el) => observer1.observe(el));

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show-2');
            observer2.unobserve(entry.target);
        }
    });
}, { threshold: getThreshold() });

const hiddenElements2 = document.querySelectorAll('.hidden-2');
hiddenElements2.forEach((el) => observer2.observe(el));

// Helper function to determine the threshold based on screen size
function getThreshold() {
    const screenWidth = window.innerWidth;
    if (screenWidth < 1920) {
        return 0.1; // Set a lower threshold for smaller screens
    } else {
        return 0.5; // Default threshold for larger screens
    }
}

// Add event listener to update the thresholds when the screen is resized
window.addEventListener('resize', () => {
    observer1.disconnect(); // Disconnect observer1 before updating the threshold
    observer1.thresholds = [getThreshold()]; // Update the threshold for observer1
    hiddenElements1.forEach((el) => observer1.observe(el)); // Re-observe elements for observer1

    observer2.disconnect(); // Disconnect observer2 before updating the threshold
    observer2.thresholds = [getThreshold()]; // Update the threshold for observer2
    hiddenElements2.forEach((el) => observer2.observe(el)); // Re-observe elements for observer2
});


// https://www.youtube.com/watch?v=T33NN_pPeNI&t=30s is de gebruikt om deze javascript te maken