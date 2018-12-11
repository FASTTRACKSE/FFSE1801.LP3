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
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css"> -->

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
      <div class="d-none d-md-flex justify-content-around p-3 employer__navbar container--background--light">
            <img src="/assets/images/employer/001/logo.png" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/002/logo.jpeg" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/003/logo.png" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/004/logo.jpg" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/001/logo.png" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/002/logo.jpeg" alt="..." class="logo bg-light img-thumbnail">
            <img src="/assets/images/employer/003/logo.png" alt="..." class="logo bg-light img-thumbnail">
            
      </div>
      <div class="container container--wide pr-5 pt-4 pb-5">
            
            <div class="row">
        <div class="col-md-3">
              <div class="text-uppercase">
                    <h5>Lọc thông tin tuyển dụng</h5>
              </div>
              <ul class="sidebar__filter">
                        <li class="d-flex justify-content-between align-items-center list__title">
                              <h6>Điều kiện 1</h6>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cond1">
                                                <label class="custom-control-label" for="cond1">Cập nhật lựa chọn</label>
                                          </div>
                                      <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cond2">
                                                <label class="custom-control-label" for="cond2">Cập nhật lựa chọn</label>
                                          </div>
                                      <span class="badge badge-primary badge-pill">5</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cond3">
                                                <label class="custom-control-label" for="cond3">Cập nhật lựa chọn</label>
                                          </div>
                                      <span class="badge badge-primary badge-pill">5</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                                    <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="cond4">
                                                <label class="custom-control-label" for="cond4">Cập nhật lựa chọn</label>
                                          </div>
                                      <span class="badge badge-primary badge-pill">5</span>
                        </li>
                  </ul>
            
        </div>
        <div class="col-md-9">
              <div class="row">
                    <div class="col-md-12 mb-4 d-flex justify-content-between">
                          <span class="py-2 mr-4">Ưu tiên xem: </span>
                              <ul class="nav nav-pills">
                                          <li class="nav-item">
                                            <a class="nav-link active" href="#">Tin mới</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">Lương cao</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">Số lượng nhiều</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">NTD uy tín</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">Tuyển gấp</a>
                                          </li>
                              </ul>
                              <form class="form-inline ml-2 my-4 my-lg-0 bg-light row searchbar">
                                          <input class="form-control bg-transparent border-0 col" type="search" placeholder="Search" aria-label="Search">
                                          <button class="btn bg-transparent my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                              </form>
                    </div>
                    
                    <div class="row container mx-auto" id="relevantJobs">
                        <script>
                              jobCard(jobList,"relevantJobs",6,6)
                              console.log(jobList)
                              $( "input[type=checkbox]" ).on( "click", function() {
                                    countCheckedJobs();
                              });
                        </script> 
                        

                  </div>

              </div>
        </div>
        
      </div>
      </div>

      <div w3-include-html="/templates/components/fixed_menu.php"></div>
      <div w3-include-html="/templates/components/footer.php"></div>
      <script>
            includeHTML();

      </script>
</body>

</html>