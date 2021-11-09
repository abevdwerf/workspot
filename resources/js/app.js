const locations = [
    "Fontys Nexus",
    "Fontys P1, Tilburg",
    "Fontys P2, Tilburg",
    "Fontys P3, Tilburg",
    "Fontys R3, Eindhoven",
    "Fontys R5, Eindhoven",
    "Fontys R6, Eindhoven",
    "Fontys R10, Eindhoven"
];

// Dropdown variables
let previousDropdownChoise = null;
let locationsDropdown = document.getElementById("locations-dropdown");

// Input variables
let locationInput = document.getElementById("location-input");
let numberOfPeopleInput = document.getElementById("location-number-of-people");

// Get specifying options
let roomOptions = document.getElementsByClassName("form__options-item");
let personAmountOptions = document.getElementsByClassName("form__selection-option");

locations.forEach(location => {
    let locationOption = document.createElement("a");
    locationOption.innerHTML = location;
    locationOption.className = "form__dropdown-option";
    locationsDropdown.appendChild(locationOption);
    
    locationOption.onclick = function () {
        if (previousDropdownChoise != null) previousDropdownChoise.classList.remove("form__dropdown-option--selected");
        previousDropdownChoise = locationOption;
        locationInput.setAttribute("value", location);
        locationOption.classList.add("form__dropdown-option--selected");
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
    locationsDropdown.childNodes.forEach(child => {
        if (child.innerHTML.toLowerCase().indexOf(event.target.value.toLowerCase()) > -1) child.style.display = "block";
        else child.style.display = "none";
    });
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