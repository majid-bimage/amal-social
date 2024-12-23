<?= $this->include('header') ?>
      </div>      <div>
        <div class="position-relative">
        </div>
        <div class="content-inner " id="page_layout">
            <div class="container">
               <div class="row gx-4">
                  <div class="col-lg-8" id="dynamicDivContainer">
                     <div id="content">
                        <div class="row">
                           <div class="col-12">
                              <div class="mb-5">
                                 <!-- <div id="stories" class="storiesWrapper d-flex gap-3"></div> -->
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12">
                              <div id="post-modal-data" class="card card-block card-stretch card-height create-post-modal">
                                 <div class="card-header d-flex justify-content-between border-bottom">
                                    <div class="header-title">
                                       <h5 class="card-title">Add a Post</h5>
                                    </div>
                                    <div class="dropdown">
                                       <div class="lh-1" id="post-option" data-bs-toggle="dropdown">
                                          <span class="material-symbols-outlined">
                                             more_horiz
                                          </span>
                                       </div>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="post-option" style="">
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                             data-bs-target="#post-modal">Check in</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Live
                                             Video</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                             data-bs-target="#post-modal">GIF</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                             data-bs-target="#post-modal">Watch Party</a>
                                          <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#post-modal">Play
                                             with Friend</a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-body">
                                    <div class="mb-5" data-bs-toggle="modal" data-bs-target="#post-modal">
                                       <form class="post-text w-100" action="javascript:void();">
                                          <input type="text" class="form-control rounded px-0"
                                             placeholder="Write And Share Your Post With Your Friends..." style="border:none;">
                                       </form>
                                    </div>
                                 </div>
                                 <div class="card-body bg-primary-subtle rounded-bottom-3">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                                       <div class="create-post-data">
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-4">
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                                      viewBox="0 0 18 16" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M11.5334 1.3761C12.3751 1.7111 12.6326 2.87776 12.9767 3.25276C13.3209 3.62776 13.8134 3.75526 14.0859 3.75526C15.5342 3.75526 16.7084 4.92943 16.7084 6.37693V11.2061C16.7084 13.1478 15.1334 14.7228 13.1917 14.7228H4.80841C2.86591 14.7228 1.29175 13.1478 1.29175 11.2061V6.37693C1.29175 4.92943 2.46591 3.75526 3.91425 3.75526C4.18591 3.75526 4.67841 3.62776 5.02341 3.25276C5.36758 2.87776 5.62425 1.7111 6.46591 1.3761C7.30841 1.0411 10.6917 1.0411 11.5334 1.3761Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path d="M13.5794 5.91667H13.5869" stroke="currentColor" stroke-width="2"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M11.6489 8.94C11.6489 7.47667 10.4631 6.29083 8.99975 6.29083C7.53642 6.29083 6.35059 7.47667 6.35059 8.94C6.35059 10.4033 7.53642 11.5892 8.99975 11.5892C10.4631 11.5892 11.6489 10.4033 11.6489 8.94Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                      viewBox="0 0 18 18" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M7.23043 11.6718C4.02709 11.6718 1.29126 12.156 1.29126 14.096C1.29126 16.036 4.01043 16.5377 7.23043 16.5377C10.4346 16.5377 13.1696 16.0527 13.1696 14.1135C13.1696 12.1743 10.4513 11.6718 7.23043 11.6718Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M7.23042 8.90493C9.33292 8.90493 11.0371 7.20076 11.0371 5.09826C11.0371 2.99576 9.33292 1.2916 7.23042 1.2916C5.12875 1.2916 3.42459 2.99576 3.42459 5.09826C3.41709 7.19326 5.10875 8.89743 7.20459 8.90493H7.23042Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path d="M15.0031 6.22427V9.56594" stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                      <path d="M16.7079 7.895H13.2996" stroke="currentColor" stroke-width="1.5"
                                                         stroke-linecap="round" stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                             <li>
                                                <a href="javascript:void(0);" class="text-body">
                                                   <svg xmlns="http://www.w3.org/2000/svg" width="14" height="18"
                                                      viewBox="0 0 14 18" fill="none">
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M9.08341 7.75041C9.08341 6.59935 8.15072 5.66666 7.0005 5.66666C5.84944 5.66666 4.91675 6.59935 4.91675 7.75041C4.91675 8.90063 5.84944 9.83332 7.0005 9.83332C8.15072 9.83332 9.08341 8.90063 9.08341 7.75041Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                      <path fill-rule="evenodd" clip-rule="evenodd"
                                                         d="M6.99959 16.5C6.00086 16.5 0.75 12.2486 0.75 7.80274C0.75 4.3222 3.54758 1.5 6.99959 1.5C10.4516 1.5 13.25 4.3222 13.25 7.80274C13.25 12.2486 7.99832 16.5 6.99959 16.5Z"
                                                         stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                         stroke-linejoin="round" />
                                                   </svg>
                                                </a>
                                             </li>
                                          </ul>
                                       </div>
                                       <div>
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-4">
                                             <li>
                                                <a href="javascript:void(0);" class="text-body fw-medium">
                                                   Discard
                                                </a>
                                             </li>
                                             <li>
                                                <button type="button" class="btn btn-primary px-4">Post</button>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="modal fade" id="post-modal" tabindex="-1" aria-labelledby="post-modalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h5 class="modal-title" id="post-modalLabel">Create Post</h5>
                                             <a href="javascript:void(0);" class="lh-1" data-bs-dismiss="modal">
                                                <span class="material-symbols-outlined">close</span>
                                             </a>
                                          </div>
                                          <div class="modal-body">
                                             <div class="d-flex align-items-center">
                                                <div class="user-img">
                                                   <img src="./assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-60 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <form class="post-text ms-3 w-100" method="post" action="<?= base_url('post/create_post') ?>"  enctype="multipart/form-data">
                                                   <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                      <li class="col-md-6 mb-3">
                                                         <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                            <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                               <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                                  add_a_photo
                                                               </span>
                                                               Photo/Video

                                                            </a>
                                                            <input type="file" name="media" accept="image/*,video/*">
                                                         </div>
                                                      </li> 
                                                   </ul>
                                                   <input type="text" name="content" class="form-control rounded" placeholder="Write something here..." style="border:none;" >
                                                   <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button>
                                                </form>
                                             </div>
                                             <hr>
                                             <ul class="d-flex flex-wrap align-items-center list-inline m-0 p-0">
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            add_a_photo
                                                         </span>
                                                         Photo/Video
                                                      </a>
                                                   </div>
                                                </li> 
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            group
                                                         </span>
                                                         Tag Friend
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            sentiment_satisfied
                                                         </span>
                                                         Feeling/Activity
                                                      </a>
                                                   </div>
                                                </li> 
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            location_on
                                                         </span>
                                                         Check in
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            live_tv
                                                         </span>
                                                         Live Video
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            gif_box
                                                         </span>
                                                         GIF
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            celebration
                                                         </span>
                                                         Watch Party
                                                      </a>
                                                   </div>
                                                </li>
                                                <li class="col-md-6 mb-3">
                                                   <div class="bg-primary-subtle rounded p-2 pointer me-3">
                                                      <a href="javascript:void(0);" class="d-inline-block fw-medium text-body">
                                                         <span class="material-symbols-outlined align-middle font-size-20 me-1">
                                                            sports_esports
                                                         </span>
                                                         Play with Friends
                                                      </a>
                                                   </div>
                                                </li>
                                             </ul>
                                             <hr>
                                             <div class="other-option">
                                                <div class="d-flex align-items-center justify-content-between">
                                                   <!-- <div class="d-flex align-items-center">
                                                      <div class="user-img me-3">
                                                         <img src="./assets/images/user/1.jpg" alt="userimg"
                                                            class="avatar-60 rounded-circle img-fluid">
                                                      </div>
                                                      <h6>Your Story</h6>
                                                   </div> -->
                                                   <!-- <div class="card-post-toolbar">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <span class="btn btn-primary">Friend</span>
                                                         </span>
                                                         <div class="dropdown-menu m-0 p-0">
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     save
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Public</h6>
                                                                     <p class="mb-0">Anyone on or off Facebook</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     cancel
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Friends</h6>
                                                                     <p class="mb-0">Your Friend on facebook</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     person_remove
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Friends except</h6>
                                                                     <p class="mb-0">Don't show to some friends</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                            <a class="dropdown-item p-3" href="#">
                                                               <div class="d-flex align-items-top">
                                                                  <span class="material-symbols-outlined">
                                                                     notifications
                                                                  </span>
                                                                  <div class="data ms-2">
                                                                     <h6>Only Me</h6>
                                                                     <p class="mb-0">Only me</p>
                                                                  </div>
                                                               </div>
                                                            </a>
                                                         </div>
                                                      </div>
                                                   </div> -->
                                                </div>
                                             </div>
                                             <!-- <button type="submit" class="btn btn-primary d-block w-100 mt-3">Post</button> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row social-post-container">
                        <?php foreach ($posts as $post): ?>

                           <?php
                // Set the profile picture path. If 'profile_picture' is not set or is 'none', use the default image.
                $profilePic = (!empty($post['profile_picture']) && $post['profile_picture'] != 'none') ? $post['profile_picture'] : 'default_dp.jpg'; 
              ?>

               <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

               <div class="col-sm-12 social-post">
                              <div class="card card-block card-stretch card-height">
                                 <div class="card-body">
                                    <div class="user-post-data">
                                       <div class="d-flex align-items-center justify-content-between">
                                          <div class="me-3 flex-shrik-0">
                                             <img class="border border-2 rounded-circle user-post-profile" src="<?= base_url('uploads/' . $profilePic) ?>"
                                                alt="user-image" loading="lazy">
                                          </div>
                                          <div class="w-100">
                                             <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                   <h6 class="mb-0 d-inline-block"><?= esc($post['username']); ?></h6>
                                                   <span class="d-inline-block text-primary">
                                                      <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                         <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                            fill="currentColor" />
                                                         <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                      </svg>
                                                   </span>
                                                   <span class="mb-0 d-inline-block text-capitalize fw-medium">posted an
                                                      update</span>
                                                   <p class="mb-0"><?= date('F d, Y H:i', strtotime($post['created_at'])); ?></p>
                                                </div>
                                                <div class="card-post-toolbar">
                                                   <div class="dropdown">
                                                      <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                                         aria-haspopup="true" aria-expanded="false" role="button">
                                                         more_horiz
                                                      </span>
                                                      <div class="dropdown-menu m-0 p-0">
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  save
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Save Post</h6>
                                                                  <p class="mb-0">Add this to your saved items</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  cancel
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Hide Post</h6>
                                                                  <p class="mb-0">See fewer posts like this.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  person_remove
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Unfollow User</h6>
                                                                  <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                         <a class="dropdown-item p-3" href="#">
                                                            <div class="d-flex align-items-top">
                                                               <span class="material-symbols-outlined">
                                                                  notifications
                                                               </span>
                                                               <div class="data ms-2">
                                                                  <h6>Notifications</h6>
                                                                  <p class="mb-0">Turn on notifications for this post</p>
                                                               </div>
                                                            </div>
                                                         </a>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mt-4">
                                       <p class="m-0"><?= esc($post['content']); ?></p>
                                       <!-- <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                                          <li>
                                             <a href="javascript:void(0);">#friends</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#party</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#birthday</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#together</a>
                                          </li>
                                          <li>
                                             <a href="javascript:void(0);">#celebration</a>
                                          </li>
                                       </ul> -->
                                    </div>
                                    
                                    <div class="user-post mt-4">
                                    <?php
                                    // Extract the file extension
                                    $fileExtension = pathinfo($post['media_path'], PATHINFO_EXTENSION);

                                    // List of common video file extensions
                                    $videoExtensions = ['mp4', 'avi', 'mov', 'mkv', 'webm', 'flv'];
                                    if($post['media_path']){
                                    // Check if the file extension is in the list of video extensions
                                    if (in_array(strtolower($fileExtension), $videoExtensions)) {
                                       // It's a video
                                       ?>
                                       <video controls style="width:-webkit-fill-available">
                                          <source src="<?= base_url('uploads/' . $post['media_path']) ?>" type="video/mp4">
                                          Your browser does not support the video tag.
                                       </video>
                                       <?php
                                    } else {
                                       // It's not a video (assuming it's an image or other type of file)
                                       ?>
                                       <!-- <img src="<?= base_url('uploads/' . $post['media_path']) ?>" alt="Media" style="width:-webkit-fill-available"> -->
                                       <a data-fslightbox="gallery" href="<?= base_url('uploads/' . $post['media_path']) ?>" class="rounded">
                                          <img src="<?= base_url('uploads/' . $post['media_path']) ?>" alt="post-image" class="img-fluid rounded w-100"
                                             loading="lazy">
                                       </a>
                                       <?php
                                    }  }
                                    ?>
                                       
                                    </div>
                                    <div class="post-meta-likes mt-4">
                                       <div class="d-flex align-items-center gap-2 flex-wrap">
                                          <ul class="list-inline m-0 p-0 post-user-liked-list">
                                             <li>
                                                <img src="../assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                             <li>
                                                <img src="../assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                                   loading="lazy">
                                             </li>
                                          </ul>
                                          <div class="d-inline-flex align-items-center gap-1">
                                             <h6 class="m-0 font-size-14">Aliana Molex</h6>
                                             <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                                data-bs-target="#likemodal">and 208 others liked this</span>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-area mt-4 pt-4 border-top">
                                       <div class="d-flex justify-content-between align-items-center flex-wrap">
                                          <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                             <div class="like-data">
                                                <div class="dropdown">
                                                   <span class="dropdown-toggle like-btn" data-bs-toggle="dropdown" aria-haspopup="true"
                                                      aria-expanded="false" role="button" data-post-id="<?= $post['id']; ?>">
                                                      <span class="material-symbols-outlined align-text-top font-size-20">
                                                         thumb_up
                                                      </span>
                                                      <span class="fw-medium" id="like-count-<?= $post['id']; ?>"><?= $post["like_count"] ?> Like(s)</span>
                                                   </span>
                                                   <div class="dropdown-menu py-2">
                                                      <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                         data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png"
                                                            class="img-fluid" alt="like" loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad"
                                                            loading="lazy"></a>
                                                      <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                                            loading="lazy"></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center gap-3 flex-shrink-0">
                                             <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#comment-section-<?= $post['id'] ?>" aria-expanded="false" aria-controls="commentcollapes">
                                                <span class="material-symbols-outlined align-text-top font-size-20">
                                                   comment
                                                </span>
                                                <span class="fw-medium"><?= count($post["comments"]) ?> Comment</span>
                                             </div>
                                             <div class="share-block d-flex align-items-center feather-icon">
                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                                   aria-controls="share-btn" class="d-flex align-items-center">
                                                   <span class="material-symbols-outlined align-text-top font-size-20">
                                                      share
                                                   </span>
                                                   <span class="ms-1 fw-medium"> 0 Share</span></a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="collapse mt-4 pt-4 border-top" id="comment-section-<?= $post['id'] ?>">
                                          <ul class="list-inline m-o p-0 comment-list"  id="comment-ul-<?= $post['id'] ?>">
                                             <?php
                                                foreach($post["comments"] as $comment){
                $profilePic = (!empty($comment['comment_profile_picture']) && $comment['comment_profile_picture'] != 'none') ? $comment['comment_profile_picture'] : 'default_dp.jpg'; 
                                                   
                                                   ?>
                                             <li class="mb-3" id=comment-<?= $comment['comment_id'] ?>>
                                                <div class="comment-list-block">
                                                   <div class="d-flex align-items-center gap-3">
                                                      <div class="comment-list-user-img flex-shrink-0">
                                                         <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="userimg"
                                                            class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                      </div>
                                                      <div class="comment-list-user-data">
                                                         <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                                            <h6 class="m-0"><?= $comment["comment_username"] ?></h6>
                                                            <span class="d-inline-block text-primary">
                                                               <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                                  height="17" viewBox="0 0 17 17" fill="none">
                                                                  <path fill-rule="evenodd" clip-rule="evenodd"
                                                                     d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                                     fill="currentColor" />
                                                                  <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                               </svg>
                                                            </span>
                                                            <span class="fw-medium small text-capitalize"><?= date('F d, Y H:i', strtotime($comment['comment_created_at'])); ?></span>

                                                         </div>
                                                      </div>
                                                      <?php 
                                                         if($comment['comment_user_id'] == $userid || $userid == $post['user_id']){ ?>
                                                            <span class="fw-medium small text-capitalize" style="margin-left:auto;cursor:pointer;" onclick="deleteComment(<?= $post['id'] .','.$comment['comment_id'] ?>)">delete</span>

                                                       <?php  }
                                                      ?>

                                                   </div>
                                                   <div class="comment-list-user-comment">
                                                      <div class="comment-list-comment">
                                                      <?= $comment["comment_content"] ?>
                                                      </div>
                                                      <div class="comment-list-action mt-2">
                                                         <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                                            <li>
                                                               <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                                  <div class="like-data">
                                                                     <div class="dropdown">
                                                                        <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                                           aria-haspopup="true" aria-expanded="false" role="button">
                                                                           <span class="material-symbols-outlined align-text-top font-size-18">
                                                                              thumb_up
                                                                           </span>
                                                                           <span class="fw-medium small">Likes</span>
                                                                        </span>
                                                                        <div class="dropdown-menu py-2">
                                                                           <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Like"><img
                                                                                 src="../assets/images/icon/01.png" class="img-fluid"
                                                                                 alt="like" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Love"><img
                                                                                 src="../assets/images/icon/02.png" class="img-fluid"
                                                                                 alt="love" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Happy"><img
                                                                                 src="../assets/images/icon/03.png" class="img-fluid"
                                                                                 alt="happy" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="HaHa"><img
                                                                                 src="../assets/images/icon/04.png" class="img-fluid"
                                                                                 alt="haha" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Think"><img
                                                                                 src="../assets/images/icon/05.png" class="img-fluid"
                                                                                 alt="think" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Sad"><img
                                                                                 src="../assets/images/icon/06.png" class="img-fluid"
                                                                                 alt="sad" loading="lazy"></a>
                                                                           <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                                              data-bs-placement="top" title="Lovely"><img
                                                                                 src="../assets/images/icon/07.png" class="img-fluid"
                                                                                 alt="lovely" loading="lazy"></a>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </li>
                                                            <li>
                                                               <span class="fw-medium small" data-bs-toggle="collapse"
                                                                  data-bs-target="#subcomment-collapse1" role="button" aria-expanded="false"
                                                                  aria-controls="collapseExample">
                                                                  Reply
                                                               </span>
                                                            </li>
                                                         </ul>
                                                         <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse1">
                                                            <div class="d-flex align-items-center gap-3">
                                                               <div class="flex-shrink-0">
                                                                  <img src="../assets/images/user/1.jpg" alt="userimg"
                                                                     class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                               </div>
                                                               <div class="add-comment-form">
                                                                  <form>
                                                                     <input type="text" class="form-control" placeholder="Write a Comment...">
                                                                     <button type="submit"
                                                                        class="btn btn-primary font-size-12 text-capitalize px-5">post1</button>
                                                                  </form>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <?php    }
                                             ?>
                                             
                                          </ul>
                                          <?php
                $profilePic = (!empty($user['profile_picture']) && $user['profile_picture'] != 'none') ? $user['profile_picture'] : 'default_dp.jpg'; 

                                          ?>
                                          <div class="add-comment-form-block">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                      <input type="text" class="form-control" placeholder="Write a Comment..." id="comment-input-<?= $post['id'] ?>">
                                                      <button type="button" class="btn btn-primary font-size-12 text-capitalize px-5 submit-comment-btn" data-post-id="<?= $post['id']; ?>">post</button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>


               <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
            <?php endforeach; ?>
              
            </div>
         </div>
         <!-- status elements -->
         <div id="load-copy-content" class="d-none">
            <div class="col-sm-12 social-post">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="me-3 flex-shrik-0">
                              <img class="border border-2 rounded-circle user-post-profile" src="./assets/images/user/13.jpg"
                                 alt="user-image" loading="lazy">
                           </div>
                           <div class="w-100">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                    <h6 class="mb-0 d-inline-block">Bob Frapples</h6>
                                    <span class="d-inline-block text-primary">
                                       <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                             fill="currentColor" />
                                          <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <span class="mb-0 d-inline-block text-capitalize fw-medium">Shared This Post in his
                                       Timeline</span>
                                    <p class="mb-0">9 Hours ago</p>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   save
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Save Post</h6>
                                                   <p class="mb-0">Add this to your saved items</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   cancel
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Hide Post</h6>
                                                   <p class="mb-0">See fewer posts like this.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   person_remove
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Unfollow User</h6>
                                                   <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   notifications
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Notifications</h6>
                                                   <p class="mb-0">Turn on notifications for this post</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="mt-4">
                        <p class="m-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                           commodo non, feugiat non nisi.
                           Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus"</p>
                        <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                           <li>
                              <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#bootstrap</a>
                           </li>
                           <li>
                              <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#framework</a>
                           </li>
                           <li>
                              <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#responsive</a>
                           </li>
                        </ul>
                     </div>
                     <div class="user-post mt-4">
                        <div class="p-3 rounded-3 bg-light-subtle">
                           <div class="d-flex gap-3">
                              <div class="flex-shrink-0">
                                 <img src="./assets/images/icon/bootstrap-5.png" alt="bootstrap-icon" class="img-fluid">
                              </div>
                              <div>
                                 <h5 class="mb-2">About Bootstrap Framework</h5>
                                 <p class="m-0 text-body font-size-12 fw-medium">Morbi nulla dolor, ornare at
                                    commodo non, feugiat non nisi.
                                    Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="post-meta-likes mt-4">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                           <ul class="list-inline m-0 p-0 post-user-liked-list">
                              <li>
                                 <img src="./assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                           </ul>
                           <div class="d-inline-flex align-items-center gap-1">
                              <h6 class="m-0 font-size-14">Aliana Molex</h6>
                              <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                 data-bs-target="#likemodal">and 208 others liked this</span>
                           </div>
                        </div>
                     </div>
                     <div class="comment-area mt-4 pt-4 border-top">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" role="button">
                                       <span class="material-symbols-outlined align-text-top font-size-20">
                                          thumb_up
                                       </span>
                                       <span class="fw-medium">140 Likes</span>
                                    </span>
                                    <div class="dropdown-menu py-2 shadow">
                                       <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                          data-bs-placement="top" title="Like"><img src="./assets/images/icon/01.png"
                                             class="img-fluid" alt="like" loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Love"><img src="./assets/images/icon/02.png" class="img-fluid" alt="love"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Happy"><img src="./assets/images/icon/03.png" class="img-fluid" alt="happy"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="HaHa"><img src="./assets/images/icon/04.png" class="img-fluid" alt="haha"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Think"><img src="./assets/images/icon/05.png" class="img-fluid" alt="think"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Sad"><img src="./assets/images/icon/06.png" class="img-fluid" alt="sad"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Lovely"><img src="./assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                             loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center gap-3 flex-shrink-0">
                              <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#commentcollapes5" aria-expanded="false" aria-controls="commentcollapes">
                                 <span class="material-symbols-outlined align-text-top font-size-20">
                                    comment
                                 </span>
                                 <span class="fw-medium">20 Comment</span>
                              </div>
                              <div class="share-block d-flex align-items-center feather-icon">
                                 <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                    aria-controls="share-btn" class="d-flex align-items-center">
                                    <span class="material-symbols-outlined align-text-top font-size-20">
                                       share
                                    </span>
                                    <span class="ms-1 fw-medium">99 Share</span></a>
                              </div>
                           </div>
                        </div>
                        <div class="collapse mt-4 pt-4 border-top" id="commentcollapes5">
                           <ul class="list-inline m-o p-0 comment-list">
                              <li class="mb-3">
                                 <div class="comment-list-block">
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="comment-list-user-img flex-shrink-0">
                                          <img src="./assets/images/user/13.jpg" alt="userimg"
                                             class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                       </div>
                                       <div class="comment-list-user-data">
                                          <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                             <h6 class="m-0">Bob Frapples</h6>
                                             <span class="d-inline-block text-primary">
                                                <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                   height="17" viewBox="0 0 17 17" fill="none">
                                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                      fill="currentColor" />
                                                   <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                             </span>
                                             <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-list-user-comment">
                                       <div class="comment-list-comment">
                                          "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                       </div>
                                       <div class="comment-list-action mt-2">
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                             <li>
                                                <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                   <div class="like-data">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <span class="material-symbols-outlined align-text-top font-size-18">
                                                               thumb_up
                                                            </span>
                                                            <span class="fw-medium small">Likes</span>
                                                         </span>
                                                         <div class="dropdown-menu py-2 shadow">
                                                            <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Like"><img
                                                                  src="./assets/images/icon/01.png" class="img-fluid"
                                                                  alt="like" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Love"><img
                                                                  src="./assets/images/icon/02.png" class="img-fluid"
                                                                  alt="love" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Happy"><img
                                                                  src="./assets/images/icon/03.png" class="img-fluid"
                                                                  alt="happy" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="HaHa"><img
                                                                  src="./assets/images/icon/04.png" class="img-fluid"
                                                                  alt="haha" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Think"><img
                                                                  src="./assets/images/icon/05.png" class="img-fluid"
                                                                  alt="think" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Sad"><img
                                                                  src="./assets/images/icon/06.png" class="img-fluid"
                                                                  alt="sad" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Lovely"><img
                                                                  src="./assets/images/icon/07.png" class="img-fluid"
                                                                  alt="lovely" loading="lazy"></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <span class="fw-medium small" data-bs-toggle="collapse"
                                                   data-bs-target="#subcomment-collapse5" role="button" aria-expanded="false"
                                                   aria-controls="collapseExample">
                                                   Reply
                                                </span>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse5">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="./assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit"
                                                         class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="add-comment-form-block">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="flex-shrink-0">
                                    <img src="./assets/images/user/1.jpg" alt="userimg"
                                       class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                 </div>
                                 <div class="add-comment-form">
                                    <form>
                                       <input type="text" class="form-control" placeholder="Write a Comment...">
                                       <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 social-post">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="me-3 flex-shrik-0">
                              <img class="border border-2 rounded-circle user-post-profile" src="./assets/images/user/14.jpg"
                                 alt="user-image" loading="lazy">
                           </div>
                           <div class="w-100">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                    <h6 class="mb-0 d-inline-block">Greta Life</h6>
                                    <span class="d-inline-block text-primary">
                                       <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                             fill="currentColor" />
                                          <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <p class="mb-0">12 Hours ago</p>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   save
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Save Post</h6>
                                                   <p class="mb-0">Add this to your saved items</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   cancel
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Hide Post</h6>
                                                   <p class="mb-0">See fewer posts like this.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   person_remove
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Unfollow User</h6>
                                                   <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   notifications
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Notifications</h6>
                                                   <p class="mb-0">Turn on notifications for this post</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="user-post mt-4">
                        <div class="text-center">
                           <img src="./assets/images/page-img/ads.jpg" alt="ads" class="img-fluid">
                           <a href="javascript:void(0);" class="btn btn-primary w-100 rounded-top-0">
                              <span class="d-flex align-items-center justify-content-between gap-1">
                                 <span>Shop Now</span>
                                 <span class="material-symbols-outlined">
                                    chevron_right
                                 </span>
                              </span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 social-post">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="me-3 flex-shrik-0">
                              <img class="border border-2 rounded-circle user-post-profile" src="./assets/images/user/15.jpg"
                                 alt="user-image" loading="lazy">
                           </div>
                           <div class="w-100">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                    <h6 class="mb-0 d-inline-block">Pete Sariya</h6>
                                    <span class="d-inline-block text-primary">
                                       <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                             fill="currentColor" />
                                          <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <span class="mb-0 d-inline-block text-capitalize fw-medium">created a poll</span>
                                    <p class="mb-0">15 Hours ago</p>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   save
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Save Post</h6>
                                                   <p class="mb-0">Add this to your saved items</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   cancel
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Hide Post</h6>
                                                   <p class="mb-0">See fewer posts like this.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   person_remove
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Unfollow User</h6>
                                                   <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   notifications
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Notifications</h6>
                                                   <p class="mb-0">Turn on notifications for this post</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="user-post mt-4">
                        <h5 class="mb-4 text-capitalize">which programming language should i learn?</h5>
                        <ul class="list-inline m-0 p-0">
                           <li class="mb-4">
                              <div class="d-flex gap-3">
                                 <div class="flex-shrink-0">
                                    <h6 class="mb-0">75%</h6>
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between gap-3 w-100 mb-1">
                                       <h6>Python</h6>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="poll" id="python">
                                       </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                                       aria-valuemin="0" aria-valuemax="100" style="height: .5rem;">
                                       <div class="progress-bar w-75"></div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="mb-4">
                              <div class="d-flex gap-3">
                                 <div class="flex-shrink-0">
                                    <h6 class="mb-0">50%</h6>
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between gap-3 w-100 mb-1">
                                       <h6>Javascript</h6>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="poll" id="javascript">
                                       </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50"
                                       aria-valuemin="0" aria-valuemax="100" style="height: .5rem;">
                                       <div class="progress-bar w-50"></div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="d-flex gap-3">
                                 <div class="flex-shrink-0">
                                    <h6 class="mb-0">25%</h6>
                                 </div>
                                 <div class="w-100">
                                    <div class="d-flex align-items-center justify-content-between gap-3 w-100 mb-1">
                                       <h6>C++</h6>
                                       <div class="form-check">
                                          <input class="form-check-input" type="radio" name="poll" id="c">
                                       </div>
                                    </div>
                                    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                                       aria-valuemin="0" aria-valuemax="100" style="height: .5rem;">
                                       <div class="progress-bar w-25"></div>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="post-meta-likes mt-4 pt-4 border-top">
                        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                           <div class="d-flex align-items-center gap-2 flex-wrap">
                              <ul class="list-inline m-0 p-0 post-user-liked-list">
                                 <li>
                                    <img src="./assets/images/user/01.jpg" alt="userimg"
                                       class="rounded-circle img-fluid userimg" loading="lazy">
                                 </li>
                                 <li>
                                    <img src="./assets/images/user/02.jpg" alt="userimg"
                                       class="rounded-circle img-fluid userimg" loading="lazy">
                                 </li>
                                 <li>
                                    <img src="./assets/images/user/03.jpg" alt="userimg"
                                       class="rounded-circle img-fluid userimg" loading="lazy">
                                 </li>
                                 <li>
                                    <img src="./assets/images/user/04.jpg" alt="userimg"
                                       class="rounded-circle img-fluid userimg" loading="lazy">
                                 </li>
                              </ul>
                              <h6 class="m-0 font-size-14 lh-lg">Total Votes: <b>25</b></h6>
                           </div>
                           <button type="submit" class="btn btn-primary">Vote</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 social-post">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="user-post-data">
                        <div class="d-flex align-items-center justify-content-between">
                           <div class="me-3 flex-shrik-0">
                              <img class="border border-2 rounded-circle user-post-profile" src="./assets/images/user/17.jpg"
                                 alt="user-image" loading="lazy">
                           </div>
                           <div class="w-100">
                              <div class="d-flex align-items-center justify-content-between">
                                 <div>
                                    <h6 class="mb-0 d-inline-block">Marcum Shaw</h6>
                                    <span class="d-inline-block text-primary">
                                       <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                          xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                             fill="currentColor" />
                                          <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                       </svg>
                                    </span>
                                    <span class="mb-0 d-inline-block text-capitalize fw-medium">Shared This Post</span>
                                    <p class="mb-0">24 Hours ago</p>
                                 </div>
                                 <div class="card-post-toolbar">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle material-symbols-outlined" data-bs-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="button">
                                          more_horiz
                                       </span>
                                       <div class="dropdown-menu m-0 p-0">
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   save
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Save Post</h6>
                                                   <p class="mb-0">Add this to your saved items</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   cancel
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Hide Post</h6>
                                                   <p class="mb-0">See fewer posts like this.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   person_remove
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Unfollow User</h6>
                                                   <p class="mb-0">Stop seeing posts but stay friends.</p>
                                                </div>
                                             </div>
                                          </a>
                                          <a class="dropdown-item p-3" href="#">
                                             <div class="d-flex align-items-top">
                                                <span class="material-symbols-outlined">
                                                   notifications
                                                </span>
                                                <div class="data ms-2">
                                                   <h6>Notifications</h6>
                                                   <p class="mb-0">Turn on notifications for this post</p>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="user-post mt-4">
                        <div class="card shadow mb-0">
                           <div class="card-body">
                              <div class="user-post-data">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="me-3 flex-shrik-0">
                                       <img class="border border-2 rounded-circle user-post-profile"
                                          src="./assets/images/user/16.jpg" alt="user-image" loading="lazy">
                                    </div>
                                    <div class="w-100">
                                       <h6 class="mb-0 d-inline-block">Paige Turner</h6>
                                       <span class="d-inline-block text-primary">
                                          <svg class="align-text-bottom" width="17" height="17" viewBox="0 0 17 17" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                             <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M11.8457 0H4.34822C1.73547 0 0.0974121 1.84995 0.0974121 4.46789V11.5321C0.0974121 14.1501 1.72768 16 4.34822 16H11.8449C14.4663 16 16.0974 14.1501 16.0974 11.5321V4.46789C16.0974 1.84995 14.4663 0 11.8457 0Z"
                                                fill="currentColor" />
                                             <path d="M5.09741 7.99978L7.09797 9.9995L11.0974 6.00006" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                          </svg>
                                       </span>
                                       <p class="mb-0">9 Hours ago</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="mt-4">
                                 <p class="m-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nulla dolor, ornare at
                                    commodo non, feugiat non nisi.
                                    Phasellus faucibus mollis pharetra. Proin blandit ac massa sed rhoncus"</p>
                                 <ul class="list-inline m-0 p-0 d-flex flex-wrap gap-1">
                                    <li>
                                       <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#design</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#themes</a>
                                    </li>
                                    <li>
                                       <a href="javascript:void(0);" contenteditable="false" style="cursor: pointer;">#ui/ux</a>
                                    </li>
                                 </ul>
                              </div>
                              <div class="user-post mt-4">
                                 <div class="card shadow overflow-hidden mb-0">
                                    <img src="./assets/images/page-img/profile-bg9.jpg"
                                       class="card-img-top w-100 object-cover" alt="group-image" height="250">
                                    <div class="card-body text-center">
                                       <h5 class="card-title">Themes</h5>
                                       <p class="card-text">It is a long established fact that a reader will be distracted by the
                                          readable content of a page when looking at its
                                          layout.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="post-meta-likes mt-4">
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                           <ul class="list-inline m-0 p-0 post-user-liked-list">
                              <li>
                                 <img src="./assets/images/user/01.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/02.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/03.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                              <li>
                                 <img src="./assets/images/user/04.jpg" alt="userimg" class="rounded-circle img-fluid userimg"
                                    loading="lazy">
                              </li>
                           </ul>
                           <div class="d-inline-flex align-items-center gap-1">
                              <h6 class="m-0 font-size-14">Aliana Molex</h6>
                              <span class="text-capitalize font-size-14 fw-medium" type="button" data-bs-toggle="modal"
                                 data-bs-target="#likemodal">and 208 others liked this</span>
                           </div>
                        </div>
                     </div>
                     <div class="comment-area mt-4 pt-4 border-top">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                           <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                              <div class="like-data">
                                 <div class="dropdown">
                                    <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false" role="button">
                                       <span class="material-symbols-outlined align-text-top font-size-20">
                                          thumb_up
                                       </span>
                                       <span class="fw-medium">140 Likes</span>
                                    </span>
                                    <div class="dropdown-menu py-2 shadow">
                                       <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                          data-bs-placement="top" title="Like"><img src="./assets/images/icon/01.png"
                                             class="img-fluid" alt="like" loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Love"><img src="./assets/images/icon/02.png" class="img-fluid" alt="love"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Happy"><img src="./assets/images/icon/03.png" class="img-fluid" alt="happy"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="HaHa"><img src="./assets/images/icon/04.png" class="img-fluid" alt="haha"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Think"><img src="./assets/images/icon/05.png" class="img-fluid" alt="think"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Sad"><img src="./assets/images/icon/06.png" class="img-fluid" alt="sad"
                                             loading="lazy"></a>
                                       <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top"
                                          title="Lovely"><img src="./assets/images/icon/07.png" class="img-fluid" alt="lovely"
                                             loading="lazy"></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="d-flex align-items-center gap-3 flex-shrink-0">
                              <div class="total-comment-block" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#commentcollapes6" aria-expanded="false" aria-controls="commentcollapes">
                                 <span class="material-symbols-outlined align-text-top font-size-20">
                                    comment
                                 </span>
                                 <span class="fw-medium">20 Comment</span>
                              </div>
                              <div class="share-block d-flex align-items-center feather-icon">
                                 <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#share-btn"
                                    aria-controls="share-btn" class="d-flex align-items-center">
                                    <span class="material-symbols-outlined align-text-top font-size-20">
                                       share
                                    </span>
                                    <span class="ms-1 fw-medium">99 Share</span></a>
                              </div>
                           </div>
                        </div>
                        <div class="collapse mt-4 pt-4 border-top" id="commentcollapes6">
                           <ul class="list-inline m-o p-0 comment-list">
                              <li class="mb-3">
                                 <div class="comment-list-block">
                                    <div class="d-flex align-items-center gap-3">
                                       <div class="comment-list-user-img flex-shrink-0">
                                          <img src="./assets/images/user/13.jpg" alt="userimg"
                                             class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                       </div>
                                       <div class="comment-list-user-data">
                                          <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                                             <h6 class="m-0">Bob Frapples</h6>
                                             <span class="d-inline-block text-primary">
                                                <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17"
                                                   height="17" viewBox="0 0 17 17" fill="none">
                                                   <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z"
                                                      fill="currentColor" />
                                                   <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white"
                                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                             </span>
                                             <spna class="fw-medium small text-capitalize">3 min ago</spna>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="comment-list-user-comment">
                                       <div class="comment-list-comment">
                                          "Just stumbled upon this post and it's giving me all the feels! 🙌"
                                       </div>
                                       <div class="comment-list-action mt-2">
                                          <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                                             <li>
                                                <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                                   <div class="like-data">
                                                      <div class="dropdown">
                                                         <span class="dropdown-toggle" data-bs-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false" role="button">
                                                            <span class="material-symbols-outlined align-text-top font-size-18">
                                                               thumb_up
                                                            </span>
                                                            <span class="fw-medium small">Likes</span>
                                                         </span>
                                                         <div class="dropdown-menu py-2 shadow">
                                                            <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Like"><img
                                                                  src="./assets/images/icon/01.png" class="img-fluid"
                                                                  alt="like" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Love"><img
                                                                  src="./assets/images/icon/02.png" class="img-fluid"
                                                                  alt="love" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Happy"><img
                                                                  src="./assets/images/icon/03.png" class="img-fluid"
                                                                  alt="happy" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="HaHa"><img
                                                                  src="./assets/images/icon/04.png" class="img-fluid"
                                                                  alt="haha" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Think"><img
                                                                  src="./assets/images/icon/05.png" class="img-fluid"
                                                                  alt="think" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Sad"><img
                                                                  src="./assets/images/icon/06.png" class="img-fluid"
                                                                  alt="sad" loading="lazy"></a>
                                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip"
                                                               data-bs-placement="top" title="Lovely"><img
                                                                  src="./assets/images/icon/07.png" class="img-fluid"
                                                                  alt="lovely" loading="lazy"></a>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </li>
                                             <li>
                                                <span class="fw-medium small" data-bs-toggle="collapse"
                                                   data-bs-target="#subcomment-collapse6" role="button" aria-expanded="false"
                                                   aria-controls="collapseExample">
                                                   Reply
                                                </span>
                                             </li>
                                          </ul>
                                          <div class="add-comment-form-block collapse mt-3" id="subcomment-collapse6">
                                             <div class="d-flex align-items-center gap-3">
                                                <div class="flex-shrink-0">
                                                   <img src="./assets/images/user/1.jpg" alt="userimg"
                                                      class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                                </div>
                                                <div class="add-comment-form">
                                                   <form>
                                                      <input type="text" class="form-control" placeholder="Write a Comment...">
                                                      <button type="submit"
                                                         class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                                   </form>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="add-comment-form-block">
                              <div class="d-flex align-items-center gap-3">
                                 <div class="flex-shrink-0">
                                    <img src="./assets/images/user/1.jpg" alt="userimg"
                                       class="avatar-48 rounded-circle img-fluid" loading="lazy">
                                 </div>
                                 <div class="add-comment-form">
                                    <form>
                                       <input type="text" class="form-control" placeholder="Write a Comment...">
                                       <button type="submit" class="btn btn-primary font-size-12 text-capitalize px-5">post</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="scroller-status col-sm-12 text-center">
               <div class="infinite-scroll-request loader-ellips">
                  <img src="./assets/images/page-img/page-load-loader.gif" alt="loader" style="height: 100px;" loading="lazy">
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-4">
      <div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Active Users</h4>
        </div>
    </div>
    <div class="card-body pt-0">
        <ul class="list-inline m-0 p-0">
            <?php
            
            foreach ($activeUsers as $user):
               $profilePic = (!empty($user['profile_picture']) && $user['profile_picture'] != 'none') ? $user['profile_picture'] : 'default_dp.jpg'; 
            
            ?>
                <li class="d-flex align-items-center gap-3 mb-3">
                    <img src="<?= base_url('uploads/' . $profilePic) ?>" 
                         alt="story-img"
                         class="avatar-60 avatar-borderd object-cover avatar-rounded img-fluid d-inline-block">
                    <div>
                        <h5 class="d-inline-block"><?= esc($user['first_name'] . ' ' . $user['last_name']); ?></h5>
                        <span class="<?= $user['status'] == 'active' ? 'profile-status-online' : 'profile-status-offline'; ?>"></span>
                        <small class="text-capitalize d-block"><?= $user['status'] == 'active' ? 'Active' : 'Last seen ' . time_ago($user['last_login']); ?></small>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
 
         <div class="fixed-suggestion mb-4">
         <div class="card">
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="card-title">Suggestions for you</h4>
        </div>
        <small class="fw-500 text-capitalize">See all</small>
    </div>
    <div class="card-body pt-0">
        <ul class="list-inline m-0 p-0">
            <?php foreach ($suggestedUsers as $user):
               $profilePic = (!empty($user['profile_picture']) && $user['profile_picture'] != 'none') ? $user['profile_picture'] : 'default_dp.jpg'; 
               
               ?>
                <li class="mb-3">
                    <div class="d-flex align-items-center gap-3">
                        <img src="<?= base_url('uploads/' . $profilePic) ?>" alt="story-img"
                            class="avatar-60 avatar-borderd object-cover avatar-rounded img-fluid d-inline-block">
                        <div>
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div>
                                    <h5><?= esc($user['first_name'] . ' ' . $user['last_name']); ?></h5>
                                    <small class="text-capitalize">Followed by <?= esc($user['follower_count'] ?? '0') ?> more</small>
                                </div>
                                <div class="d-flex align-items-center flex-shrink-0 gap-2">
                                    <button class="btn btn-primary-subtle p-1 lh-1" onclick="sendFollowRequest(<?= $userid ?>, <?= $user['id'] ?>)">
                                        <i class="material-symbols-outlined font-size-14">add</i>
                                    </button>
                                    <button class="btn btn-danger-subtle p-1 lh-1"  onclick="cancelFollowRequest(<?= $userid ?>, <?= $user['id'] ?>)">
                                        <i class="material-symbols-outlined font-size-14">close</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
      </div>
   </div>
</div>

<!-- Like Modal -->
<div class="modal fade likemodal" id="likemodal" tabindex="-1" aria-labelledby="likemodalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <ul class="nav nav-tabs liked-tabs" id="liked-tabs" role="tablist">
               <li class="nav-item" role="presentation">
                  <span class="nav-link active" id="reaction-tab-1" data-bs-toggle="tab"
                     data-bs-target="#reaction-tab-all" type="button" role="tab" aria-controls="reaction-tab-all"
                     aria-selected="true">
                     <span class="align-middle">All</span>
                  </span>
               </li>
               <li class="nav-item" role="presentation">
                  <span class="nav-link" id="reaction-tab-2" data-bs-toggle="tab" data-bs-target="#reaction-tab-like"
                     type="button" role="tab" aria-controls="reaction-tab-like" aria-selected="false">
                     <img src="./assets/images/icon/01.png" class="img-fluid reaction-img" alt="like"
                        loading="lazy">
                     <span class="align-middle">2</span>
                  </span>
               </li>
               <li class="nav-item" role="presentation">
                  <span class="nav-link" id="reaction-tab-3" data-bs-toggle="tab" data-bs-target="#reaction-tab-love"
                     type="button" role="tab" aria-controls="reaction-tab-love" aria-selected="false">
                     <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                        loading="lazy">
                     <span class="align-middle">3</span>
                  </span>
               </li>
               <li class="nav-item" role="presentation">
                  <span class="nav-link" id="reaction-tab-4" data-bs-toggle="tab" data-bs-target="#reaction-tab-happy"
                     type="button" role="tab" aria-controls="reaction-tab-happy" aria-selected="false">
                     <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                        loading="lazy">
                     <span class="align-middle">3</span>
                  </span>
               </li>
               <li class="nav-item" role="presentation">
                  <span class="nav-link" id="reaction-tab-5" data-bs-toggle="tab" data-bs-target="#reaction-tab-haha"
                     type="button" role="tab" aria-controls="reaction-tab-haha" aria-selected="false">
                     <img src="./assets/images/icon/04.png" class="img-fluid reaction-img" alt="haha"
                        loading="lazy">
                     <span class="align-middle">1</span>
                  </span>
               </li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <div class="tab-content liked-tabs-content" id="liked-tabs-content">
               <div class="tab-pane fade show active" id="reaction-tab-all" role="tabpanel"
                  aria-labelledby="reaction-tab-1" tabindex="0">
                  <ul class="list-inline m-0 p-0">
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/01.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Anna Sthesia</h6>
                                 <span>@anna</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/01.png" class="img-fluid reaction-img" alt="like"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/02.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Paul Molive</h6>
                                 <span>@paul</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/01.png" class="img-fluid reaction-img" alt="like"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/03.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Anna Mull</h6>
                                 <span>@annamull</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/04.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Paige Turner</h6>
                                 <span>@paige</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/11.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Bob Frapples</h6>
                                 <span>@bob</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/12.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Ira Membrit</h6>
                                 <span>@ira</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/13.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Bob Frapples</h6>
                                 <span>@bob</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/14.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Greta Life</h6>
                                 <span>@greta</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/15.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Pete Sariya</h6>
                                 <span>@pete</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/04.png" class="img-fluid reaction-img" alt="haha"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tab-pane fade" id="reaction-tab-like" role="tabpanel" aria-labelledby="reaction-tab-2"
                  tabindex="0">
                  <ul class="list-inline m-0 p-0">
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/01.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Anna Sthesia</h6>
                                 <span>@anna</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/01.png" class="img-fluid reaction-img" alt="like"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/02.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Paul Molive</h6>
                                 <span>@paul</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/01.png" class="img-fluid reaction-img" alt="like"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tab-pane fade" id="reaction-tab-love" role="tabpanel" aria-labelledby="reaction-tab-3"
                  tabindex="0">
                  <ul class="list-inline m-0 p-0">
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/03.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Anna Mull</h6>
                                 <span>@annamull</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/04.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Paige Turner</h6>
                                 <span>@paige</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/11.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Bob Frapples</h6>
                                 <span>@bob</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/02.png" class="img-fluid reaction-img" alt="love"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tab-pane fade" id="reaction-tab-happy" role="tabpanel" aria-labelledby="reaction-tab-4"
                  tabindex="0">
                  <ul class="list-inline m-0 p-0">
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/12.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Ira Membrit</h6>
                                 <span>@ira</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li class="mb-3">
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/13.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Bob Frapplesss</h6>
                                 <span>@bob</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/14.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Greta Life</h6>
                                 <span>@greta</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/03.png" class="img-fluid reaction-img" alt="happy"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tab-pane fade" id="reaction-tab-haha" role="tabpanel" aria-labelledby="reaction-tab-5"
                  tabindex="0">
                  <ul class="list-inline m-0 p-0">
                     <li>
                        <div class="reaction-user-container d-flex align-items-center justify-content-between gap-3">
                           <div class="d-flex align-items-center gap-3 flex-shrnik-0">
                              <div class="reaction-user-image flex-shrnik-0">
                                 <img class="border border-2 rounded-circle avatar-50"
                                    src="./assets/images/user/15.jpg" alt="user" loading="lazy">
                              </div>
                              <div class="reaction-user-meta">
                                 <h6 class="mb-0">Pete Sariya</h6>
                                 <span>@pete</span>
                              </div>
                           </div>
                           <div class="reaction flex-shrnik-0">
                              <img src="./assets/images/icon/04.png" class="img-fluid reaction-img" alt="haha"
                                 loading="lazy">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
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
              <a href="./index.html" class="mx-1">SocialV</a>
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
                          <img src="./assets/images/icon/embed.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Embed</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="./assets/images/icon/whatsapp.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">WhatsApp</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="./assets/images/icon/facebook.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Facebook</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="./assets/images/icon/twitter.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Twitter</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="./assets/images/icon/pinterest.png" class="img-fluid">
                       </span>
                       <h6 class="mt-2 mb-0 font-size-14 fw-semibold">Pinterest</h6>
                    </a>
                 </div>
                 <div class="col-lg-2 col-sm-4 col-6 text-center">
                    <a href="javascript:void(0);" class="d-inline-block">
                       <span class="image">
                          <img src="./assets/images/icon/linkedin.png" class="img-fluid">
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
              <img src="./assets/images/icon/08.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Facebook</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="./assets/images/icon/09.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Twitter</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="./assets/images/icon/10.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Instagram</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="./assets/images/icon/11.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>Google Plus</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="./assets/images/icon/13.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>In</h6>
           </div>
           <div class="text-center me-3 mb-3">
              <img src="./assets/images/icon/12.png" class="img-fluid rounded mb-2" alt="" loading="lazy">
              <h6>YouTube</h6>
           </div>
        </div>
     </div>
  </div>

  <!-- Backend Bundle JavaScript -->
  <script src="./assets/js/libs.min.js"></script>
  <!-- Lodash Utility -->
  <script src="./assets/vendor/lodash/lodash.min.js"></script>
  <!-- Utilities Functions -->
  <script src="./assets/js/setting/utility.js"></script>
  <!-- Settings Script -->
  <script src="./assets/js/setting/setting.js"></script>
  <!-- Settings Init Script -->
  <script src="./assets/js/setting/setting-init.js" defer></script>
  <!-- slider JavaScript -->
  <script src="./assets/js/slider.js"></script>
  <!-- masonry JavaScript --> 
  <script src="./assets/js/masonry.pkgd.min.js"></script>
  <!-- SweetAlert JavaScript -->
  <script src="./assets/js/enchanter.js"></script>
  <!-- Sweet-alert Script -->
  <script src="./assets/vendor/sweetalert2/dist/sweetalert2.min.js" async></script>
  <script src="./assets/js/sweet-alert.js" defer></script>
  <!-- Chart Custom JavaScript -->
  <!-- app JavaScript -->
  <script src="./assets/js/charts/weather-chart.js"></script>
  <script src="./assets/js/app.js"></script>
  <!-- Flatpickr Script -->
  <script src="./assets/vendor/flatpickr/dist/flatpickr.min.js"></script>
  <!-- fslightbox Script -->
  <script src="./assets/js/fslightbox.js" defer></script> 
  <!-- vanilla Script -->
  <script src="./assets/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
  <!--lottie Script -->
  <script src="./assets/js/lottie.js"></script>
  <!--select2 Script -->
  <script src="./assets/js/select2.js"></script>
  <!--ecommerce Script -->
  <script src="./assets/js/ecommerce.js"></script>
  
  <script src="./assets/vendor/zuck.js-master/dist/zuck.min.js"></script>
  <script src="./assets/vendor/zuck.js-master/demo/script.js"></script>
  <script src="./assets/js/zuck.js"></script>

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

function sendFollowRequest(followerId, followedId) {
    $.ajax({
        url: `/follow/request/${followerId}/${followedId}`,
        type: 'POST',
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message);
                // Optionally, update the UI to show that the request is pending
            } else {
                alert(response.message);
            }
        },
        error: function(xhr, status, error) {
            alert('Error: Unable to send follow request.');
            console.error('Error details:', status, error);
        }
    });
}

function cancelRequest(followedId) {
    $.ajax({
        url: '/follow/cancel',
        type: 'POST',
        data: { followedId: followedId },
        success: function(response) {
            alert('Request canceled!');
            location.reload();
        },
        error: function() {
            alert('Error canceling the request.');
        }
    });
}

function cancelFollowRequest(followerId, followedId) {
    $.ajax({
        url: '/cancel-follow-request/' + followerId + '/' + followedId,
        type: 'POST',
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message);
                // Update UI to reflect the cancellation
                $('#follow-request-status').text('Canceled');
                $('#follow-button').text('Follow').prop('disabled', false);  // Enable the follow button if needed
            } else {
                alert(response.message);
            }
        },
        error: function(xhr, status, error) {
            alert('An error occurred while canceling the follow request. Please try again.');
        }
    });
}


function deleteComment(postId,commentId) {
    if (!confirm('Are you sure you want to delete this comment?')) {
        return;
    }

    $.ajax({
        url: '/comments/delete/' + commentId,
        type: 'DELETE',
        dataType: 'json',  // Ensures jQuery treats the response as JSON
        success: function(response) {
            if (response.status === 'success') {
                alert(response.message);
                $('#comment-' + commentId).remove(); 
            } else {
                alert(response.message);
            }
        },
        error: function(xhr, status, error) {
            alert('Error: Unable to delete the comment.');
            console.log('Error Details:', status, error);
        }
    });
}


$(document).on('click', '.like-btn', function() {
     var postId = $(this).data('post-id');
    $.post('/like', { post_id: postId }, function(data) {
        $('#like-count-' + postId).text(data.like_count + " Likes");
    });
});

$(document).on('click', '.submit-comment-btn', function() {
    var postId = $(this).data('post-id');
    var commentContent = $('#comment-input-' + postId).val();
    if(commentContent == null || commentContent == ""){
      return;
    }
    $.post('/comment', { post_id: postId, content: commentContent }, function(data) {
        // Append new comment to the list
       // Assuming 'data' contains details such as 'username', 'profilePicture', 'createdAt', and 'content'
// Use 'default_dp.jpg' if profile picture is empty or set to 'none'
const profilePic = (data.profile_picture && data.profile_picture !== 'none') ? data.profile_picture : 'default_dp.jpg';
const base_url = "<?= base_url(); ?>";

// Append the comment with the chosen profile picture

const commentHTML = `
    <li class="mb-3">
        <div class="comment-list-block">
            <div class="d-flex align-items-center gap-3">
                <div class="comment-list-user-img flex-shrink-0">
                    <img src="${base_url}/uploads/${profilePic}" alt="userimg" class="avatar-48 rounded-circle img-fluid" loading="lazy">
                </div>
                <div class="comment-list-user-data">
                    <div class="d-inline-flex align-items-center gap-1 flex-wrap">
                        <h6 class="m-0">${data.username}</h6>
                        <span class="d-inline-block text-primary">
                            <svg class="align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2483 0.216553H4.75081C2.13805 0.216553 0.5 2.0665 0.5 4.68444V11.7487C0.5 14.3666 2.13027 16.2166 4.75081 16.2166H12.2475C14.8689 16.2166 16.5 14.3666 16.5 11.7487V4.68444C16.5 2.0665 14.8689 0.216553 12.2483 0.216553Z" fill="currentColor" />
                                <path d="M5.5 8.21627L7.50056 10.216L11.5 6.21655" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="fw-medium small text-capitalize">${new Date(data.created_at).toLocaleString()}</span>
                    </div>
                </div>
            </div>
            <div class="comment-list-user-comment">
                <div class="comment-list-comment">${data.content}</div>
                <div class="comment-list-action mt-2" id="comment-section-${data.post_id}">
                    <ul class="list-inline m-0 p-0 d-flex align-items-center gap-2">
                        <li>
                            <div class="like-block position-relative d-flex align-items-center flex-shrink-0">
                                <div class="like-data">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">
                                            <span class="material-symbols-outlined align-text-top font-size-18">thumb_up</span>
                                            <span class="fw-medium small">Likes</span>
                                        </span>
                                        <div class="dropdown-menu py-2">
                                            <a class="ms-2 me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"><img src="../assets/images/icon/01.png" class="img-fluid" alt="like" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Love"><img src="../assets/images/icon/02.png" class="img-fluid" alt="love" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Happy"><img src="../assets/images/icon/03.png" class="img-fluid" alt="happy" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="HaHa"><img src="../assets/images/icon/04.png" class="img-fluid" alt="haha" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Think"><img src="../assets/images/icon/05.png" class="img-fluid" alt="think" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Sad"><img src="../assets/images/icon/06.png" class="img-fluid" alt="sad" loading="lazy"></a>
                                            <a class="me-2" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Lovely"><img src="../assets/images/icon/07.png" class="img-fluid" alt="lovely" loading="lazy"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="fw-medium small" data-bs-toggle="collapse" data-bs-target="#subcomment-collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">Reply</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </li>
`;
// Append the generated HTML to the comment section
$('#comment-ul-' + postId).append(commentHTML);



        $('#comment-input-' + postId).val(''); // Clear input
    });
});
</script>
</body>

</html>