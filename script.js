document.addEventListener("DOMContentLoaded", function() {
    const clickableSections = document.querySelectorAll(".clickable-section");

    clickableSections.forEach(section => {
        section.addEventListener("click", function() {
            const sectionId = section.getAttribute("id");
            window.location.href = sectionId + ".html";
        });
    });
});
