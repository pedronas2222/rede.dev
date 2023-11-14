document.addEventListener('DOMContentLoaded', function() {
    const products = document.querySelectorAll('.product');
    const productDetails = document.getElementById('product-details');
    const productName = document.getElementById('product-name');
    const productPrice = document.getElementById('product-price');
    const productDescription = document.getElementById('product-description');
    const closeProductDetails = document.getElementById('close-product-details');

    products.forEach(product => {
        const viewButton = product.querySelector('.view-product');
        viewButton.addEventListener('click', function() {
            const id = product.getAttribute('data-id');
            const name = product.getAttribute('data-name');
            const price = product.getAttribute('data-price');
            const description = product.getAttribute('data-description');

            productName.textContent = `Produto: ${name}`;
            productPrice.textContent = `Preço: R$${price}`;
            productDescription.textContent = `Descrição: ${description}`;
            productDetails.style.display = 'block';
        });
    });

    closeProductDetails.addEventListener('click', function() {
        productDetails.style.display = 'none';
    });
});



function openModal(imageSrc) {
    const modal = document.getElementById('myModal');
    const modalImage = document.getElementById('modalImage');
    modal.style.display = 'block';
    modalImage.src = imageSrc;
}

function closeModal() {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
}
