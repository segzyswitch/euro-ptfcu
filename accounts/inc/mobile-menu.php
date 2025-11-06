
<!-- Mobile Bottom Navigation -->
<nav class="mobile-nav d-lg-none">
	<a href="./" class="mobile-nav-item">
		<i class="bi bi-house-door-fill"></i>
		<span>Home</span>
	</a>
	<a href="./deposit" class="mobile-nav-item">
		<i class="bi bi-wallet2"></i>
		<span>Deposit</span>
	</a>
	<a href="./transactions" class="mobile-nav-item">
		<i class="bi bi-list-ul position-relative"></i>
		<span>Transactions</span>
	</a>
	<a href="#" class="mobile-nav-item">
		<i class="bi bi-credit-card"></i>
		<span>Cards</span>
	</a>
	<a href="./settings" class="mobile-nav-item">
		<div class="profile-pic"></div>
		<span>Profile</span>
	</a>
</nav>

<footer class="d-none d-sm-flex py-3 page-footer">
	<a href="../" class="btn p-0">Home</a>
	<a href="../about-us" class="btn p-0">About</a>
	<a href="../terms-and-conditions" class="btn p-0">Terms</a>
	<a class="btn p-0 text-color">&copy; 2023 Reichsburg Banks. All rights reserved.</p>
</footer>

<script>
  // Get current URL path
  const mobilePage = window.location.pathname.split("/").pop();
	// alert(currentPage);

  // Loop through links
  document.querySelectorAll(".mobile-nav-item").forEach(link => {
    const href = link.getAttribute("href");

    if (href === `./${mobilePage}`) {
      link.classList.add("active"); // add class to <li>
			// alert(href)
    }
  });
</script>


<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'bc3708f258495e1801590ba31889da6292e8754a';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
