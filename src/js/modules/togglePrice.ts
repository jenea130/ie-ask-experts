export default function togglePrice() {

  const buttons = document.querySelectorAll(".plan__item");
  const plans = document.querySelectorAll(".card-plan__price span");
  const labels = document.querySelectorAll(".card-plan__label span");

  buttons.forEach((item) => {
    item.addEventListener("click", function () {
      resetData();
      item.classList.add("active");
      const target = item.getAttribute("data-target");
      const targets = document.querySelectorAll("." + target);
      targets.forEach((elem) => {
        elem.classList.add("active");
      });
    });
  });

  function resetData() {
    buttons.forEach((item) => {
      item.classList.remove("active");
    });
    plans.forEach((item) => {
      item.classList.remove("active");
    });
    labels.forEach((item) => {
      item.classList.remove("active");
    });
  }
}
