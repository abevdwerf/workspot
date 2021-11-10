window.axios = require('axios');

// Dropdown variables
let previousDropdownChoise = null;
let locationsDropdown = document.getElementById("locations-dropdown");

// Input variables
let locationInput = document.getElementById("location-input");
let numberOfPeopleInput = document.getElementById("location-number-of-people");

// Get specifying options
let roomOptions = document.getElementsByClassName("form__options-item");
let personAmountOptions = document.getElementsByClassName("form__selection-option");

// Other variables
let rooms = document.getElementsByClassName("room");
const roomTemplate = document.getElementById("room-template");

locationsDropdown.childNodes.forEach(location => {
    location.onclick = function () {
        if (previousDropdownChoise != null) previousDropdownChoise.classList.remove("form__dropdown-option--selected");
        previousDropdownChoise = location;
        document.getElementById("location-id-input").value = location.dataset.id;
        locationInput.value = location.innerHTML;
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
    if (roomOptions[i].classList.contains("form__options-item--active")) roomOptions[i].classList.remove("form__options-item--active");
    else roomOptions[i].classList.add("form__options-item--active");
};

document.getElementById("search-spot-form").onclick = function (event) {
    if (window.innerWidth >= 1024) {
        event.preventDefault();

        if (document.getElementById("location-id-input").value != "") {
            if (numberOfPeopleInput.value != null && numberOfPeopleInput.value > 0) {
                locationInput.classList.remove("form__input--error");
                locationInput.parentElement.getElementsByTagName("label")[0].style.color = "";
                locationInput.parentElement.getElementsByTagName("label")[0].getElementsByTagName("svg")[0].style.fill = "#B1B1B1";

                axios({
                    method: 'get',
                    url: document.getElementsByClassName("base")[0].innerHTML + "/getrooms",
                    params: {
                        location: document.getElementById("location-id-input").value,
                        numberOfPeople: numberOfPeopleInput.value
                    }
                })
                .then(function (rooms) {
                    console.log(rooms.data);
                    for (let i = 0; i < roomTemplate.parentElement.children.length; i++) {
                        if (roomTemplate.parentElement.children[i].classList.contains("room") && !roomTemplate.parentElement.children[i].classList.contains("room--error")) roomTemplate.parentElement.children[i].style.display = "none";
                    }

                    const roomAmount = rooms.data.length

                    if (roomAmount == 0) document.getElementsByClassName("room--error")[0].style.display = "flex";
                    else document.getElementsByClassName("room--error")[0].style.display = "none";

                    for (let index = 0; index < roomAmount; index++) {
                        let room = roomTemplate.cloneNode(true);
                        room.style.display = "flex";
                        room.className = "room";
                        roomTemplate.parentElement.appendChild(room);

                        room.getElementsByClassName("h3")[0].innerHTML = rooms.data[index].name;
                        room.getElementsByClassName("room__floor")[0].innerHTML = (rooms.data[index].floor == 0 ? "Ground" : rooms.data[index].floor)  + " Floor";
                        room.getElementsByClassName("room__highlight")[0].innerHTML = rooms.data[index].seats_available + "/" + rooms.data[index].seats_total ;
                        room.getElementsByClassName("room__spots-inner")[0].innerHTML = "Spots";

                        room.onclick = function () { toggleRoom(room); };
                    }
                });

                let introSection = document.getElementsByClassName("intro")[0];
                let roomsSection = document.getElementsByClassName("room__rooms")[0];

                introSection.classList.add("animation__slide-out");
                setTimeout(() => {
                    introSection.style.display = "none";
                    roomsSection.style.display = "flex";

                    setTimeout(() => {
                        roomsSection.style.zIndex = 1;
                    }, 1250);
                }, 1000);
            } else {
                numberOfPeopleInput.parentElement.getElementsByTagName("label")[0].style.color = "red";
                numberOfPeopleInput.parentElement.getElementsByTagName("label")[0].getElementsByTagName("svg")[0].style.fill = "red";
            }
        } else {
            locationInput.classList.add("form__input--error");
            locationInput.parentElement.getElementsByTagName("label")[0].style.color = "red";
            locationInput.parentElement.getElementsByTagName("label")[0].getElementsByTagName("svg")[0].style.fill = "red";
        }
    }
}

function toggleRoom (room) {
    for (let i = 0; i < room.parentElement.children.length; i++) if ( room.parentElement.children[i].classList.contains("room")) room.parentElement.children[i].className = "room";
    if (room.classList.contains("room--active")) room.classList.remove("room--active");
    else room.classList.add("room--active");

    let workspaceSection = document.getElementsByClassName("workspace")[0];
    setTimeout(() => {
        workspaceSection.style.display = "flex";

        setTimeout(() => {
            roomsSection.style.zIndex = 1;

        }, 1250);
    }, 1000);
}
