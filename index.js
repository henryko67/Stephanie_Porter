"use strict";
(function() {

  window.addEventListener("load", init);

  /**
   * Initializes all functions, in this case, only the toggler.
   */
  function init() {
    id("options").addEventListener("click", toggleSideBar);
  }

  /**
   * Makes the sidebar collapse and options icon move to the left.
   */
  function toggleSideBar() {
    id("tab").classList.toggle("hidden");
    id("options").classList.toggle("move");
  }

  /**
   * @param {object} idName of the id.
   * @returns {object} DOM object
   * Fetches tag based on id.
   */
  function id(idName) {
    return document.getElementById(idName);
  }
})();
