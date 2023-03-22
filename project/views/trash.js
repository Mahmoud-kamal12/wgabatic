// Get all the plus buttons
const plusButtons = document.querySelectorAll('.plus');

// Loop through each plus button
plusButtons.forEach((button) => {

  // Add a click event listener to the button
  button.addEventListener('click', () => {

      // Get the meal name and price
      const mealName = button.parentNode.querySelector('.Meal_name');
      const mealPrice = button.parentNode.querySelector('.meal_price');

      // Check if the elements exist before getting their text content
      if (mealName && mealPrice) {
      const mealNameText = mealName.textContent;
      const mealPriceText = mealPrice.textContent;

      // Create the new item HTML
      const newItemHTML = `
      <div class="d-flex">
        <span class="name">${mealNameText}</span>
        <span class="price ml-auto">${mealPriceText} <i class="ml-3 fa fa-times-circle"></i></span>
      </div>
      `;

      // Add the new item to the list
      const itemList = document.querySelector('.item-list');
      itemList.insertAdjacentHTML('beforeend', newItemHTML);

      // Add a click event listener to the times-circle icon for the new item
      const lastItem = itemList.lastElementChild;
      lastItem.querySelector('.fa-times-circle').addEventListener('click', () => {
      lastItem.remove();
      });
      }
      else{
        console.log("err");
      }


  });

});






















// // Get all the plus buttons
// const plusButtons = document.querySelectorAll('.plus');

// // Loop through each plus button
// plusButtons.forEach((button) => {

//   // Add a click event listener to the button
//   button.addEventListener('click', () => {

//     // Get the meal name and price
//     const mealName = button.parentElement.parentElement.querySelector('.meal_name').textContent;
//     const mealPrice = button.parentElement.parentElement.querySelector('.meal_price').textContent;

//     // console.log(mealName.innerHTML);
//     // console.log(mealPrice.innerHTML);
//     // Create the new item HTML
//     const newItemHTML = `
//       <div class="d-flex">
//         <span class="name">${mealName}</span>
//         <span class="price ml-auto">${mealPrice} <i class="ml-3 fa fa-times-circle"></i></span>
//       </div>
//     `;

//     // Add the new item to the list
//     const itemList = document.querySelector('.item-list');
//     itemList.insertAdjacentHTML('beforeend', newItemHTML);

//     // Add a click event listener to the times-circle icon for the new item
//     const lastItem = itemList.lastElementChild;
//     lastItem.querySelector('.fa-times-circle').addEventListener('click', () => {
//       lastItem.remove();
//     });

//   });

// });














// // Get all the plus buttons
// const plusButtons = document.querySelectorAll('.Add_meal');

// // Set initial total price to 0
// let totalPrice = 0;

// // Loop through each plus button
// plusButtons.forEach((button) => {

//   // Add a click event listener to the button
//   button.addEventListener('click', () => {

//     // Get the meal name and price
//     const mealName = button.parentElement.parentElement.querySelector('.meal_name').textContent;
//     const mealPrice = button.parentElement.querySelector('.meal_price').textContent;

//     // Create the new item HTML
//     const newItemHTML = `
//       <div class="d-flex">
//         <span class="name">${mealName}</span>
//         <span class="price ml-auto">${mealPrice} <i class="ml-3 fa fa-times-circle"></i></span>
//       </div>
//     `;

//     // Add the new item to the list
//     const itemList = document.querySelector('.item-list');
//     itemList.insertAdjacentHTML('beforeend', newItemHTML);

//     // Add the price of the new item to the total price
//     totalPrice += parseFloat(mealPrice);
//     const totalPriceElement = document.getElementById('total-price');
//     totalPriceElement.textContent = totalPrice.toFixed(2);

//     // Add a click event listener to the times-circle icon for the new item
//     const lastItem = itemList.lastElementChild;
//     lastItem.querySelector('.fa-times-circle').addEventListener('click', () => {
//       const itemPrice = parseFloat(lastItem.querySelector('.price').textContent);
//       totalPrice -= itemPrice;
//       totalPriceElement.textContent = totalPrice.toFixed(2);
//       lastItem.remove();
//     });

//   });

// });



































// // Get all the plus buttons
// const plusButtons = document.querySelectorAll('.Add_meal');

// // Set initial total price to 0
// let totalPrice = 0;

// // Loop through each plus button
// plusButtons.forEach((button) => {

//   // Add a click event listener to the button
//   button.addEventListener('click', () => {

//     // Get the meal name and price
//     const mealName = button.parentElement.parentElement.querySelector('.meal_name').textContent;
//     const mealPrice = button.parentElement.querySelector('.meal_price').textContent;

//     // Create the new item HTML
//     const newItemHTML = `
//       <div class="d-flex">
//         <span class="name">${mealName}</span>
//          <span class="price ml-auto">$${mealPrice.toFixed(2)} <i id="delete-${mealName}" class="ml-3 fa fa-times-circle"></i></span>

//       </div>
//     `;

//     // Add the new item to the list
//     const itemList = document.querySelector('.item-list');
//     itemList.insertAdjacentHTML('beforeend', newItemHTML);

//     // Add the price of the new item to the total price
//     totalPrice += parseFloat(mealPrice);
//     const totalPriceElement = document.getElementById('total-price');
//     totalPriceElement.textContent = totalPrice.toFixed(2);

//     // Add a click event listener to the times-circle icon for the new item
//     const lastItem = itemList.lastElementChild;
//     lastItem.querySelector('.fa-times-circle').addEventListener('click', () => {
//       const itemPrice = parseFloat(lastItem.querySelector('.price').textContent);
//       totalPrice -= itemPrice;
//       totalPriceElement.textContent = totalPrice.toFixed(2);
//       lastItem.remove();
//     });

//   });

// });
