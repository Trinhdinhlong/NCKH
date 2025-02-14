 <!-- Jobs Start -->
 <div class="container-xxl py-5 job-list">
     <div class="container">
         <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Danh sách tuyển dụng</h1>
         <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
             <!-- Search Start -->
             <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
                 <div class="container">
                     <div class="row g-2">
                         <div class="col-md-10">
                             <div class="row g-2">
                                 <div class="col-md-12">
                                     <input type="text" class="form-control border-0" placeholder="Keyword"
                                         id="query" />
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-2">
                             <button class="btn btn-dark border-0 w-100" id="submit"
                                 onclick="handleSubmit()">Search</button>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Search End -->
             <div class="tab-content">
                 <div id="tab-1" class="tab-pane fade show p-0 active tab-load-job-list" id='tab-load-job-list'>

                     <!-- <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Marketing Manager</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Product Designer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Creative Director</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Wordpress Developer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div> -->
                     <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                 </div>
                 <div id="tab-2" class="tab-pane fade show p-0">
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Software Engineer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                         </divquận Bình Thạnh, HCM <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Marketing Manager</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Product Designer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Creative Director</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Wordpress Developer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                 </div>
                 <div id="tab-3" class="tab-pane fade show p-0">
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Software Engineer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Marketing Manager</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Product Designer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Creative Director</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <div class="job-item p-4 mb-4">
                         <div class="row g-4">
                             <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                 <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt=""
                                     style="width: 80px; height: 80px;">
                                 <div class="text-start ps-4">
                                     <h5 class="mb-3">Wordpress Developer</h5>
                                     <span class="text-truncate me-3"><i
                                             class="fa fa-map-marker-alt text-primary me-2"></i>quận Bình Thạnh,
                                         HCM</span>
                                     <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full
                                         Time</span>
                                     <span class="text-truncate me-0"><i
                                             class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                 </div>
                             </div>
                             <div
                                 class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                 <div class="d-flex mb-3">
                                     <a class="btn btn-light btn-square me-3" href=""><i
                                             class="far fa-heart text-primary"></i></a>
                                     <a class="btn btn-primary" href="">Ứng tuyển ngay!</a>
                                 </div>
                                 <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date
                                     Line: 01 Jan, 2045</small>
                             </div>
                         </div>
                     </div>
                     <a class="btn btn-primary py-3 px-5" href="">Xem thêm</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <script src="./js/comp-job-list.js"></script>
 <!-- Jobs End -->