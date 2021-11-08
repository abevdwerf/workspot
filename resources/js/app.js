// Variables
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
let roomOption = document.querySelectorAll('.form__options-item');
let personAmount = document.querySelectorAll('.form__selection-option');

// Select a number of persons
for (let i = 0; i < personAmount.length; i++) personAmount[i].onclick = function() {

    //set all elements same style
    let c = 0;
    while (c < personAmount.length) personAmount[c++].className = 'form__selection-option';

    //set active style
    personAmount[i].classList.add('form__selection-option--active');
};

// Toggle an room option
for (let i = 0; i < roomOption.length; i++) roomOption[i].onclick = function () {
    if (!roomOption[i].classList.contains('form__options-item--active')) roomOption[i].classList.add('form__options-item--active');
    else roomOption[i].classList.remove('form__options-item--active');
};