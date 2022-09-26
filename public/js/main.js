function hasClass(target, className) {
    return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
}

function copy() {
    var currentLocation = window.location;
    return navigator.clipboard.writeText(currentLocation).catch((err) => window.prompt("Your browser can’t copy the link, …"))
}

let storageInfo = navigator.webkitTemporaryStorage || window.webkitStorageInfo


let showMoreTestimonials = document.getElementById("showMoreTestimonials");
let testimonials = document.getElementsByClassName("testimonials-elements");
let testimonialElements = document.querySelectorAll(".testimonials-elements div:nth-child(n+4)");

showMoreTestimonials.addEventListener('click', evt => {

    if (hasClass(showMoreTestimonials, "-rotate90")) {
        //Hide button
        showMoreTestimonials.classList.add("uk-hidden");
        // showMoreTestimonials.classList.remove("-rotate90");
        // showMoreTestimonials.classList.remove("transform-bottom");
        // showMoreTestimonials.innerText = "Hide"
        // showMoreTestimonials.classList.add("rotate90");
        // showMoreTestimonials.classList.add("fixedpos");

        testimonialElements.forEach((el) => {
            el.classList.remove("opacity-100");
        });
        document.getElementsByClassName("testimonials")?.[0].classList?.add("overflowY");
        testimonialElements.forEach((el) => {
            el.classList.add("opacity-100");
        });
        testimonials?.[0]?.classList?.add("showTestimonials");

    } else {
        showMoreTestimonials.classList.remove("rotate90");
        showMoreTestimonials.innerText = "Show more"
        showMoreTestimonials.classList.add("-rotate90");

        testimonialElements.forEach((el) => {
            el.classList.remove("opacity-100");
        });
        testimonials?.[0]?.classList?.remove("showTestimonials");
        document.getElementById('testimonials').classList.remove("overflowY");
    }
});
