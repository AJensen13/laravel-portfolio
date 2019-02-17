(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/comment_submit"],{

/***/ "./resources/js/comment_submit.js":
/*!****************************************!*\
  !*** ./resources/js/comment_submit.js ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {$('#comment').on('submit', function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: '/comment',
    data: $(this).serialize(),
    success: function success(msg) {
      // console.log(msg);
      if (msg.status == "success") {
        $('.chat-display').append('<p>' + msg.comment.comment_text + ' <span class="name">- ' + msg.user + '</span></p>');
        $('#text').val('');
      } else {
        alert("error submitting comment");
      }
    }
  });
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ 1:
/*!**********************************************!*\
  !*** multi ./resources/js/comment_submit.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /Users/andrewjensen/Documents/personal-projects/laravel-portfolio/resources/js/comment_submit.js */"./resources/js/comment_submit.js");


/***/ })

},[[1,"/js/manifest","/js/vendor"]]]);