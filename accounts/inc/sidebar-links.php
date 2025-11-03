<ul class="nav" id="sidebarAccordion">

  <!-- Dashboard -->
  <li class="nav-item">
    <a href="./" class="nav-link <?php echo $page=='dashboard'?'active':''; ?>">
      <i class="bi bi-house-door"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Transfer -->
  <li class="nav-item">
    <a class="nav-link"
       data-bs-toggle="collapse" href="#transferMenu" role="button" aria-expanded="false">
			<i class="bi bi-send"></i>
      <span>Transfer money</span>
      <span class="bi bi-chevron-down small ms-auto"></span>
    </a>
    <div id="transferMenu" class="collapse" data-bs-parent="#sidebarAccordion">
      <ul class="nav flex-column ms-3">
        <li><a href="./deposit" class="nav-link <?php echo $page=='deposit'?'active':''; ?>">Local transfer</a></li>
        <li><a href="./withdraw" class="nav-link <?php echo $page=='withdraw'?'active':''; ?>">Wire transfer</a></li>
        <li><a href="./withdraw" class="nav-link <?php echo $page=='withdraw'?'active':''; ?>">Transfer to self</a></li>
      </ul>
    </div>
  </li>

  <!-- Deposit -->
  <li class="nav-item">
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse" href="#depositMenu" role="button" aria-expanded="false">
			<i class="bi bi-wallet2"></i>
      <span>Deposit money</span>
      <span class="bi bi-chevron-down small ms-auto"></span>
    </a>
    <div id="depositMenu" class="collapse" data-bs-parent="#sidebarAccordion">
      <ul class="nav flex-column ms-3">
        <li><a href="./deposit" class="nav-link <?php echo $page=='deposit'?'active':''; ?>">Crypto deposit</a></li>
        <li><a href="./deposit" class="nav-link <?php echo $page=='deposit'?'active':''; ?>">Check deposit</a></li>
      </ul>
    </div>
  </li>

  <!-- Transactions -->
  <li class="nav-item">
    <a href="./transactions" class="nav-link <?php echo $page=='dashboard'?'active':''; ?>">
      <i class="bi bi-list-ol"></i>
      <span>Transactions</span>
    </a>
  </li>

  <!-- Transactions -->
  <li class="nav-item">
    <a href="./cards" class="nav-link <?php echo $page=='dashboard'?'active':''; ?>">
      <i class="bi bi-credit-card"></i>
      <span>My cards</span>
    </a>
  </li>

  <!-- Settings -->
  <li class="nav-item">
    <a href="./settings" class="nav-link <?php echo $page=='settings'?'active':''; ?>">
      <i class="bi bi-gear"></i>
      <span>Settings</span>
    </a>
  </li>

</ul>
