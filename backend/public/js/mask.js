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
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/mask.js":
/*!*************************************!*\
  !*** ./resources/assets/js/mask.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$('.input-slug').keyup(function () {
  var slug = slugify($(this).val());
  $(this).val(slug);
});
$(".input-money").maskMoney({
  thousands: '.',
  decimal: ',',
  allowZero: true,
  symbolStay: true
});
$(".input-money").each(function () {
  if ($(this).val() == '') {
    $(this).val('0,00');
  }
});

function slugify(string) {
  var a = 'àáäâãåăæçèéëêǵḧìíïîḿńǹñòóöôœøṕŕßśșțùúüûǘẃẍÿź·/_,:;';
  var b = 'aaaaaaaaceeeeghiiiimnnnooooooprssstuuuuuwxyz------';
  var p = new RegExp(a.split('').join('|'), 'g');
  return string.toString().toLowerCase().replace(/\s+/g, '-') // Replace spaces with -
  .replace(p, function (c) {
    return b.charAt(a.indexOf(c));
  }) // Replace special characters
  .replace(/&/g, '-and-') // Replace & with ‘and’
  .replace(/[^\w\-]+/g, '') // Remove all non-word characters
  .replace(/\-\-+/g, '-'); // Replace multiple - with single -

  /*
  .replace(/^-+/, '') // Trim - from start of text
  .replace(/-+$/, '') // Trim - from end of text
  */
}

$('.input-phone').each(function () {
  var phone = $(this).val().replace(/\D/g, '');

  if (phone.length > 10) {
    $(this).inputmask({
      "mask": "(99) 99999-9999",
      "placeholder": " "
    });
  } else {
    $(this).inputmask({
      "mask": "(99) 9999-99999",
      "placeholder": " "
    });
  }
});
$('.input-cep').inputmask({
  "mask": "99999-999",
  "placeholder": "_"
});
$('.input-cnpj').inputmask({
  "mask": "99.999.999/9999-99",
  "placeholder": "_"
});
$('.input-cpf').inputmask({
  "mask": "999.999.999-99",
  "placeholder": "_"
});
$('.input-date').inputmask({
  "mask": "99/99/9999",
  "placeholder": "_"
});
$('.input-phone').focusout(function () {
  var phone = $(this).val().replace(/\D/g, '');

  if (phone.length > 10) {
    $(this).inputmask({
      "mask": "(99) 99999-9999",
      "placeholder": " "
    });
  } else {
    $(this).inputmask({
      "mask": "(99) 9999-99999",
      "placeholder": " "
    });
  }
}); // $('.input-date').datepicker({
//     language: 'pt-BR',
//     format: 'dd/mm/yyyy',
//     autoclose: true
// });

$(".input-kg").maskMoney({
  thousands: '.',
  decimal: ',',
  precision: 3,
  allowZero: true,
  symbolStay: true
});
$(".input-kg").each(function () {
  if ($(this).val() == '') {
    $(this).val('0,000');
  }
});

/***/ }),

/***/ "./resources/assets/sass/admin.scss":
/*!******************************************!*\
  !*** ./resources/assets/sass/admin.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/sass/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************************************************!*\
  !*** multi ./resources/assets/js/mask.js ./resources/assets/sass/admin.scss ./resources/assets/sass/app.scss ***!
  \***************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\ecommerce\backend\resources\assets\js\mask.js */"./resources/assets/js/mask.js");
__webpack_require__(/*! C:\xampp\htdocs\ecommerce\backend\resources\assets\sass\admin.scss */"./resources/assets/sass/admin.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\ecommerce\backend\resources\assets\sass\app.scss */"./resources/assets/sass/app.scss");


/***/ })

/******/ });