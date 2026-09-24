<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SuhanaShop</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

  <!-- ===== TOP BAR ===== -->
  <div class="topbar">
    <span>Free shipping on orders over $50 &nbsp;·&nbsp; Use code <strong>SUHANA10</strong> for 10% off</span>
  </div>

  <!-- ===== HEADER ===== -->
  <header class="header">
    <div class="header-inner">

      <!-- Logo -->
      <a href="#" class="logo">
        <span class="logo-icon">S</span>
        <span class="logo-text">Suhana<strong>Shop</strong></span>
      </a>

      <!-- Search Bar (functional area) -->
      <div class="search-wrapper" id="searchWrapper">
        <div class="search-bar">
          <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
          <input
            type="text"
            id="searchInput"
            class="search-input"
            placeholder="Search for products, brands, categories…"
            autocomplete="off"
          />
          <button class="search-clear" id="searchClear" aria-label="Clear search">&#x2715;</button>
        </div>

        <!-- Dropdown Results -->
        <div class="search-dropdown" id="searchDropdown">
          <div class="dropdown-section-label">Suggested Products</div>

          <!-- Items injected by JS / your implementation -->
          <!-- Static demo items below — replace with dynamic results -->

          
          <div class="dropdown-footer">
            Press <kbd>Enter</kbd> to see all results
          </div>
        </div>
      </div>

      <!-- Header Actions -->
      <nav class="header-actions">
        <a href="#" class="action-btn" title="Account">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>
          </svg>
          <span>Account</span>
        </a>
        <a href="#" class="action-btn" title="Wishlist">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
          </svg>
          <span>Wishlist</span>
        </a>
        <a href="#" class="action-btn cart-btn" title="Cart">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/>
            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>
          </svg>
          <span>Cart</span>
          <span class="cart-badge">3</span>
        </a>
      </nav>

    </div>

    <!-- Nav Menu -->
    <nav class="nav-menu">
      <a href="#" class="nav-link active">Home</a>
      <a href="#" class="nav-link">New Arrivals</a>
      <a href="#" class="nav-link">Women</a>
      <a href="#" class="nav-link">Men</a>
      <a href="#" class="nav-link">Electronics</a>
      <a href="#" class="nav-link">Home &amp; Living</a>
      <a href="#" class="nav-link">Sale <span class="badge-hot">HOT</span></a>
    </nav>
  </header>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="hero-content">
      <span class="hero-eyebrow">New Season · Spring 2025</span>
      <h1 class="hero-title">Discover<br/>Your Style</h1>
      <p class="hero-sub">Curated collections for modern living. Thoughtfully made, beautifully delivered.</p>
      <div class="hero-cta">
        <a href="#" class="btn-primary">Shop Now</a>
        <a href="#" class="btn-ghost">View Lookbook</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-img-wrap">
        <img src="https://placehold.co/520x600/e0dbd5/777?text=Hero+Image" alt="Hero" />
        <div class="hero-badge">Up to <strong>40%</strong> Off</div>
      </div>
    </div>
  </section>

  <!-- ===== CATEGORIES ===== -->
  <section class="section">
    <div class="section-header">
      <h2 class="section-title">Shop by Category</h2>
      <a href="#" class="view-all">View All →</a>
    </div>
    <div class="categories-grid">
      <a href="#" class="category-card">
        <img src="https://placehold.co/260x300/e8e4df/666?text=Women" alt="Women"/>
        <span>Women</span>
      </a>
      <a href="#" class="category-card">
        <img src="https://placehold.co/260x300/dfe4e8/666?text=Men" alt="Men"/>
        <span>Men</span>
      </a>
      <a href="#" class="category-card">
        <img src="https://placehold.co/260x300/e4e8df/666?text=Electronics" alt="Electronics"/>
        <span>Electronics</span>
      </a>
      <a href="#" class="category-card">
        <img src="https://placehold.co/260x300/e8dfdf/666?text=Home" alt="Home &amp; Living"/>
        <span>Home &amp; Living</span>
      </a>
    </div>
  </section>

  <!-- ===== FEATURED PRODUCTS ===== -->
  <section class="section section-alt">
    <div class="section-header">
      <h2 class="section-title">Featured Products</h2>
      <a href="#" class="view-all">View All →</a>
    </div>
    <div class="products-grid">

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e8e4df/777?text=Product+1" alt="Product"/>
          <span class="product-tag">New</span>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Bags</span>
          <h3 class="product-name">Structured Leather Tote</h3>
          <div class="product-footer">
            <span class="product-price">$89.99</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/dfe4e8/777?text=Product+2" alt="Product"/>
          <span class="product-tag tag-sale">Sale</span>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Watches</span>
          <h3 class="product-name">Minimalist Mesh Watch</h3>
          <div class="product-footer">
            <span class="product-price">$149.00 <del class="product-old">$199.00</del></span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e4e8df/777?text=Product+3" alt="Product"/>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Footwear</span>
          <h3 class="product-name">Canvas Low-Top Sneakers</h3>
          <div class="product-footer">
            <span class="product-price">$59.00</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e8dfdf/777?text=Product+4" alt="Product"/>
          <span class="product-tag">Trending</span>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Kitchen</span>
          <h3 class="product-name">Ceramic Coffee Mug Set</h3>
          <div class="product-footer">
            <span class="product-price">$22.50</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== BANNER ===== -->
  <section class="promo-banner">
    <div class="promo-text">
      <span class="promo-eyebrow">Limited Time</span>
      <h2>Get 20% Off Your First Order</h2>
      <p>Sign up to our newsletter and unlock an exclusive welcome discount.</p>
      <div class="promo-form">
        <input type="email" placeholder="Enter your email address"/>
        <button>Subscribe</button>
      </div>
    </div>
  </section>

  <!-- ===== TRENDING ===== -->
  <section class="section">
    <div class="section-header">
      <h2 class="section-title">Trending Now</h2>
      <a href="#" class="view-all">View All →</a>
    </div>
    <div class="products-grid">

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e2e2e2/777?text=Trend+1" alt="Product"/>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Lighting</span>
          <h3 class="product-name">Nordic Desk Lamp</h3>
          <div class="product-footer">
            <span class="product-price">$74.00</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e2ddd8/777?text=Trend+2" alt="Product"/>
          <span class="product-tag">Popular</span>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Skincare</span>
          <h3 class="product-name">Hydrating Face Serum</h3>
          <div class="product-footer">
            <span class="product-price">$38.00</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/dde2e8/777?text=Trend+3" alt="Product"/>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Electronics</span>
          <h3 class="product-name">Wireless Earbuds Pro</h3>
          <div class="product-footer">
            <span class="product-price">$129.00</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://placehold.co/280x320/e8e8dd/777?text=Trend+4" alt="Product"/>
          <button class="product-wish" aria-label="Wishlist">♡</button>
        </div>
        <div class="product-info">
          <span class="product-cat">Home</span>
          <h3 class="product-name">Linen Throw Pillow</h3>
          <div class="product-footer">
            <span class="product-price">$34.00</span>
            <button class="add-cart">+ Add</button>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- ===== TRUST BADGES ===== -->
  <section class="trust-bar">
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      <div>
        <strong>Free Shipping</strong>
        <span>On orders over $50</span>
      </div>
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 12l9-9 9 9M5 10v9a1 1 0 001 1h4v-5h4v5h4a1 1 0 001-1v-9"/></svg>
      <div>
        <strong>Easy Returns</strong>
        <span>30-day return policy</span>
      </div>
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
      <div>
        <strong>Secure Payment</strong>
        <span>256-bit SSL encryption</span>
      </div>
    </div>
    <div class="trust-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg>
      <div>
        <strong>24/7 Support</strong>
        <span>Always here to help</span>
      </div>
    </div>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer class="footer">
    <div class="footer-top">
      <div class="footer-brand">
        <a href="#" class="logo logo-white">
          <span class="logo-icon">S</span>
          <span class="logo-text">Suhana<strong>Shop</strong></span>
        </a>
        <p>Your go-to destination for modern, curated products delivered to your door.</p>
        <div class="social-links">
          <a href="#" aria-label="Instagram">Ig</a>
          <a href="#" aria-label="Twitter">Tw</a>
          <a href="#" aria-label="Facebook">Fb</a>
          <a href="#" aria-label="Pinterest">Pt</a>
        </div>
      </div>

      <div class="footer-links">
        <h4>Shop</h4>
        <a href="#">New Arrivals</a>
        <a href="#">Women</a>
        <a href="#">Men</a>
        <a href="#">Electronics</a>
        <a href="#">Sale</a>
      </div>

      <div class="footer-links">
        <h4>Help</h4>
        <a href="#">FAQs</a>
        <a href="#">Shipping Info</a>
        <a href="#">Returns</a>
        <a href="#">Order Tracking</a>
        <a href="#">Contact Us</a>
      </div>

      <div class="footer-links">
        <h4>Company</h4>
        <a href="#">About Us</a>
        <a href="#">Careers</a>
        <a href="#">Press</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2025 SuhanaShop. All rights reserved.</span>
      <div class="payment-icons">
        <span>Visa</span><span>Mastercard</span><span>PayPal</span><span>Stripe</span>
      </div>
    </div>
  </footer>

  <!-- ===== SEARCH JS (demo toggle, replace with your implementation) ===== -->
  <script>
const searchInput = document.getElementById("searchInput");
const searchDropdown = document.getElementById("searchDropdown");
const searchClear = document.getElementById("searchClear");
const searchWrapper = document.getElementById("searchWrapper");

function hideDropdown() {
  searchDropdown.classList.remove("visible");
}

function showDropdown() {
  searchDropdown.classList.add("visible");
}

searchInput.addEventListener("input", function () {
  const searchText = searchInput.value.trim();

  searchClear.classList.toggle("visible", searchText.length > 0);

  if (searchText === "") {
    searchDropdown.innerHTML = "";
    hideDropdown();
    return;
  }

  searchDropdown.innerHTML = `
    <div class="dropdown-footer">Searching...</div>
  `;
  showDropdown();

  fetch("search.php?q=" + encodeURIComponent(searchText))
    .then(response => response.json())
    .then(products => {
      if (products.length === 0) {
        searchDropdown.innerHTML = `
          <div class="dropdown-footer">No product found</div>
        `;
        showDropdown();
        return;
      }

      let allItemsHtml = `
        <div class="dropdown-section-label">Suggested Products</div>
      `;

      products.forEach(function (item) {
        allItemsHtml += `
          <a href="#" class="dropdown-item">
            <img src="${item.image_url}" alt="${item.name}" class="dropdown-img"/>
            <div class="dropdown-info">
              <span class="dropdown-name">${item.name}</span>
              <span class="dropdown-category">${item.category}</span>
            </div>
            <span class="dropdown-price">$${item.price}</span>
          </a>
        `;
      });

      allItemsHtml += `
        <div class="dropdown-footer">
          Press <kbd>Enter</kbd> to see all results
        </div>
      `;

      searchDropdown.innerHTML = allItemsHtml;
      showDropdown();
    })
    .catch(error => {
      searchDropdown.innerHTML = `
        <div class="dropdown-footer">Something went wrong</div>
      `;
      console.log(error);
    });
});

searchClear.addEventListener("click", function () {
  searchInput.value = "";
  searchDropdown.innerHTML = "";
  hideDropdown();
  searchClear.classList.remove("visible");
  searchInput.focus();
});

document.addEventListener("click", function (event) {
  if (!searchWrapper.contains(event.target)) {
    hideDropdown();
  }
});
</script>
<script>
const searchInput = document.getElementById("searchInput");
const searchDropdown = document.getElementById("searchDropdown");
const searchClear = document.getElementById("searchClear");
const searchWrapper = document.getElementById("searchWrapper");

searchInput.addEventListener("input", function () {
    const searchText = searchInput.value.trim();

    searchClear.classList.toggle("visible", searchText.length > 0);

    if (searchText === "") {
        searchDropdown.innerHTML = "";
        searchDropdown.classList.remove("visible");
        return;
    }

    searchDropdown.innerHTML = `<div class="dropdown-footer">Searching...</div>`;
    searchDropdown.classList.add("visible");

    fetch("search.php?q=" + encodeURIComponent(searchText))
        .then(response => response.json())
        .then(products => {
            if (products.length === 0) {
                searchDropdown.innerHTML = `<div class="dropdown-footer">No product found</div>`;
                return;
            }

            let html = `<div class="dropdown-section-label">Suggested Products</div>`;

            products.forEach(function (item) {
                html += `
                    <a href="#" class="dropdown-item">
                        <img src="${item.image_url}" alt="${item.name}" class="dropdown-img">
                        <div class="dropdown-info">
                            <span class="dropdown-name">${item.name}</span>
                            <span class="dropdown-category">${item.category}</span>
                        </div>
                        <span class="dropdown-price">Rs. ${item.price}</span>
                    </a>
                `;
            });

            searchDropdown.innerHTML = html;
            searchDropdown.classList.add("visible");
        })
        .catch(error => {
            console.log(error);
            searchDropdown.innerHTML = `<div class="dropdown-footer">Something went wrong</div>`;
            searchDropdown.classList.add("visible");
        });
});

searchClear.addEventListener("click", function () {
    searchInput.value = "";
    searchDropdown.innerHTML = "";
    searchDropdown.classList.remove("visible");
    searchClear.classList.remove("visible");
    searchInput.focus();
});

document.addEventListener("click", function (event) {
    if (!searchWrapper.contains(event.target)) {
        searchDropdown.classList.remove("visible");
    }
});
</script>
</body>
</html>