const observer1 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting){
            entry.target.classList.add('show-1');
            observer1.unobserve(entry.target);
        }
    });
},{threshold: 0.55});

const hiddenElements1 = document.querySelectorAll('.hidden-1');
hiddenElements1.forEach((el) => observer1.observe(el));

const observer2 = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting){
            entry.target.classList.add('show-2');
            observer2.unobserve(entry.target);
        }
    });
},{threshold: 0.55});

const hiddenElements2 = document.querySelectorAll('.hidden-2');
hiddenElements2.forEach((el) => observer2.observe(el));

// https://www.youtube.com/watch?v=T33NN_pPeNI&t=30s is de gebruikt om deze javascript te maken