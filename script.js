console.log("hello");

const contactBlocksContainer = document.getElementById("contact-blocks-container");

const contactInfoBtn = document.getElementById("contact-info-btn");
contactInfoBtn.addEventListener("click", () => {
    console.log("clicked");
    contactBlocksContainer.classList.add("show");
});

const closeContactInfoBtn = document.getElementById("close_contact-info_btn");
closeContactInfoBtn.addEventListener("click", () => {
    console.log("close clicked");
    contactBlocksContainer.classList.remove("show");
});