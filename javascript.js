document.addEventListener("DOMContentLoaded", function () {
    const popupOverlay = document.getElementById("popupOverlay");
    const closeBtn = document.getElementById("closeBtn");
    const sumbitBtn = document.getElementById("sumbitBtn");

    // Show the popup form when the page loads
    popupOverlay.classList.add("active");

    // Function to close the popup
    function closePopup() {
        popupOverlay.classList.remove("active");
    }

    // Close the popup form when the close button is clicked
    closeBtn.addEventListener("click", closePopup);

    // Close the popup form when the form is submitted
    contact.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent default form submission behavior

        // Simulating a real form submission (replace with actual form submission logic)
        setTimeout(() => {
            console.log("Form submitted successfully!"); // Debugging message
            closePopup();
        });
        document.getElementById("sumbitBtn").style.display = "none";
    });
    
});

document.addEventListener("DOMContentLoaded", function () {
    const questions = document.querySelectorAll(".faq-question");

    questions.forEach(question => {
        question.addEventListener("click", function () {
            const faqItem = this.parentElement;
            faqItem.classList.toggle("active");
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const dropdown = document.querySelector(".dropdown");
    const dropdownMenu = document.getElementById("dropdownMenu");

    // Show dropdown when mouse enters
    dropdown.addEventListener("mouseenter", function () {
        dropdownMenu.classList.add("active");
    });

    // Hide dropdown when mouse leaves
    dropdown.addEventListener("mouseleave", function () {
        dropdownMenu.classList.remove("active");
    });
});
