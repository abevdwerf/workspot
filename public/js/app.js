/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

// Dropdown variables
var previousDropdownChoise = null;
var locationsDropdown = document.getElementById("locations-dropdown"); // Input variables

var locationInput = document.getElementById("location-input");
var numberOfPeopleInput = document.getElementById("location-number-of-people"); // Get specifying options

var roomOptions = document.getElementsByClassName("form__options-item");
var personAmountOptions = document.getElementsByClassName("form__selection-option");
locationsDropdown.childNodes.forEach(function (location) {
  location.onclick = function () {
    if (previousDropdownChoise != null) previousDropdownChoise.classList.remove("form__dropdown-option--selected");
    previousDropdownChoise = location;
    locationInput.setAttribute("value", location.innerHTML);
    location.classList.add("form__dropdown-option--selected");
    if (locationsDropdown.classList.contains("form__dropdown--active")) locationsDropdown.classList.remove("form__dropdown--active");else locationsDropdown.classList.add("form__dropdown--active");
  };
});

locationInput.onclick = function () {
  if (locationsDropdown.classList.contains("form__dropdown--active")) locationsDropdown.classList.remove("form__dropdown--active");else locationsDropdown.classList.add("form__dropdown--active");
};

locationInput.addEventListener("input", function (event) {
  locationsDropdown.classList.add("form__dropdown--active");
  var children = locationsDropdown.children;

  for (var i = 0; i < children.length; i++) {
    var child = children[i];
    if (child.innerHTML.toLowerCase().indexOf(event.target.value.toLowerCase()) > -1) child.style.display = "block";else child.style.display = "none";
  }
}); // Select a number of persons

var _loop = function _loop(i) {
  personAmountOptions[i].onclick = function (event) {
    //set all elements same style
    var c = 0;

    while (c < personAmountOptions.length) {
      personAmountOptions[c++].className = "form__selection-option";
    } //set active style


    personAmountOptions[i].classList.add("form__selection-option--active");
    numberOfPeopleInput.value = parseInt(event.target.firstChild.innerHTML);
  };
};

for (var i = 0; i < personAmountOptions.length; i++) {
  _loop(i);
} // Toggle an room option


var _loop2 = function _loop2(_i) {
  roomOptions[_i].onclick = function () {
    if (!roomOptions[_i].classList.contains("form__options-item--active")) roomOptions[_i].classList.add("form__options-item--active");else roomOptions[_i].classList.remove("form__options-item--active");
  };
};

for (var _i = 0; _i < roomOptions.length; _i++) {
  _loop2(_i);
}

document.getElementById("search-spot-form").onclick = function (event) {
  if (window.innerWidth >= 1024) {
    event.preventDefault();
    var introSection = document.getElementsByClassName("intro")[0];
    var roomsSection = document.getElementsByClassName("room__rooms")[0];
    var workspaceSection = document.getElementsByClassName("workspace")[0];
    introSection.classList.add("animation__slide-out");
    setTimeout(function () {
      introSection.style.display = "none";
      roomsSection.style.display = "block";
      workspaceSection.style.display = "block";
    }, 1000);
  }
};

/***/ }),

/***/ "./resources/sass/styles.sass":
/*!************************************!*\
  !*** ./resources/sass/styles.sass ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/styles": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/styles"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/styles"], () => (__webpack_require__("./resources/sass/styles.sass")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;