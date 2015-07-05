(function() {
  $.fn.confirmSubmit = function(message) {
    if (confirm(message)) {
      return $(this).submit();
    }
  };

}).call(this);

//# sourceMappingURL=jquery-utils.js.map