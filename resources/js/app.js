// Dropdown variables
let previousDropdownChoise = null;
let locationsDropdown = document.getElementById("locations-dropdown");

// Input variables
let locationInput = document.getElementById("location-input");
let numberOfPeopleInput = document.getElementById("location-number-of-people");

// Get specifying options
let roomOptions = document.getElementsByClassName("form__options-item");
let personAmountOptions = document.getElementsByClassName("form__selection-option");

locationsDropdown.childNodes.forEach(location => {
    location.onclick = function () {
        if (previousDropdownChoise != null) previousDropdownChoise.classList.remove("form__dropdown-option--selected");
        previousDropdownChoise = location;
        locationInput.setAttribute("value", location.innerHTML);
        location.classList.add("form__dropdown-option--selected");
        if (locationsDropdown.classList.contains("form__dropdown--active")) locationsDropdown.classList.remove("form__dropdown--active");
        else locationsDropdown.classList.add("form__dropdown--active");
    };
});

locationInput.onclick = function () {
    if (locationsDropdown.classList.contains("form__dropdown--active")) locationsDropdown.classList.remove("form__dropdown--active");
    else locationsDropdown.classList.add("form__dropdown--active");
};

locationInput.addEventListener("input", function (event) {
    locationsDropdown.classList.add("form__dropdown--active");

    var children = locationsDropdown.children;
    for (var i = 0; i < children.length; i++) {
        var child = children[i];
        if (child.innerHTML.toLowerCase().indexOf(event.target.value.toLowerCase()) > -1) child.style.display = "block";
        else child.style.display = "none";
    }
});

// Select a number of persons
for (let i = 0; i < personAmountOptions.length; i++) personAmountOptions[i].onclick = function(event) {

    //set all elements same style
    let c = 0;
    while (c < personAmountOptions.length) personAmountOptions[c++].className = "form__selection-option";

    //set active style
    personAmountOptions[i].classList.add("form__selection-option--active");

    numberOfPeopleInput.value = parseInt(event.target.firstChild.innerHTML);
};

// Toggle an room option
for (let i = 0; i < roomOptions.length; i++) roomOptions[i].onclick = function () {
    if (!roomOptions[i].classList.contains("form__options-item--active")) roomOptions[i].classList.add("form__options-item--active");
    else roomOptions[i].classList.remove("form__options-item--active");
};

document.getElementById("search-spot-form").onclick = function (event) {
    if (window.innerWidth >= 1024) {
        event.preventDefault();

        let introSection = document.getElementsByClassName("intro")[0];
        let roomsSection = document.getElementsByClassName("room__rooms")[0];
        let workspaceSection = document.getElementsByClassName("workspace")[0];

        introSection.classList.add("animation__slide-out");
        setTimeout(() => {
            introSection.style.display = "none";
            roomsSection.style.display = "block";
            workspaceSection.style.display = "block";
            
            setTimeout(() => {
                roomsSection.style.zIndex = 1;
                workspaceSection.style.zIndex = 1;
            }, 1250);
        }, 1000);
    }
}