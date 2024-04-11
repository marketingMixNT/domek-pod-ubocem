
const handleIntersection = (entries, observer, animationClass) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            
            entry.target.classList.add(animationClass);
        }
    });
};

const createIntersectionObserver = (animationClass) => {
    return new IntersectionObserver(
        (entries, observer) => {
            handleIntersection(entries, observer, animationClass);
        },
        {
            root: null,
            rootMargin: "0px",
            threshold: 0.5,
        }
    );
};

// const headingAnimation = document.querySelectorAll('.heading-animation')
const kenBurnsAnimation = document.querySelectorAll('.kenburns')
const imageAnimation = document.querySelectorAll('.image-animation')
// const decorTextAnimation = document.querySelectorAll('.decorText-animation')


if (window.innerWidth > 768) {
    // const observerHeading = createIntersectionObserver("fade-in-bottom");
    const observerKenburns = createIntersectionObserver("kenburns-bottom");
    const observerImage = createIntersectionObserver("fade-in-bottom");
    // const observerDecorText = createIntersectionObserver("slide-in-blurred-left");
   

    // headingAnimation.forEach((element) => {
    //     observerHeading.observe(element);
    // });

    kenBurnsAnimation.forEach((element) => {
        observerKenburns.observe(element);
    });
    imageAnimation.forEach((element) => {
        observerImage.observe(element);
    });
    // decorTextAnimation.forEach((element) => {
    //     observerDecorText.observe(element);
    // });
   
}