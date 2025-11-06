<!-- Desktop Sidebar -->
<div class="sidebar d-none d-lg-flex flex-column">
	<div class="w-100 mb-4 text-center">
		<a href="../"><img src="../logo.png" class="logo--img" height="65" /></a>
	</div>
	<nav class="sidebar-nav pt-2" style="overflow-y:auto;">
		<?php include 'sidebar-links.php' ?>
	</nav>
	<div class="sidebar-footer">
		<a href="./logout" class="btn btn-danger w-100">
			<i class="bi bi-box-arrow-right"></i> Logout
		</a>
	</div>
</div>

<script>
  // Get current URL path
  const currentPage = window.location.pathname.split("/").pop();

  // Loop through links
  document.querySelectorAll(".sidebar-nav a").forEach(link => {
    const href = link.getAttribute("href");

    if (href === `./${currentPage}`) {
      link.classList.add("active"); // add class to <li>
			// alert(href)
    }
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const activeLink = document.querySelector('.sidebar .nav-link.active');
  if (activeLink) {
    const collapseParent = activeLink.closest('.collapse');
    if (collapseParent) {
      const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseParent, { toggle: false });
      bsCollapse.show();
    }
  }
});
</script>
