$(document).ready(function() {
    // everything with id="fade-in"
    const faders = document.querySelectorAll(".fade-in");
    const appearOptions = {
        threshold: 0,
        rootMargin: "0px 0px -250px 0px"
    };
    const appearOnScroll = new IntersectionObserver
    (function(
        entries, 
        appearOnScroll) {
            // "for each entry inside entries"
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                } else {
                    entry.target.classList.add('appear');
                    // stop looking at something once you've done your job
                    appearOnScroll.unobserve(entry.target);
                }
            });
        }, appearOptions);

    faders.forEach(fader => {
        appearOnScroll.observe(fader);
    });
});