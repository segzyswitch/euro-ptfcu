<div class="overlay"></div>
<div class="search-overlay"></div>

  <!--  BEGIN SIDEBAR  -->
<div class="sidebar-wrapper sidebar-theme">
   <nav id="sidebar">
     <div class="shadow-bottom"></div>
     <ul class="list-unstyled menu-categories" id="accordionExample">
       <li class="menu">
         <a href="./" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
               <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
               <polyline points="9 22 9 12 15 12 15 22"></polyline>
             </svg>
             <span> Dashboard</span>
           </div>
         </a>
       </li>
       <li class="menu">
         <a href="#starter-kit" data-active="false" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
             <span>Transfer Money</span>
           </div>
           <div>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
               <polyline points="9 18 15 12 9 6"></polyline>
             </svg>
           </div>
         </a>
         <ul class="submenu list-unstyled collapse" id="starter-kit" data-parent="#accordionExample">
          <!-- <li>
            <a href="./transfer-pending.php"> Resume transfer</a>
          </li> -->
          <li>
            <a href="./domestic-transfer"> Local transfer</a>
          </li>
          <li>
             <a href="./wire-transfer"> Wire transfer</a>
           </li>
           <li>
             <a href="./self-transfer"> Transfer to self </a>
           </li>
         </ul>
       </li>
       <li class="menu">
         <a href="#starter-kit7" data-active="false" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-terminal">
               <polyline points="4 17 10 11 4 5"></polyline>
               <line x1="12" y1="19" x2="20" y2="19"></line>
             </svg>
             <span>Deposit Money</span>
           </div>
           <div>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
               <polyline points="9 18 15 12 9 6"></polyline>
             </svg>
           </div>
         </a>
         <ul class="submenu list-unstyled collapse" id="starter-kit7" data-parent="#accordionExample">
           <li>
             <a href="./deposit">Crypto deposit </a>
           </li>
           <li>
             <a href="./check-deposit"> Check Deposit </a>
           </li>
         </ul>
       </li>
       <?php
       if ( $user_info['transactions'] == 'true' ) {
         ?>
       <li class="menu">
         <a href="./history" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
             <span>Transactions</span>
           </div>
         </a>
       </li>
         <?php
       }
       if ( count($Controller->Deposits()) > 0 ) {
         ?>
       <li class="menu">
         <a href="./deposits" aria-expanded="false" class="dropdown-toggle">
           <div class="">
            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
             <span>Pending deposits</span>
           </div>
         </a>
       </li>
         <?php
       }
       ?>
       <li class="menu">
         <a href="./mycards" aria-expanded="false" class="dropdown-toggle">
           <div class="">
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
               <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
               <line x1="1" y1="10" x2="23" y2="10"></line>
             </svg>
             <span>Credit Cards</span>
           </div>
         </a>
       </li>
       <!-- <li class="menu">
         <a href="#starter-kit2" data-active="false" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
               <circle cx="12" cy="12" r="10"></circle>
               <polyline points="12 6 12 12 15 15"></polyline>
             </svg>
             <span>Loan/Mortages</span>
           </div>
           <div>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
               <polyline points="9 18 15 12 9 6"></polyline>
             </svg>
           </div>
         </a>
         <ul class="submenu list-unstyled collapse" id="starter-kit2" data-parent="#accordionExample" style="">
           <li>
             <a href="./loan-request"> New Loans</a>
           </li>
           <li>
             <a href="./loan"> My Loans</a>
           </li>

         </ul>
       </li> -->
       
       <li class="menu">
         <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
             <span>My Account</span>
           </div>
           <div>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
               <polyline points="9 18 15 12 9 6"></polyline>
             </svg>
           </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="submenu2" data-parent="#accordionExample">
           <li>
             <a href="./my-account"> Profile </a>
           </li>
           <!-- <li>
             <a href="./pending-kyc"> Kyc Verification </a>
           </li> -->
           <li>
             <a href="#sm2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              Security <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                 <polyline points="9 18 15 12 9 6"></polyline>
               </svg>
             </a>
             <ul class="collapse list-unstyled sub-submenu" id="sm2" data-parent="#submenu2">
               <li>
                 <a href="./settings-password"> Password </a>
               </li>
               <!-- <li><a href="./settings-pin">Pincode </a></li> -->
               <li>
                 <a href="./activities"> Activities </a>
               </li>
               <!-- <li>
                 <a href="./create-ticket"> Report </a>
               </li> -->
             </ul>
           </li>
         </ul>
       </li>

       <!--
       <li class="menu">
         <a href="#submenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
               <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
               <circle cx="12" cy="12" r="10"></circle>
               <line x1="12" y1="17" x2="12" y2="17"></line>
             </svg>
             <span>Need help?</span>
           </div>
           <div>
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
               <polyline points="9 18 15 12 9 6"></polyline>
             </svg>
           </div>
         </a>
         <ul class="collapse submenu list-unstyled" id="submenu3" data-parent="#accordionExample">
           <li>
             <a href="./create-ticket"> New ticket </a>
           </li>
           <li>
             <a href="./ticket"> View tickets </a>
           </li>
           <li>
             <a href="javascript:void(0);"> Live chat </a>
           </li> -->
           <!-- <li>
             <a href="./helpdesk">Helpdesk </a>
           </li>
         </ul>
       </li>
        -->

       <li class="menu">
         <a href="./logout" aria-expanded="false" class="dropdown-toggle">
           <div class="">
             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity">
               <path d="M10 22H5a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h5"></path>
               <polyline points="17 16 21 12 17 8"></polyline>
               <line x1="21" y1="12" x2="9" y2="12"></line>
             </svg>
             <span> Sign out</span>
           </div>
         </a>
       </li>
     </ul>
   </nav>
</div>
  <!--  END SIDEBAR  -->


  <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '6b91ee7b531a91ae777eb8f4e59d46ac0b9b32d8';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
