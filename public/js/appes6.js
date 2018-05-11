/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/appes6.js":
/***/ (function(module, exports) {

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var Book = function Book(title, author, isbn) {
    _classCallCheck(this, Book);

    this.title = title;
    this.author = author;
    this.isbn = isbn;
};

var UI = function () {
    function UI() {
        _classCallCheck(this, UI);
    }

    _createClass(UI, [{
        key: 'addBookToList',
        value: function addBookToList(book) {

            var list = document.getElementById('book-list');
            // Create tr element
            var row = document.createElement('tr');
            // Insert cols
            row.innerHTML = '\n            <td>' + book.title + '</td>\n            <td>' + book.author + '</td>\n            <td>' + book.isbn + '</td>\n            <td><a href="#" class="delete">X<a></td>\n          ';
            list.appendChild(row);
        }
    }, {
        key: 'showAlert',
        value: function showAlert(message, className) {
            // Create div
            var div = document.createElement('div');
            // Add classes
            div.className = 'alert ' + className;
            // Add text
            div.appendChild(document.createTextNode(message));
            // Get parent
            var container = document.querySelector('.container');
            // Get form
            var form = document.querySelector('#book-form');
            // Insert alert
            container.insertBefore(div, form);

            // Timeout after 3 sec
            setTimeout(function () {
                document.querySelector('.alert').remove();
            }, 3000);
        }
    }, {
        key: 'deleteBook',
        value: function deleteBook(target) {
            if (target.className === 'delete') {
                target.parentElement.parentElement.remove();
            }
        }
    }, {
        key: 'clearFields',
        value: function clearFields() {
            document.getElementById('title').value = '';
            document.getElementById('author').value = '';
            document.getElementById('isbn').value = '';
        }
    }]);

    return UI;
}();

var Store = function () {
    function Store() {
        _classCallCheck(this, Store);
    }

    _createClass(Store, null, [{
        key: 'getBooks',
        value: function getBooks() {
            var books = void 0;
            if (localStorage.getItem('books') === null) {
                books = [];
            } else {
                books = JSON.parse(localStorage.getItem('books'));
            }
            return books;
        }
    }, {
        key: 'displayBooks',
        value: function displayBooks() {
            var books = Store.getBooks();
            books.forEach(function (book) {
                var ui = new UI();
                ui.addBookToList(book);
            });
        }
    }, {
        key: 'addBooks',
        value: function addBooks(book) {
            var books = Store.getBooks();
            books.push(book);
            localStorage.setItem('books', JSON.stringify(books));
        }
    }, {
        key: 'removeBook',
        value: function removeBook(isbn) {
            alert(isbn);
            var books = Store.getBooks();
            books.forEach(function (book, index) {
                if (book.isbn === isbn) {
                    books.splice(index, 1);
                }
            });
            localStorage.setItem('books', JSON.stringify(books));
        }
    }]);

    return Store;
}();

document.addEventListener('DOMContentLoaded', Store.displayBooks);
// Event Listeners
document.getElementById('book-form').addEventListener('submit', function (e) {
    // Get form values
    var title = document.getElementById('title').value,
        author = document.getElementById('author').value,
        isbn = document.getElementById('isbn').value;

    // Instantiate book
    var book = new Book(title, author, isbn);

    // Instantiate UI
    var ui = new UI();

    // Validate
    if (title === '' || author === '' || isbn === '') {
        // Error alert
        ui.showAlert('Please fill in all fields', 'error');
    } else {
        // Add book to list
        ui.addBookToList(book);
        Store.addBooks(book);

        // Show success
        ui.showAlert('Book Added!', 'success');

        // Clear fields
        ui.clearFields();
    }

    e.preventDefault();
});

document.getElementById('book-list').addEventListener('click', function (e) {
    var ui = new UI();
    ui.deleteBook(e.target);
    Store.removeBook(e.target.parentElement.previousElementSibling.textContent);
    ui.showAlert('Book removed', 'success');
    e.preventDefault();
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/appes6.js");


/***/ })

/******/ });