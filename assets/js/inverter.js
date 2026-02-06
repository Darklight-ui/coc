document.addEventListener("DOMContentLoaded", () => {
  const quantityEl = document.getElementById("quantity");
  const incrementBtn = document.getElementById("increment");
  const decrementBtn = document.getElementById("decrement");

  let quantity = 1;

  incrementBtn.addEventListener("click", () => {
    quantity++;
    quantityEl.textContent = quantity;
  });

  decrementBtn.addEventListener("click", () => {
    if (quantity > 1) {
      quantity--;
      quantityEl.textContent = quantity;
    }
  });
});
