export default function () {
  const filter_img = document.querySelectorAll(".taxes__img");
  const taxes_items = document.querySelectorAll(".taxes__item");

  taxes_items.forEach((item) => {
    item.addEventListener("click", (event) => {
      let filterClass = item.dataset["target"];

      resetActive();
      item.classList.add("active");

      filter_img.forEach((elem) => {
        elem.classList.remove("hide");
        if (!elem.classList.contains(filterClass) && filterClass !== "all") {
          elem.classList.add("hide");
        }
      });
    });
  });
  function resetActive() {
    taxes_items.forEach((item) => {
      item.classList.remove("active");
    });
  }
}
