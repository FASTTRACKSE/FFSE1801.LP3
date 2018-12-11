<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tuyển dụng Le Bonjour | Nhà Hàng - Khách sạn Đà Nẵng - Hội An</title>
      <link rel = "icon" type = "image/png" sizes = "32x32" href = "assets/images/icons/logo_32x32.png">
      <link rel = "icon" type = "image/png" sizes = "16x16" href = "assets/images/icons/logo_32x32.png">
      <link rel = "shortcut icon" href = "images/icons/logo_32x32.png">
      <link rel="stylesheet" href="assets/css/pure.css">
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
      <script src="assets/js/app.js"></script>
      <script src="assets/js/push_data.js"></script>
      <!-- Begin SessionStack code -->
<script type="text/javascript">
      !function(a,b){var c=window;c.SessionStackKey=a,c[a]=c[a]||{t:b,
      q:[]};for(var d=["start","stop","identify","getSessionId","log","setOnDataCallback"],e=0;e<d.length;e++)!function(b){
      c[a][b]=c[a][b]||function(){c[a].q.push([b].concat([].slice.call(arguments,0)));
      }}(d[e]);var f=document.createElement("script");f.async=1,f.src="https://cdn.sessionstack.com/sessionstack.js";
      var g=document.getElementsByTagName("script")[0];g.parentNode.insertBefore(f,g);
      }("SessionStack","c31cd810cc9948b8927741ed9f332cb1");
      </script>
      <!-- End SessionStack Code -->

</head>

<body>

      <!-------------------------------- Navbar---------------------------------------->

      <div class="pimg1">
           <?php require_once('templates/components/navigation.php')?>

            <!-- -------------- Main jobs ------------------- -->

            <div class="container container--background position-relative rounded pb-3">

                  <div class="ptext">
                        <p class="border d-md-inline">
                              <a href="templates/applicant/applicant_profile.php">Tìm việc ngay!</a>
                        </p>
                  </div>

                  <?php require_once('templates/components/job_filter.php')?>
                  

                  <h2 class="text-center text-light">Công việc phù hợp với bạn</h2>
                  <div class="row container mx-auto" id="relevantJobs">
                        <script>
                              jobCard(jobList,"relevantJobs",6,3)
                              console.log(jobList)
                              $( "input[type=checkbox]" ).on( "click", function() {
                                    countCheckedJobs();
                              });
                        </script> 
                        

                  </div>
                  <div class="d-flex"><a href="templates/shared/main_job.php" class="btn btn-primary mt-3 ml-auto see-more">Xem tất cả <i class="fas fa-angle-double-right"></i></a></div>
            </div>
      </div>
      <!-- -------------------- Hot jobs ------------------------- -->
<!-- 
      <section class="section section-dark py-3">
            <div class="ptext">
                  <p class="border trans d-md-inline">
                        Công việc hot - Đừng bỏ qua!
                  </p>
            </div>
            <ul class="nav nav-tabs mt-5 text-primary font-weight-bold" id="hotJob-nav" role="tablist">
                  <li class="nav-item">
                        <a class="nav-link active" id="hotJob-tab" data-toggle="tab" href="#hotJob" role="tab">Hot Jobs</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" id="highSalary-tab" data-toggle="tab" href="#highSalary" role="tab">High
                              Salary Jobs</a>
                  </li>
            </ul>
            <div class="tab-content bg-light text-dark px-3" id="myTabContent">
                  <div class="tab-pane show fade d-flex active row" id="hotJob" >
                        <script>
                              jobCard(job1,"hotJob",5,3);
                        </script>
      
                  </div>
                  <div class="tab-pane fade d-flex row" id="highSalary" role="tabpanel">
                        <script>
                              jobCard(job1,"highSalary",6,3);
                        </script>
                  </div>

            </div>
            <div class="d-flex"><a href="templates/shared/main_job.php" class="btn btn-primary mt-3 ml-auto see-more">Xem tất cả <i class="fas fa-angle-double-right"></i></a></div>
      </section> -->

      <!-- ------------------Nhà tuyển dụng VIP -------------------- -->

      <div class="pimg2 py-2">
            <div class="ptext mt-0 mb-5 w-50 mx-auto">
                  <p class="border">
                        Nhà tuyển dụng VIP
                  </p>
            </div>
            <div class="container container--background py-2">
                  <div class="row mx-auto my-4 round px-0" id="vipEmployers">
                        <script>
                              // console.log(emp1)
                              vipCard(empList,"vipEmployers",4,2);
                              vipCard(empList,"vipEmployers",4,2);
                        </script>

                  </div>
                  
                  <div class="d-flex"><a href="templates/shared/main_job.php" class="btn btn-primary mt-3 ml-auto see-more">Xem tất cả <i class="fas fa-angle-double-right"></i></a></div>
            </div>

      </div>

      <!-- --------------- Hãy tạo profile và CV ------------------- -->

      <section class="section section-dark d-none d-md-block">
            <h2>Chưa tìm được công việc bạn mong muốn?</h2>
            <h4>Hãy cập nhật profile và tạo CV để lọt vào "mắt xanh" nhà tuyển dụng ngay!</h4>
            <div class="card-deck d-flex justify-content-between mt-4">
                  <div class="card bg-dark" style="max-width: 18rem;">

                        <div class="card-body">
                              <h5 class="card-title"><span style="font-Weight: bold; font-size: 3.5rem">77%</span></h5>
                              <p class="card-text">Ứng viên tìm được công việc phù hợp sau khi cập nhật profile và tạo
                                    CV</p>
                        </div>
                  </div>
                  <div class="card bg-dark" style="max-width: 18rem;">

                        <div class="card-body">
                              <h5 class="card-title"><span style="font-Weight: bold; font-size: 3.5rem">200+</span></h5>
                              <p class="card-text">Mẫu CV từ truyền thống đến <span style="font-weight: bold; font-family: 'Lobster', cursive;font-size: 1.4rem;">ấn
                                          tượng, phá cách</span></p>
                        </div>
                  </div>
                  <div class="card bg-dark" style="max-width: 18rem;">

                        <div class="card-body">
                              <h5 class="card-title"><span style="font-Weight: bold; font-size: 3.5rem">500+</span></h5>
                              <p class="card-text">Lượt tạo và tải CV <span style="font-Weight: bold; font-size: 1.4rem; text-decoration: underline">MỖI
                                          NGÀY</span></p>
                        </div>
                  </div>
            </div>

      </section>

<!-- --------------------------- Cẩm nang nghề nghiệp -------------------------------->

      <div class="pimg3 pb-5">
            <div class="ptext mt-0 mb-5 w-75 mx-auto">
                  <p class="border trans d-inline-block">Cẩm nang nghề nghiệp</p>
            </div>

            <div id="articleSection">
                        <script>
                              // console.log(art1)
                              articleCard(art1,"articleSection",9)
                        </script>
            </div>
            
            
            <div class="d-flex"><a href="templates/shared/main_job.php" class="btn btn-primary mt-3 ml-auto mr-4 see-more">Xem tất cả <i class="fas fa-angle-double-right"></i></a></div>
      </div>

      <!-- ----------------- Sự kiện nghề nghiệp ------------------ -->

      <section class="section section-dark event">
            <div class="ptext pt-1">
                  <p class="border trans d-md-inline">Sự kiện nghề nghiệp</p>
            </div>

            <div class="row event__row mx-auto">
                  <div class="event__choose">
                        <div class="row nav nav-pills p-3" role="tablist">

                              <a class="col-6 border border-dark rounded-0 nav-link active event__choose__item"
                                    data-toggle="pill" href="#hotEvent" role="tab">
                                    <img class="d-none d-md-inline" src="assets/images/icons/megaphone.png" alt="">
                                    <span>Đáng chú ý</span>
                              </a>
                              <a class="col-6 border border-dark rounded-0 nav-link event__choose__item" data-toggle="pill"
                                    href="#weekEvent" role="tab">
                                    <img class="d-none d-md-inline" src="assets/images/icons/week.png" alt="">
                                    <span>
                                          Tuần này
                                    </span>
                              </a>
                              <a class="col-6 border border-dark rounded-0 nav-link event__choose__item" data-toggle="pill"
                                    href="#monthEvent" role="tab">
                                    <img class="d-none d-md-inline" src="assets/images/icons/month.png" alt="">
                                    <span>
                                          Tháng này
                                    </span></a>
                              <a class="col-6 border border-dark rounded-0 nav-link event__choose__item"
                                    href="templates/shared/constructing.php">
                                    <img class="d-none d-md-inline" src="assets/images/icons/calendar.png" alt="">
                                    <span>
                                          Xem tất cả
                                    </span></a>
                        </div>
                  </div>
                  
                  <div class="tab-content">
                        <div class="tab-pane fade show active" id="hotEvent" role="tabpanel">
                              <div class="row event__row" id="hotEventRow" >
                                    <script>
                                          eventCard(eventList,"hotEventRow",5,2)
                                          $( "input[type=checkbox]" ).on( "click", function() {
                                                countCheckedEvents();
                                          });
                                    </script>                                    
                              </div>
                        </div>
                        <div class="tab-pane fade show" id="weekEvent" role="tabpanel">
                              <div class="row event__row" id="weekEventRow" >
                                    <script>
                                          // eventCard(eventList,"weekEventRow",4,2)
                                    </script>     
                              </div>
                        </div>
                        <div class="tab-pane fade show" id="monthEvent" role="tabpanel">
                              <div class="row event__row" id="monthEventRow" >
                                    <script>
                                          // eventCard(eventList,"monthEventRow",3,2)
                                    </script>         
                              </div>
                        </div>

                  </div>
            </div>

            </div>
            <div class="d-flex"><a href="templates/shared/main_job.php" class="btn btn-primary mt-3 ml-auto see-more">Xem tất cả <i class="fas fa-angle-double-right"></i></a></div>
      
      </section>

      <!-- --------------- User reviews --------------------- -->

      <div class="pimg4">
            <div class="ptext">
                  <p class="border">
                        Người dùng nói về chúng tôi:
                  </p>
            </div>
            <div id="reviewCarousel" class="carousel slide carousel-fade mt-3" data-ride="carousel">
                  <div class="carousel-inner">
                        <div class="carousel-item text-center reviews active">
                              <div class="container container--background card-columns py-5 ">
                                    <div class="card w-75 mx-auto">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/7.jpg"
                                                            alt="Card image cap">

                                                      <h4>Trần Bích Trâm</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Quảng Ninh - Việt Nam</h6>
                                                <p class="card-text">Thông tin rất hữu ích nhé, bạn admin làm việc
                                                      nhiệt tình, trên cả tuyệt vời !!!!!!!! :xxxxxxxxxxxxxxx </p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/8.jpg"
                                                            alt="Card image cap">

                                                      <h4>Hồ Tâm Trung</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Đà Nẵng - Việt Nam</h6>
                                                <p class="card-text">Đã có việc làm nhưng luôn theo dõi page để cập
                                                      nhật lời khuyên hữu ích về nghề nghiệp và tips tiếng Anh. Like
                                                      mạnh!</p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/1.jpg"
                                                            alt="Card image cap">

                                                      <h4>K Toroshan Sen</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Istanbul - Turkey</h6>
                                                <p class="card-text">[...], they really do good business and pure job
                                                      arrangements. Keep going to follow you.. </p>
                                          </div>
                                    </div>

                              </div>
                        </div>
                        <div class="carousel-item text-center reviews">
                              <div class="container card-columns py-5 ">
                                    <div class="card w-75 mx-auto">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/4.jpg"
                                                            alt="Card image cap">

                                                      <h4>Khoa Đỗ</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Đà Nẵng - Việt Nam</h6>
                                                <p class="card-text">Nhờ page mà mình vừa tìm được việc làm thêm hè
                                                      này, bạn admin lại rất vui tính và nhiệt tình nữa. Luôn ủng hộ!
                                                      :)</p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/5.jpg"
                                                            alt="Card image cap">

                                                      <h4>Đinh Văn Hải</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Quảng Nam - Việt Nam</h6>
                                                <p class="card-text">Thông tin rất tuyệt vời , .....!</p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/6.jpg"
                                                            alt="Card image cap">

                                                      <h4>Duyên Nhỏ</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Đà Nẵng - Việt Nam</h6>
                                                <p class="card-text">Cảm ơn page vì đã cung cấp những thông tin thiết
                                                      thực và vô cùng hữu ích đến cho mọi người nhé!</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="carousel-item text-center reviews">
                              <div class="container card-columns py-5 ">
                                    <div class="card w-75 mx-auto">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/2.jpg"
                                                            alt="Card image cap">

                                                      <h4>Nguyễn Sơn</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Hà Nội - Việt Nam</h6>
                                                <p class="card-text">Tôi rất hài lòng khi dùng dịch vụ ở đây</p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/3.jpg"
                                                            alt="Card image cap">
                                                      <h4>Bạch Mã</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Việt Nam</h6>
                                                <p class="card-text">Dịch vụ tốt, giá cả hợp lý, mình rất hài lòng!</p>
                                          </div>
                                    </div>
                                    <div class="card w-75 d-none d-md-inline-block">
                                          <div class="card-body pb-0">
                                                <a href="https://goo.gl/V7te4w">
                                                      <img class="card-img-top w-50 mb-3 rounded-circle" src="assets/images/reviewers/9.jpg"
                                                            alt="Card image cap">
                                                      <h4>KháchSạn Hr- Le Bonjour</h4>
                                                </a>
                                          </div>
                                          <div class="card-body pt-0">
                                                <h6>Đà Nẵng - Việt Nam</h6>
                                                <p class="card-text">Là một đối tác tin cậy, chuyên nghiệp! Sẽ hợp tác
                                                      lâu dài trong tương lai.</p>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                  </a>
            </div>
      </div>

      <!-- ------------------- Footer ----------------------- -->
      <?php require_once('templates/components/footer.php')?>
      <?php require_once('templates/components/fixed_menu.php')?>
      <script>
                  window.onload=function(){
                                        
                  $('.multiselect').multiselect({
                  buttonWidth: '160px',
                  includeSelectAllOption: true,
                  nonSelectedText: 'Tất cả'
                  });
                  }
                </script>
      
</body>

</html>