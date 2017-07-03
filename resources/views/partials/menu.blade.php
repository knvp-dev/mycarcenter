<div class="container">
  <nav class="nav has-border-bottom">
    <div class="nav-left">
    <img class="menu-logo" src="/images/logo.png" alt="logo">
      <a class="nav-item">
        
      </a>
    </div>

    <!-- This "nav-toggle" hamburger menu is only visible on mobile -->
    <!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
    <span class="nav-toggle" @click="toggleMobileMenu">
      <span></span>
      <span></span>
      <span></span>
    </span>

    <!-- This "nav-menu" is hidden on mobile -->
    <!-- Add the modifier "is-active" to display it on mobile -->
    <div class="nav-right nav-menu" :class="showMobileMenu ? 'is-active' : ''">
      <a href="/" class="nav-item">
        Home
      </a>
      <a href="/aanbod" class="nav-item">
        Aanbod wagens
      </a>
      <a href="/contact" class="nav-item">
        Contact
      </a>
    </div>
  </nav>
</div>