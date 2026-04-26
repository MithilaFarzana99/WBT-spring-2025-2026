const TAX_RATE = 0.05;

const originalPriceInput = document.getElementById('original-price');
const discountPercentInput = document.getElementById('discount-percent');
const finalPriceInput = document.getElementById('final-price');
const priceError = document.getElementById('price-error');
const discountError = document.getElementById('discount-error');

let budgetAlertShown = false;

function calculate() {
  let price = Number(originalPriceInput.value) || 0;
  let discount = Number(discountPercentInput.value) || 0;

  if (price < 0) {
    price = 0;
    originalPriceInput.value = '';
    priceError.textContent = 'Price cannot be less than 0.';
  } else {
    priceError.textContent = '';
  }

  if (discount < 0) {
    discount = 0;
    discountPercentInput.value = '';
    discountError.textContent = 'Discount cannot be less than 0.';
  } else if (discount > 100) {
    discount = 100;
    discountPercentInput.value = 100;
    discountError.textContent = 'Discount cannot exceed 100%.';
  } else {
    discountError.textContent = '';
  }

  const discountAmount = price * (discount / 100);
  const priceAfterDiscount = price - discountAmount;
  const tax = priceAfterDiscount * TAX_RATE;
  const finalPrice = priceAfterDiscount + tax;

  finalPriceInput.value = finalPrice.toFixed(2);

  if (price > 0 && discount > 0 && finalPrice < 500 && !budgetAlertShown) {
      alert('You unlocked a "Budget Deal"!');
      budgetAlertShown = true;
  }

  if (price > 0 && discount > 0 && finalPrice >= 500) {
      budgetAlertShown = false;
  }
}

originalPriceInput.addEventListener('input', calculate);
discountPercentInput.addEventListener('input', calculate);
