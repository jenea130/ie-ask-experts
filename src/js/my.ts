import toggleMenu from "./modules/header/toggleMenu";
import togglePrice from "./modules/togglePrice";
import videoPlay from "./modules/video/videoPlay";
import accordionItems from "./modules/accordion/accordionItems";
import filterItems from "./modules/filter/filterItems";

window.addEventListener("DOMContentLoaded", function () {
  const plan = document.querySelector(".plan");
  const video = document.querySelector(".video");
  const accordion = document.querySelector(".accordion");
  const filter = document.querySelector(".taxes");
  const mainMenu = document.querySelector("#js-main-menu");

  if (plan) {
    togglePrice();
  }

  if (video) {
    videoPlay();
  }

  if (accordion) {
    accordionItems();
  }

  if (filter) {
    filterItems();
  }

  if (mainMenu) {
    toggleMenu();
  }

});
