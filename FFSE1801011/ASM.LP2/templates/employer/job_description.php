<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="/assets/css/pure.css" />
    <link rel="stylesheet" href="/assets/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lobster"
      rel="stylesheet"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXbkXZX8Sl5hJBaUH9Z3SepsluuXv-PtA&callback=myMap"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/push_data.js"></script>
    <script src="/assets/js/tagsinput.js"></script>

    <style>
      body {
        background-image: url("/assets/images/backgrounds/photo2.jpg");
        background-position: center center;
        background-size: auto;
      }
    </style>
  </head>

  <body>
    <div w3-include-html="/templates/components/navigation.php"></div>
    <div
      class="d-none d-md-flex justify-content-around p-3 employer__navbar container--background--light"
    >
      <img
        src="/assets/images/employer/001/logo.png"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/002/logo.jpeg"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/003/logo.png"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/004/logo.jpg"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/001/logo.png"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/002/logo.jpeg"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
      <img
        src="/assets/images/employer/003/logo.png"
        alt="..."
        class="logo bg-light img-thumbnail"
      />
    </div>
    <div class="container">
      <div class="row bg-light py-3 pl-2" id="myScrollSpy">
        <div id="title" class="w-100">
          <h3 id="title1" class="mb-3">
            Chuyên viên Marketing Online tại Đà Nẵng
          </h3>
          <div id="title2" class="d-flex justify-content-around w-75 mx-auto">
            <p>Lượt xem: <span class="badge badge-primary">50</span></p>
            <button class="btn btn__sn bg-primary px-2 h-75" type="button">
              <a href="https://www.facebook.com/LeBonjourJOB/"
                ><i class="fas fa-paper-plane"></i> Nộp hồ sơ</a
              >
            </button>
            <button class="btn btn__sn bg-primary px-2 h-75" type="button">
              <a href="https://www.facebook.com/LeBonjourJOB/"
                ><i class="fas fa-bookmark"></i> Lưu</a
              >
            </button>

            <div class="dropdown ">
              <button
                class="btn btn-secondary dropdown-toggle h-75 pt-1"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Chia sẻ
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div
                  class="dropdown-item fb-share-button "
                  data-href="https://lebonjourjob.netlify.com"
                  data-layout="button_count"
                  data-size="small"
                  data-mobile-iframe="true"
                >
                  <a
                    target="_blank"
                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Flebonjourjob.netlify.com%2F&amp;src=sdkpreparse"
                    class="fb-xfbml-parse-ignore btn btn__sn btn__sn--sm btn__sn--fb px-1"
                  >
                    <i class="fab fa-facebook"></i> Share
                  </a>
                </div>
                <div class="dropdown-item w-100">
                  <a
                    class="twitter-share-button btn btn__sn btn__sn--sm btn__sn--twitter px-1"
                    href="https://twitter.com/intent/tweet?text=Hello%20world"
                    data-size="large"
                  >
                    <i class="fab fa-twitter"></i> Tweet</a
                  >
                </div>
                <div class="dropdown-item w-100 pt-2">
                  <div
                    class="g-plus my-2"
                    style="width: 100px;"
                    data-action="share"
                    data-href="https://lebonjourjob.netlify.com"
                  ></div>
                  <script type="text/javascript">
                    (function() {
                      var po = document.createElement("script");
                      po.type = "text/javascript";
                      po.async = true;
                      po.src = "https://apis.google.com/js/platform.js";
                      var s = document.getElementsByTagName("script")[0];
                      s.parentNode.insertBefore(po, s);
                    })();
                  </script>
                </div>

                <div class="dropdown-item w-100 linkedin">
                  <script
                    src="//platform.linkedin.com/in.js"
                    type="text/javascript"
                  >
                    lang: en_US
                  </script>
                  <script
                    type="IN/Share"
                    data-url="https://lebonjourjob.netlify.com"
                  ></script>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="col-12 px-0 navbar navbar-light">
          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
              <a class="nav-link px-2 active" href="#section1"
                >Mô tả công việc</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link px-2" href="#section2">Yêu cầu công việc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2" href="#section3">Quyền lợi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2" href="#section4">Yêu cầu hồ sơ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2" href="#section5">Cách thức ứng tuyển</a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2" href="#section6"
                >Đánh giá từ cộng đồng</a
              >
            </li>
          </ul>
        </nav>
      </div>
      <div class="row container--background--light py-5 px-3">
        <div class="col-md-9">
          <div
            class="container__scroll pr-5"
            data-spy="scroll"
            data-target="#myScrollSpy"
            data-offset="1"
          >
            <div id="section1" class="container__scroll__info ">
              <h5>Mô tả công việc</h5>
              <ul>
                <li>
                  Hỗ trợ cho hệ thống bán hàng, lên các chương trình hỗ trợ
                  thương mại (HTTM) ngắn hạn và dài hạn nhằm thúc đẩy tiêu thụ ở
                  các kênh của ngành hàng/ khu vực phụ trách.
                </li>
                <li>
                  Hỗ trợ các Trưởng ban HTTM trong xây dựng các chương trình
                  chiến thuật theo ngành hàng.
                </li>
                <li>
                  Lên kế họach phân bổ chỉ tiêu khuyến mãi cho các từng nhà phân
                  phối (NPP) để đảm bảo tính hiệu quả của các chương trình
                  khuyến mãi cho điểm lẻ.
                </li>
                <li>
                  Tạo ra các mẫu biểu để kiểm sóat và đánh giá hiệu quả việc
                  thực hiện các chương trình khuyến mãi cho các điểm bán sỉ và
                  lẻ.
                </li>
              </ul>
            </div>
            <div id="section2" class="container__scroll__info">
              <h5>Yêu cầu công việc</h5>
              <h6 class="pl-3">Học vấn & Chuyên ngành</h6>
              <ul>
                <li>Tốt nghiệp đại học chính quy trở lên</li>
                <li>
                  Chuyên ngành: Kinh tế, Marketing, Quản trị kinh doanh, Ngoại
                  thương
                </li>
                <li>
                  KINH NGHIỆM: Có từ 02 - 04 năm kinh nghiệm trong lĩnh vực Hỗ
                  Trợ Thương Mại (HTTM)ngành hàng tiêu dùng nhanh tại các công
                  ty có qui mô lớn
                </li>
              </ul>
              <h6 class="pl-3">Kiến thức chuyên môn & Các kỹ năng:</h6>
              <ul>
                <li>Kiến thức tốt về Kinh Doanh, MKT và HTTM</li>
                <li>Hiểu biết về tài chính</li>
                <li>Có hiểu biết về kênh phân phối/ngành hàng</li>
                <li>Kỹ năng giao tiếp</li>
                <li>Kỹ năng đàm phán</li>
                <li>Kỹ năng ra quyết định</li>
                <li>Kỹ năng giải quyết vấn đề</li>
              </ul>
              <h6 class="pl-3">Các yêu cầu khác</h6>
              <ul>
                <li>Thành thạo MS Office</li>
                <li>
                  Có hiểu biết về Hệ thống phầm mềm quản lý: SAP/Solomon/Oracle.
                </li>
                <li>Thành thạo Anh ngữ</li>
                <li>Trung thực, có tinh thần đồng đội</li>
              </ul>
            </div>
            <div id="section3" class="container__scroll__info">
              <h5>Quyền lợi</h5>
              <ul>
                <li>Lương thưởng hấp dẫn</li>
                <li>
                  Được hưởng lương, trợ cấp, thưởng theo quy định pháp luật và
                  quy chế tài chính của công ty
                </li>
                <li>Môi trường làm việc chuyên nghiệp năng động</li>
              </ul>
            </div>
            <div id="section4" class="container__scroll__info">
              <h5>Yêu cầu hồ sơ</h5>
              <ul>
                <li>Sơ yếu lí lịch (không quá 6 tháng)</li>
                <li>Đơn ứng tuyển (ghi rõ vị trí dự tuyển)</li>
                <li>
                  Bản sao có công chứng các văn bằng, chứng chỉ, CMND, giấy khai
                  sinh
                </li>
                <li>3 ảnh 4x6</li>
              </ul>
            </div>
            <div id="section5" class="container__scroll__info">
              <h5>Cách thức ứng tuyển</h5>
              <p>
                Thí sinh có thể nộp hồ sơ tại văn phòng công ty hoặc nộp online.
                Trong đơn ứng tuyển vui lòng ghi rõ: "Biết đến tin tuyển dụng
                thông qua trang lebonjourjob.com để được ưu tiên.
              </p>
            </div>
            <div id="section6" class="container__scroll__info">
              <h5>Đánh giá từ cộng đồng</h5>
              <div w3-include-html="/templates/components/review.php"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="ptext ptext--small pt-0 mx-auto">
            <p class="border border--small trans d-md-inline">
              Đang tuyển dụng
            </p>
          </div>
          <div class="sidebar__box my-4" id="vipEmployers">
            <script>
              $("#vipEmployers").empty();
              if ($(window).width() > 576) {
                var hirings = 4;
              } else {
                var hirings = 2;
              }

              $("#vipEmployers").append(
                `
                                                        <div class='col-12 mt-0'>
                                                        <div class='card employer__vip'>
                                                              <img class='card-img-top w-75 h-25 align-self-center' src='` +
                  emp1.logo +
                  `'
                                                                    alt=' ` +
                  emp1.name +
                  ` logo'>
                                                              <div class='card-body py-2'>
                                                                    <a href='/ffse1801011/employer/employer_profile.php'>
                                                                          <h5 class='card-title text-center'>` +
                  emp1.name +
                  `</h5>
                                                                    </a>
                                                                    <p class='card-text text-center'><i class='fas fa-map-marker-alt'></i> ` +
                  emp1.city +
                  `</p>
                                                                    <h6 class="d-sm-none d-md-block">Công việc đang tuyển:</h6>
                                                                    <ul class='d-sm-none d-md-block list-group list-group-flush'>` +
                  hiring(emp1.hiring, hirings) +
                  `
                                                                    </ul>
                                                              </div>
                                                              <div class='card-footer py-1'>
                                                                    <small class='text-muted'>Last updated 3 mins ago</small>
                                                              </div>
                                                        </div>
                                                  </div>
                                                        `
              );
            </script>
          </div>
          <h5>Địa điểm Nhà tuyển dụng:</h5>
          <div
            class="mt-3"
            id="googleMap"
            style="width:100%;height:300px;"
          ></div>
        </div>
      </div>
    </div>

    <div class="container">
      <div
        class="form-group row mt-5 p-4 text-light bg-dark rounded employer-review"
      >
        <div class="col-md-2">
          <label for="exampleFormControlTextarea1"
            ><h4>Đánh giá của bạn:</h4></label
          >
        </div>
        <div class="col-md-7">
          <div class="form-group" id="rating-ability-wrapper">
            <label class="control-label" for="rating">
              <span class="field-label-header"
                >Bạn cảm nhận thế nào về công việc này? Hãy chia sẻ cùng chúng
                tôi:</span
              ><br />
              <span class="field-label-info"></span>
              <input
                type="hidden"
                id="selected_rating"
                name="selected_rating"
                value=""
                required="required"
              />
            </label>
            <h2 class="bold rating-header" style="">
              <span class="selected-rating">0</span><small> / 5</small>
            </h2>
            <button
              type="button"
              class="btnrating btn btn-default btn-lg"
              data-attr="1"
              id="rating-star-1"
            >
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button
              type="button"
              class="btnrating btn btn-default btn-lg"
              data-attr="2"
              id="rating-star-2"
            >
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button
              type="button"
              class="btnrating btn btn-default btn-lg"
              data-attr="3"
              id="rating-star-3"
            >
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button
              type="button"
              class="btnrating btn btn-default btn-lg"
              data-attr="4"
              id="rating-star-4"
            >
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>
            <button
              type="button"
              class="btnrating btn btn-default btn-lg"
              data-attr="5"
              id="rating-star-5"
            >
              <i class="fa fa-star" aria-hidden="true"></i>
            </button>
          </div>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
          <button class="btn btn-primary mt-3 px-5">Gửi</button>
        </div>
      </div>

      <br /><br />
    </div>
    <div class="container bg-white mb-4 card w-100">
      <div class="card-header"><h4>Công việc từ cùng NTD</h4></div>
      <div class="card-body related_jobs">
        <div class="row" id="relatedJobs">
          <input
            class="col-12"
            type="text"
            value="danang, marketing, online, chuyen vien"
            data-role="tagsinput"
            placeholder="Add tags"
          />
          <script>
            jobCard(job1, "relatedJobs", 6, 3);
          </script>
        </div>
      </div>
      <div class="card-footer d-flex">
        <p class="d-md-inline d-sm-block mr-auto">Còn 125 công việc tương tự</p>
        <div class="d-flex">
          <a
            href="/templates/shared/main_job.php"
            class="btn btn-primary mt-3 ml-auto see-more"
            >Xem tất cả <i class="fas fa-angle-double-right"></i
          ></a>
        </div>
      </div>
    </div>
    <?php require_once('/templates/components/footer.php')?>
    <?php require_once('/templates/components/fixed_menu.php')?>
  </body>
</html>
