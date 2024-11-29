document.addEventListener("DOMContentLoaded", () => {
    // Select all "Buy Now" buttons
    const buyButtons = document.querySelectorAll(".button");

    // Add click event listeners to each button
    buyButtons.forEach((button, index) => {
        button.addEventListener("click", (event) => {
            event.preventDefault(); // Prevent default link behavior

            // Retrieve product details
            const product = button.closest(".product");
            const title = product.querySelector(".product-title").innerText;
            const price = product.querySelector(".product-price").innerText;

            // Simulate adding the product to the cart or other action
            console.log(`Product Selected: ${title} - ${price}`);

            // Display a confirmation message (optional)
            alert(`${title} has been added to your cart!`);
        });
    });
});
