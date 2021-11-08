
//require('./bootstrap');
var numberOfPeople = document.querySelectorAll('.form__selection-option');

for (let i = 0; i < numberOfPeople.length; i++) {
    //get onclick element
    numberOfPeople[i].onclick = function() {
        //set all elements same style
        var c = 0;
        while (c < numberOfPeople.length) {
            numberOfPeople[c++].className = 'form__selection-option';
        }
        //set active style
        numberOfPeople[i].classList.add('form__selection-option--active');
    };
}

var types = document.querySelectorAll('.form__options-item');

for (let i = 0; i < types.length; i++) {
    //get onclick element
    types[i].onclick = function () {
        //add active style if it not exist
        if (!types[i].classList.contains('form__options-item--active'))
        {
            types[i].classList.add('form__options-item--active');
        }
        else
        {
            types[i].className = 'form__options-item';
        }
    };
}

