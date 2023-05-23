const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('SeenElement-1');
            observer1.unobserve(entry.target);
        }
    });
}, { threshold: getThreshold() });

const hiddenElements1 = document.querySelectorAll('.HiddenElement-1');
hiddenElements1.forEach((hiddenElements1) => observer1.observe(hiddenElements1));


const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('SeenElement-2');
            observer2.unobserve(entry.target);
        }
    });
}, { threshold: getThreshold() });

const hiddenElements2 = document.querySelectorAll('.HiddenElement-2');
hiddenElements2.forEach((hiddenElements2) => observer2.observe(hiddenElements2));

// Helper function to determine the threshold based on screen size
function getThreshold() {
    const screenWidth = window.innerWidth;
    if (screenWidth < 1760) {
        return 0.1; // Set a lower threshold for smaller screens
    } else {
        return 0.5; // Default threshold for larger screens
    }
}

// Add event listener to update the thresholds when the screen is resized ... Dit werk nog niet goed

/*

*/


// https://www.youtube.com/watch?v=T33NN_pPeNI&t=30s is de gebruikt om deze javascript te maken