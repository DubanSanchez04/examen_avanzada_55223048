const productList = document.getElementById('product-list');
const searchInput = document.getElementById('search');
let products = [];

async function fetchProducts() {
  try {
    const response = await fetch('https://fakestoreapi.com/products');
    products = await response.json();
    displayProducts(products);
  } catch (error) {
    console.error('Error al cargar los productos:', error);
    productList.innerHTML = '<p> No se pudieron cargar los productos.</p>';
  }
}

function displayProducts(items) {
  productList.innerHTML = '';

  if (items.length === 0) {
    productList.innerHTML = '<p> No se encontraron productos para esa categoría.</p>';
    return;
  }

  items.forEach(product => {
    const productDiv = document.createElement('div');
    productDiv.className = 'product';

    productDiv.innerHTML = `
      <img src="${product.image}" alt="${product.title}">
      <h3>${product.title}</h3>
      <p><strong> Precio:</strong> $${product.price}</p>
      <p><strong> Categoría:</strong> ${product.category}</p>
    `;

    productList.appendChild(productDiv);
  });
}

searchInput.addEventListener('input', (e) => {
  const searchTerm = e.target.value.toLowerCase();
  const filtered = products.filter(product =>
    product.category.toLowerCase().includes(searchTerm)
  );
  displayProducts(filtered);
});

fetchProducts();
