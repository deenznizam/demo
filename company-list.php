<?php include 'header-link.php';?>
 
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

      <!-- Header Section php-->
      <?php include 'header.php';?>
      <!-- Header Section php-->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Company List</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active">Company List</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="card">
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-sm-4">
                                    <div class="search-box">
                                        <input type="text" class="form-control" id="searchMemberList" placeholder="Search for Company name...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-sm-auto ms-auto">
                                    <div class="list-grid-nav hstack gap-1">
                                        <button type="button" id="grid-view-button" class="btn btn-soft-info nav-link btn-icon fs-14 active filter-button shadow-none"><i class="ri-grid-fill"></i></button>
                                        <button type="button" id="list-view-button" class="btn btn-soft-info nav-link  btn-icon fs-14 filter-button shadow-none"><i class="ri-list-unordered"></i></button>
                                       
                                        <button class="btn btn-success addMembers-modal" data-bs-toggle="modal" data-bs-target="#addmemberModal"><i class="ri-add-fill me-1 align-bottom"></i> Add Company</button>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>

                                <div id="teamlist">
                                    <div class="team-list grid-view-filter row" id="team-member-list">
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-9.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn ">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="12"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="12"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                        <img src="assets/images/users/com-1.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                     <div class="team-content">
                        <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 1</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Riyadh</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">10</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">500</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">     
                    <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>           
                                     </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-12.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="11"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="11"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                     <img src="assets/images/users/user-dummy-img.jpg" alt="" class="member-img img-fluid d-block rounded-circle">
                     </div>
                     <div class="team-content">
                        <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 2</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Riyadh</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">10</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">1000</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn ">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="10"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="10"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img src="assets/images/users/com-3.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                     <div class="team-content">
                      <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 3</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Tabuk</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">05</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">400</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="9"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="9"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img src="assets/images/users/com-4.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                     <div class="team-content">
                         <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 4</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Taif</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">20</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">1500</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn ">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="8"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="8"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                        <div class="avatar-title border bg-light text-primary rounded-circle text-uppercase">ME</div>
                     </div>
                     <div class="team-content">
                         <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 5</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Medina</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">03</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">300</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn ">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="7"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="7"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img src="assets/images/users/com-5.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                     <div class="team-content">
                        <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 6</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Al Hofuf</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">10</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">500</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="6"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="6"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0">
                        <div class="avatar-title border bg-light text-primary rounded-circle text-uppercase">NC</div>
                     </div>
                     <div class="team-content">
                        <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 7</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Riyadh</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">10</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">500</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col">
      <div class="card team-box">
         <div class="team-cover">                    <img src="assets/images/small/img-7.jpg" alt="" class="img-fluid">                </div>
         <div class="card-body p-4">
            <div class="row align-items-center team-row">
               <div class="col team-settings">
                  <div class="row">
                     <div class="col">
                        <div class="flex-shrink-0 me-2">                                        <button type="button" class="btn btn-light btn-icon rounded-circle btn-sm favourite-btn active">                                            <i class="ri-star-fill fs-14"></i>                                        </button>                                    </div>
                     </div>
                     <div class="col text-end dropdown">
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">                                        <i class="ri-more-fill fs-17"></i>                                    </a>                                    
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li><a class="dropdown-item edit-list" href="#addmemberModal" data-bs-toggle="modal" data-edit-id="5"><i class="ri-pencil-line me-2 align-bottom text-muted"></i>Edit</a></li>
                           <li><a class="dropdown-item remove-list" href="#removeMemberModal" data-bs-toggle="modal" data-remove-id="5"><i class="ri-delete-bin-5-line me-2 align-bottom text-muted"></i>Remove</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="team-profile-img">
                     <div class="avatar-lg img-thumbnail rounded-circle flex-shrink-0"><img src="assets/images/users/com-2.jpg" alt="" class="member-img img-fluid d-block rounded-circle"></div>
                     <div class="team-content">
                       <a class="member-name" data-bs-toggle="offcanvas" href="#member-overview" aria-controls="member-overview">
                           <h5 class="fs-16 mb-1">Company 8</h5>
                        </a>
                        <p class="text-muted member-designation mb-0">Riyadh</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col">
                  <div class="row text-muted text-center">
                     <div class="col-6 border-end border-end-dashed">
                        <h5 class="mb-1 projects-num">10</h5>
                        <p class="text-muted mb-0">Groups</p>
                     </div>
                     <div class="col-6">
                        <h5 class="mb-1 tasks-num">500</h5>
                        <p class="text-muted mb-0">Cards</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-2 col">
                  <div class="text-end">                                <a href="card-list.php" class="btn btn-info view-btn">View Cards</a>                            </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   
   
   
   
</div>
                                    <div class="text-center mb-3">
                                        <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load More </a>
                                    </div>
                                </div>
                                <div class="py-4 mt-4 text-center" id="noresult" style="display: none;">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px"></lord-icon>
                                    <h5 class="mt-4">Sorry! No Result Found</h5>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="addmemberModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content border-0">
                                            
                                            <div class="modal-body">
                                                <form autocomplete="off" id="memberlist-form" class="needs-validation" novalidate>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <input type="hidden" id="memberid-input" class="form-control" value="">
                                                            <div class="px-1 pt-1">
                                                                <div class="modal-team-cover position-relative mb-0 mt-n4 mx-n4 rounded-top overflow-hidden">
                                                                    <img src="assets/images/small/img-9.jpg" alt="" id="cover-img" class="img-fluid">
    
                                                                    <div class="d-flex position-absolute start-0 end-0 top-0 p-3">
                                                                        <div class="flex-grow-1">
                                                                            <h5 class="modal-title text-white" id="createMemberLabel">Add New Company</h5>
                                                                        </div>
                                                                        <div class="flex-shrink-0">
                                                                            <div class="d-flex gap-3 align-items-center">
                                                                                <div>
                                                                                    <label for="cover-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Select Cover Image">
                                                                                        <div class="avatar-xs">
                                                                                            <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                                <i class="ri-image-fill"></i>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                    <input class="form-control d-none" value="" id="cover-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                                </div>
                                                                                <button type="button" class="btn-close btn-close-white"  id="createMemberBtn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center mb-4 mt-n5 pt-2">
                                                                <div class="position-relative d-inline-block">
                                                                    <div class="position-absolute bottom-0 end-0">
                                                                        <label for="member-image-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Member Image">
                                                                            <div class="avatar-xs">
                                                                                <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                                                    <i class="ri-image-fill"></i>
                                                                                </div>
                                                                            </div>
                                                                        </label>
                                                                        <input class="form-control d-none" value="" id="member-image-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                    </div>
                                                                    <div class="avatar-lg">
                                                                        <div class="avatar-title bg-light rounded-circle">
                                                                            <img src="assets/images/users/user-dummy-img.jpg" id="member-img" class="avatar-md rounded-circle h-auto" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="teammembersName" class="form-label">Name</label>
                                                                <input type="text" class="form-control" id="teammembersName" placeholder="Enter name"  required>
                                                                <div class="invalid-feedback"> Enter company name.</div>
                                                            </div>

                                                            <div class="mb-4">
                                                                <label for="designation" class="form-label">Location</label>
                                                                <input type="text" class="form-control" id="designation" placeholder="Enter company location" required>
                                                                
                                                            </div>

                                                            <div class="mb-4">
                                                                <label for="designation" class="form-label">Username</label>
                                                                <input type="text" class="form-control" id="designation" placeholder="Enter company Username" required>
                                                                
                                                            </div>


                                                            <div class="mb-4">
                                                                <label for="designation" class="form-label">Password</label>
                                                                <input type="password" class="form-control" id="designation" placeholder="Enter company Username" required>
                                                                
                                                            </div>

                                                            <input type="hidden" id="project-input" class="form-control" value="">
                                                            <input type="hidden" id="task-input" class="form-control" value="">

                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success" id="addNewMember">Add Company</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--end modal-content-->
                                    </div>
                                    <!--end modal-dialog-->
                                </div>
                                <!--end modal-->

                                                               
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!--end row-->
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © CRTY.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Deenztech
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- removeFileItemModal -->
    <div id="removeMemberModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-removeMemberModal"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this member ?</p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn w-sm btn-danger" id="remove-item">Yes, Delete It!</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!--end delete modal -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>


  

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- team init js -->
    <!-- <script src="assets/js/pages/team.init.js"></script> -->

    <!-- App js -->
    <script src="assets/js/app.js"></script>
<script >
    // $('#list-view-button').click(function(){
    //     alert()
    //     $('#team-member-list').addClass('list-view-filter');
    //     $('#team-member-list').removeClass('grid-view-filter');
    // });

    //   $('#grid-view-button').click(function(){
    //     $('#team-member-list').removeClass('list-view-filter');
    //     $('#team-member-list').addClass('grid-view-filter');
    // })


var buttonGroups, list = document.querySelectorAll(".team-list");

function onButtonGroupClick(e) {
    "list-view-button" === e.target.id || "list-view-button" === e.target.parentElement.id ? (document.getElementById("list-view-button").classList.add("active"), document.getElementById("grid-view-button").classList.remove("active"), Array.from(list).forEach(function(e) {
        e.classList.add("list-view-filter"), e.classList.remove("grid-view-filter")
    })) : (document.getElementById("grid-view-button").classList.add("active"), document.getElementById("list-view-button").classList.remove("active"), Array.from(list).forEach(function(e) {
        e.classList.remove("list-view-filter"), e.classList.add("grid-view-filter")
    }))
}
list && (buttonGroups = document.querySelectorAll(".filter-button")) && Array.from(buttonGroups).forEach(function(e) {
    e.addEventListener("click", onButtonGroupClick)
});
</script>
</body>
</html>