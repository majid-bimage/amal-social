<?= $this->include('header') ?>

      </div>      <div>
        <div class="position-relative">
<!-- Page Content  -->
<div class="header-for-bg">
    <div class="background-header position-relative">
        <img src="../assets/images/page-img/profile-bg3.jpg" class="img-fluid w-100" alt="header-bg" loading="lazy">
        <div class="title-on-header">
            <div class="data-block">
                <h2>Friend Lists</h2>
            </div>
        </div>
    </div>
</div>
<!-- Page Content  -->        </div>
        <div class="content-inner " id="page_layout">
<div class="container">
   <div class="row">
    <?php 
    foreach ($followers as $value) { 
       // Set the profile picture path. If 'profile_picture' is not set or is 'none', use the default image.
       $profilePic = (!empty($post['profile_picture']) && $post['profile_picture'] != 'none') ? $post['profile_picture'] : 'default_dp.jpg'; 
       $coverPic = (!empty($post['cover_photo']) && $post['cover_photo'] != 'none') ? $post['cover_photo'] : 'default_dp.jpg'; 

       ?>
        <div class="col-md-6">
        <div class="card card-block card-stretch card-height">
           <div class="card-body profile-page p-0">
              <div class="profile-header-image">
                 <div class="cover-container">
                    <!-- <img src="<?= base_url('uploads/' . $coverPic) ?>" alt="profile-bg" class="rounded img-fluid w-100" loading="lazy" style="max-height: 150px;"> -->
                 </div>
                 <div class="profile-info p-4">
                    <div class="user-detail">
                       <div class="d-flex flex-wrap justify-content-between align-items-start">
                          <div class="profile-detail d-flex">
                             <div class="profile-img pe-lg-4">
                                <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="profile-img" loading="lazy" class="avatar-130 img-fluid" />
                             </div>
                             <div class="user-data-block mt-md-0 mt-2">
                                <h4>
                                   <a href="friend-profile.html"><?= $value["first_name"] ?></a>
                                </h4>
                                <!-- <h6>@designer</h6> -->
                                <!-- <p class="mb-2 mb-md-0">Lorem Ipsum is simply dummy text of the</p> -->
                             </div>
                          </div>
                          <button type="submit" class="btn btn-primary" onClick="unfollow(<?=$value["followerId"] ?>,<?= $value["followedId"] ?>)">Following</button>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <?php 
    }
    ?>

   </div>
</div>
        </div>
      </div>
      <div class="right-sidebar-mini right-sidebar">
         <?= $this->include('chatDiv') ?>
      </div>
      
      </div>
  </main>

  
  <footer class="iq-footer">
     <div class="container-fluid">
        <div class="row">
           <div class="col-lg-6">
              <ul class="list-inline mb-0">
                 <li class="list-inline-item"><a href="../dashboard/privacy-policy.html">Privacy Policy</a></li>
                 <li class="list-inline-item ms-3 ms-md-5"><a href="../dashboard/terms-of-service.html">Terms of Use</a></li>
              </ul>
              </div>
              <div class="col-lg-6 d-flex justify-content-end">
              Copyright <script>document.write(new Date().getFullYear())</script>
              <a href="../index.html" class="mx-1">SocialV</a>
              All Rights Reserved.
         </div>
         </div>
        </div>
     </footer>
  <!-- Wrapper End-->
  <!-- offcanvas start -->

  <!-- Live Customizer start -->
  <!-- Setting offcanvas start here -->
  <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer" data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label">
      <div class="offcanvas-header pb-0">
          <div class="d-flex align-items-center">
              <h4 class="offcanvas-title" id="live-customizer-label">Setting Panel</h4>
          </div>
          <div class="close-icon" data-bs-dismiss="offcanvas">
              <svg xmlns="http://www.w3.org/2000/svg"  width="24px" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
          </div>
      </div>
      <div class="offcanvas-body data-scrollbar">
          <div class="row">
              <div class="col-lg-12">
                  <div>
                      <div class="text-center mb-4">
                          <h5 class="d-inline-block">Style Setting</h5>
                      </div>
                      <div>
                          <!-- Theme start here -->
                          <div class="mb-4">
                              <h5 class="mb-3">Theme</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100" >
                                      <input class="form-check-input custum-redio-btn" type="radio" value="light" name="theme_scheme" id="color-mode-light" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between" for="color-mode-light">
                                         <span>Light Theme</span> 
                                          <div class="text-primary ">
                                              <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                              </svg>
                                          </div>
                                      </label>
                                  </div>
                              </div>
                               <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100 ">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="dark"  name="theme_scheme" id="color-mode-dark">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-dark">
                                         <span>Dark Theme</span>
                                         <div class="text-primary ">
                                             <svg width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                              </svg>
                                         </div>                                    
                                      </label>
                                  </div>
                              </div>
                              <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="auto"  name="theme_scheme" id="color-mode-auto">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="color-mode-auto">
                                         <span>Device Default</span> 
                                         <div class="text-primary ">
                                              <svg class="rounded" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" fill="#1E2745"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  <g clip-path="url(#clip0_507_92)">
                                                  <rect width="30" height="27" fill="white"/>
                                                  <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B"/>
                                                  <rect x="16.5" y="8.25" width="37.5" height="3" rx="1.5" fill="#DADCE0"/>
                                                  <rect x="6" y="18" width="48" height="3" rx="1.5" fill="currentColor"/>
                                                  </g>
                                                  <rect x="0.375" y="0.375" width="59.25" height="26.25" rx="4.125" stroke="#DADCE0" stroke-width="0.75"/>
                                                  <defs>
                                                  <clipPath id="clip0_507_92">
                                                  <rect width="30" height="27" fill="white"/>
                                                  </clipPath>
                                                  </defs>
                                              </svg>
                                         </div>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Color customizer end here -->
                          <hr class="hr-horizontal">
                          <!-- Menu Style start here -->
                          <div>
                              <h5 class="mt-4 mb-3">Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-3 mb-4">
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-mini" class="btn-check" name="sidebar_type" id="sidebar-mini">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-mini">
                                          Mini
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-hover" data-extra="{target: '.sidebar', ClassListAdd: 'sidebar-mini'}"
                                          class="btn-check" name="sidebar_type" id="sidebar-hover">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-hover">
                                          Hover
                                      </label>
                                  </div>
                                  <div data-setting="checkbox" class="text-center">
                                      <input type="checkbox" value="sidebar-soft" class="btn-check" name="sidebar_type" id="sidebar-soft">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="sidebar-soft">
                                          Soft
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <!-- Menu Style end here -->
  
                          <hr class="hr-horizontal">
  
                          <!-- Active Menu Style start here -->
  
                          <div class="mb-4">
                              <h5 class="mt-4 mb-3">Active Menu Style</h5>
                              <div class="d-grid gap-3 grid-cols-2">
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded" class="btn-check" name="sidebar_menu_style" id="navs-rounded">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded">
                                          Rounded One
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-rounded-all" class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-rounded-all">
                                          Rounded All
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill" class="btn-check" name="sidebar_menu_style" id="navs-pill">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill">
                                          Pill One Side
                                      </label>
                                  </div>
                                  <div data-setting="radio" class="text-center">
                                      <input type="radio" value="navs-pill-all" class="btn-check" name="sidebar_menu_style" id="navs-pill-all">
                                      <label class="btn btn-border btn-setting-panel d-block overflow-hidden" for="navs-pill-all">
                                          Pill All
                                      </label>
                                  </div>
                              </div>
                          </div>
                           <hr class="hr-horizontal">
                          <!-- Color customizer start here -->
                          <div>
                              <div class="d-flex align-items-center justify-content-between">
                                  <h6 class="mt-4 mb-3">Color Customizer</h6>
                                  <div class="d-flex align-items-center">
                                      <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                          aria-expanded="false" aria-controls="custom-color">Custom</a>
                                      <div data-setting="radio">
                                          <input type="radio" value="default" class="btn-check"
                                              name="theme_color" id="default"
                                              data-colors='{"primary": "#7093e5", "secondary": "#f68685"}'>
                                          <label class="btn bg-transparent px-2 border-0" for="default"
                                              data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                              data-bs-original-title="Reset color">
                                              <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                                  xmlns="http://www.w3.org/2000/svg">
                                                  <path
                                                      d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                      fill="#31BAF1" />
                                                  <path
                                                      d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                      fill="#0169CA" />
                                              </svg>
                                          </label>
                                      </div>
                                  </div>
                              </div>
                              <div class="collapse" id="custom-color">
                                  <div class="form-group d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-primary-color">Primary</label>
                                      <input class="" name="theme_color" data-extra="primary" type="color"
                                          id="custom-primary-color" value="#50b5ff" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-secondary-color">Secondary</label>
                                      <input class="" name="theme_color" data-extra="secondary" type="color"
                                          id="custom-secondary-color" value="#6c757d" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-success-color">Success</label>
                                      <input class="" name="theme_color" data-extra="success" type="color"
                                          id="custom-success-color" value="#2dcdb2" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-danger-color">Danger</label>
                                      <input class="" name="theme_color" data-extra="danger" type="color"
                                          id="custom-danger-color" value="#ff9b8a" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-warning-color">Warning</label>
                                      <input class="" name="theme_color" data-extra="warning" type="color"
                                          id="custom-warning-color" value="#ffba68" data-setting="color">
                                  </div>
                                  <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                      <label class="" for="custom-info-color">Info</label>
                                      <input class="" name="theme_color" data-extra="info" type="color"
                                          id="custom-info-color" value="#d592ff" data-setting="color">
                                  </div>                                
                              </div>
                              <div class="grid-cols-5 mb-4 d-grid gap-3">
                                  <div data-setting="radio">
                                      <input type="radio" value="color-1" class="btn-check" name="theme_color"
                                          id="theme-color-1">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-1"
                                          data-bs-original-title="Theme-1">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#4285F4" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EA4335" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-2" class="btn-check" name="theme_color"
                                          id="theme-color-2">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-2"
                                          data-bs-original-title="Theme-2">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#FF4500" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#1A73E8" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-3" class="btn-check" name="theme_color"
                                          id="theme-color-3">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-3"
                                          data-bs-original-title="Theme-3">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#8755f2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#EE4266" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-4" class="btn-check" name="theme_color"
                                          id="theme-color-4">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-4"
                                          data-bs-original-title="Theme-4">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#0A66C2" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#333333" />
                                          </svg>
                                      </label>
                                  </div>
                                  <div data-setting="radio">
                                      <input type="radio" value="color-5" class="btn-check" name="theme_color"
                                          id="theme-color-5">
                                      <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                          data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-5"
                                          data-bs-original-title="Theme-5">
                                          <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                              viewBox="0 0 24 24" width="26" height="26">
                                              <circle cx="12" cy="12" r="10" fill="#00b75a" />
                                              <path d="M2,12 a1,1 1 1,0 20,0" fill="#000000" />
                                          </svg>
                                      </label>
                                  </div>
                              </div>
                          </div>
                          <!-- Color customizer end here -->
  
                            <!-- Theme end here -->
                          <hr class="hr-horizontal">
                          <div>
                              <h5 class="mb-3 mt-4">Direction</h5>
                              <div class=" mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="ltr" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-ltr" checked>
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between"  for="theme-scheme-direction-ltr">
                                         <span>LTR</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor"/>
                                              <rect x="21" y="7.70026" width="34" height="5" rx="2" fill="#80868B"/>
                                              <rect opacity="0.5" x="21" y="16.1003" width="25.6281" height="3.2" rx="1.6" fill="#80868B"/>
                                              <rect x="0.375" y="0.375244" width="59.25" height="26.25" rx="4.125" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                 
                              </div>
                               <div class="mb-3" data-setting="radio">
                                  <div class="form-check mb-0 w-100">
                                      <input class="form-check-input custum-redio-btn" type="radio" value="rtl" class="btn-check" name="theme_scheme_direction" data-prop="dir" id="theme-scheme-direction-rtl">
                                      <label class="form-check-label h6 d-flex align-items-center justify-content-between "  for="theme-scheme-direction-rtl">
                                          <span>RTL</span>
                                          <svg class="text-primary" width="60" height="27" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                              <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)" fill="currentColor"/>
                                              <rect width="34" height="5" rx="2" transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"/>
                                              <rect opacity="0.5" width="25.6281" height="3.2" rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)" fill="#80868B"/>
                                              <rect x="-0.375" y="0.375" width="59.25" height="26.25" rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)" stroke="currentColor" stroke-width="0.75"/>
                                          </svg>
                                      </label>
                                  </div>
                                  
                              </div>
                          </div>
                          <!-- Theme end here -->
                          <!-- Active Menu Style end here -->
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Settings sidebar end here -->
  
  <a class="btn btn-fixed-end btn-danger btn-icon btn-setting" id="settingbutton"
      data-bs-toggle="offcanvas" data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
      <span class="icon material-symbols-outlined animated-rotate text-white">
          settings
      </span>
  </a>  <!-- Live Customizer end -->

  <!-- Share Modal -->
  <div class="modal fade sharemodal" id="share-btn" tabindex="-1" aria-labelledby="share-btnLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-header">
              <h3 class="modal-title" id="share-btnLabel">Share</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body mt-4">
              <div class="row gy-3">
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/embed.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Embed</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/whatsapp.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">WhatsApp</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/facebook.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Facebook</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/twitter.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Twitter</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/pinterest.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Pinterest</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="../assets/images/icon/linkedin.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">LinkedIn</h6>
                    </a>
                 </div>
              </div>
              <div class="mt-4">
                 <div class="share-form">
                    <input type="text" class="form-control" value="https://iqonic.design/">
                    <button class="btn btn-link share-link-btn h6 m-0 fw-semibold">Copy</button>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
  
  
  
  
  
  <div class="offcanvas offcanvas-bottom share-offcanvas" tabindex="-1" id="share-btn2" aria-labelledby="share-BottomLabel">
     <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="share-BottomLabel">Share</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body small">
        <div class="d-flex flex-wrap align-items-center">
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Facebook</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Twitter</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Instagram</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Google Plus</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>In</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="../assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>YouTube</h6>
           </div>
        </div>
     </div>
  </div>

  <!-- Backend Bundle JavaScript -->
  <script src="../assets/js/libs.min.js"></script>
  <!-- Lodash Utility -->
  <script src="../assets/vendor/lodash/lodash.min.js"></script>
  <!-- Utilities Functions -->
  <script src="../assets/js/setting/utility.js"></script>
  <!-- Settings Script -->
  <script src="../assets/js/setting/setting.js"></script>
  <!-- Settings Init Script -->
  <script src="../assets/js/setting/setting-init.js" defer></script>
  <!-- slider JavaScript -->
  <script src="../assets/js/slider.js"></script>
  <!-- masonry JavaScript --> 
  <script src="../assets/js/masonry.pkgd.min.js"></script>
  <!-- SweetAlert JavaScript -->
  <script src="../assets/js/enchanter.js"></script>
  <!-- Sweet-alert Script -->
  <script src="../assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
  <script src="../assets/js/sweet-alert.js" defer></script>
  <!-- Chart Custom JavaScript -->
  <!-- app JavaScript -->
  <script src="../assets/js/charts/weather-chart.js"></script>
  <script src="../assets/js/app.js"></script>
  <!-- Flatpickr Script -->
  <script src="../assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <!-- fslightbox Script -->
  <script src="../assets/js/fslightbox.js" defer></script> 
  <!-- vanilla Script -->
  <script src="../assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
  <!--lottie Script -->
  <script src="../assets/js/lottie.js"></script>
  <!--select2 Script -->
  <script src="../assets/js/select2.js"></script>
  <!--ecommerce Script -->
  <script src="../assets/js/ecommerce.js"></script>
  
  <script>
   function followUser(followerId, followedId) {
      $.ajax({
         url: '/follow/' + followerId + '/' + followedId,  // Adjust if there's a base URL
         type: 'POST',
         success: function(response) {
               var result = JSON.parse(response);
               alert(result.message);  // Show the success or failure message
         },
         error: function(xhr, status, error) {
               alert('Error: Unable to follow the user.');
               console.log('Error Details:', status, error);
         }
      });
   }

function unfollow(followerId, followedId){
   $.ajax({
         url: '/unfollow/' + followerId + '/' + followedId,  // Adjust if there's a base URL
         type: 'DELETE',
         success: function(response) {
               var result = JSON.parse(response);
               alert(result.message);  // Show the success or failure message
               location.reload();
         },
         error: function(xhr, status, error) {
               alert('Error: Unable to unfollow the user.');
               console.log('Error Details:', status, error);
         }
      });
}

  </script>

</body>

</html>