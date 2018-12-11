<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
      <link rel="stylesheet" href="/assets/css/pure.css">
      <link rel="stylesheet" href="/assets/css/bootstrap.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
            crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXbkXZX8Sl5hJBaUH9Z3SepsluuXv-PtA&callback=myMap"></script>
      <script src="/assets/js/app.js"></script>
      <script src="/assets/js/push_data.js"></script>
      <script src="/assets/js/jssor.js"></script>

      <style>
            body{
                  background-image: url("/assets/images/backgrounds/photo2.jpg"); 
                  background-position: center center;
                  background-size: auto;
            }
      </style>
</head>

<body>
      <div w3-include-html="/templates/components/navigation.php"></div>
      <div class="container">
            <div class="row container--background--light py-4 mt-3 rounded-top">
                  <div class="col-md-2" id="logo1">
                        <script>
                              console.log(apl1)
                              $("#logo1").append(
                                    `<img src="`+emp1.logo+`" alt="Le Bonjour Logo" class="img-thumbnail">`
                              )
                        </script>
                        
                  </div>
                  <div class="col-md-8 pl-3">
                        <a href="#">
                              <h3 id="employerName">
                                    <script>
                                          $("#employerName").append(emp1.name)
                                    </script>
                              </h3>
                        </a>
                        <p id="employerDes">
                                    <script>
                                          $("#employerDes").append(emp1.descriptions)
                                    </script>
                        </p>
                  </div>
                  <div class="col-md-2">
                        <input class="event__follow__check" id="event5Check" type="checkbox">
                        <button type="button" class="btn p-1 my-1 w-100 event__follow__button event5">
                              <label for="event5Check" class="btn p-1 m-0 w-100">
                                    <i class="far fa-star"></i> Follow
                              </label>
                        </button>
                        <div class="dropdown">
                              <button class="btn btn-secondary p-1 my-1 w-100 dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    FB/Messenger
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="dropdown-item d-flex">
                                          <a href="https://www.facebook.com/LeBonjourJOB/"><img class="social__icon"
                                                      src="/assets/images/icons/facebook.png" alt="Facebook"></a>
                                          <a href="https://www.messenger.com/t/316196982241647"><img class="social__icon "
                                                      src="/assets/images/icons/messenger.png" alt="Messenger"></a>
                                    </div>
                              </div>
                        </div>
                        <a href="https://www.facebook.com/LeBonjourJOB/" class="btn bg-primary btn__sn p-1 my-1 w-100 " type="button">
                              <i class="fas fa-globe"></i> Website
                        </a>
                  </div>
            </div>
            <div class="row" id="bannerSlide">
                  <script>
                        employerBanner(emp2,"bannerSlide")      
                  </script>
            </div>
            <div class="row bg-light py-3 pl-2" id="myScrollSpy">
                  <nav class="navbar navbar-expand-lg col-12 px-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                      <a class="nav-link px-2 active" href="#section1">Thông tin NTD</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section2">Hoạt động - Văn hóa</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section3">Đánh giá từ cộng đồng</a>
                                                </li>
                                    </ul>
                        </div>
                        
                  </nav>
            </div>

            <div class="row container--background--light py-5 px-3">
                  
                  <div class="col-md-9">
                        <div class="container__scroll" data-spy="scroll" data-target="#myScrollSpy" data-offset="1">

                              <div id="section1" class="container__scroll__info">
                                    <h4>Thông tin NTD</h4><br>
                                    <script>
                                          employerInfo(emp1,"section1");
                                    </script>
                              </div>
                              <div id="section2" class="container__scroll__info">
                                    <h4>Hoạt động - Văn hóa doanh nghiệp</h4>
                                    <script>
                                          activitiesSlide(emp1,"section2")
                                    </script>
                              </div>
                              <div id="section3" class="container__scroll__info mt-5">
                                    <h4>Đánh giá từ cộng đồng</h4>
                                    <div w3-include-html="/templates/components/review.php"></div>
                              </div>

                        </div>
                  </div>

                  <div class="col-md-3">
                        <div class="ptext ptext--small">
                              <p class="border border--small py-3 trans d-md-inline">
                                    Đang tuyển dụng
                              </p>
                        </div>
                        <div class="sidebar__box mb-4" id="sidebarBox">
                              <script>
                                    jobCardSlim(job1,"sidebarBox");
                              </script>
                        </div>

                        <h5>Địa điểm Nhà tuyển dụng:</h5>
                        <div class="mt-3" id="googleMap" style="width:100%;height:300px;"></div>
                  </div>
                  
                  
            </div>
            <div class="form-group row my-5 p-4 text-light bg-dark rounded employer-review">
                  <div class="col-md-2">
                        <label for="exampleFormControlTextarea1"><h4>Đánh giá của bạn:</h4></label>
                  </div>
                  <div class="col-md-7">
                        <div class="form-group" id="rating-ability-wrapper">
                              <label class="control-label" for="rating">
                              <span class="field-label-header">Bạn cảm nhận thế nào về nhà tuyển dụng này? Hãy chia sẻ cùng chúng tôi:</span><br>
                              <span class="field-label-info"></span>
                              <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                              </label>
                                    <div class="row pl-3">
                                                <h2 class="bold rating-header d-none d-md-block mr-4" >
                                                <span class="selected-rating">0</span><small> / 5</small>
                                                </h2>
                                                <button type="button" class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25" data-attr="1" id="rating-star-1">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                </button>
                                                <button type="button" class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25" data-attr="2" id="rating-star-2">
                                                      <i class="fa fa-star" aria-hidden="true"></i> 
                                                </button> 
                                                <button type="button" class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25" data-attr="3" id="rating-star-3">
                                                      <i class="fa fa-star" aria-hidden="true"></i> 
                                                </button> 
                                                <button type="button" class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25" data-attr="4" id="rating-star-4">
                                                      <i class="fa fa-star" aria-hidden="true"></i> 
                                                </button> 
                                                <button type="button" class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25" data-attr="5" id="rating-star-5">
                                                      <i class="fa fa-star" aria-hidden="true"></i>
                                                </button>
                                    </div>
                          </div>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          <button class="btn btn-primary mt-3 px-5">
                                    Gửi
                        </button>
                  </div>
                  
                  
            </div>

      </div>

      <?php require_once('/templates/components/footer.php')?>
      <?php require_once('/templates/components/fixed_menu.php')?>
</body>

</html>