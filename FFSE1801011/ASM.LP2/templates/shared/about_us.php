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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXbkXZX8Sl5hJBaUH9Z3SepsluuXv-PtA&callback=myMap"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/assets/js/push_data.js"></script>

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
    <div class="container">
      <div class="row container--background--light py-4 mt-3 rounded-top">
        <div class="col-md-2 py-5" id="logo1">
          <img
            src="/assets/images/icons/ftlogo.png"
            alt="Le Bonjour Logo"
            class="img-thumbnail"
          />
        </div>
        <div class="col-md-6 pl-3">
          <a href="#"> <h3 id="employerName">Fast Track SE</h3> </a>
          <p id="employerDes">
            Fast Track SE - Chương trình đào tạo lập trình viên - cam kết việc
            làm 100%. <br />
            <br />Fast Track SE được biết đến là chương trình đào tạo nhanh và
            tập trung vào thực hành dự án, đây là chương trình đào tạo cung cấp
            nguồn lực CNTT chất lượng cao cho Đà Nẵng và cả nước nói chung.
          </p>
        </div>
        <div class="col-md-2">
          <input
            class="event__follow__check"
            id="event5Check"
            type="checkbox"
          />
          <button
            type="button"
            class="btn p-1 my-1 w-100 event__follow__button event5"
          >
            <label for="event5Check" class="btn p-1 m-0 w-100">
              <i class="far fa-star"></i> Follow
            </label>
          </button>
          <div class="dropdown">
            <button
              class="btn btn-secondary p-1 my-1 w-100 dropdown-toggle"
              type="button"
              id="dropdownMenuButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              FB/Messenger
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <div class="dropdown-item d-flex">
                <a href="https://www.facebook.com/LeBonjourJOB/"
                  ><img
                    class="social__icon"
                    src="/assets/images/icons/facebook.png"
                    alt="Facebook"
                /></a>

                <a href="https://www.messenger.com/t/316196982241647"
                  ><img
                    class="social__icon "
                    src="/assets/images/icons/messenger.png"
                    alt="Messenger"
                /></a>
              </div>
            </div>
          </div>
          <a
            href="https://www.facebook.com/LeBonjourJOB/"
            class="btn bg-primary btn__sn p-1 my-1 w-100 "
            type="button"
          >
            <i class="fas fa-globe"></i> Website
          </a>
        </div>
      </div>

      <div class="row container--background--light py-5 px-3">
        <div class="col-md-9 px-5">
          <h5>Giới thiệu Fast Track<br /><br /></h5>
          <h6>Fast Track SE là gì?<br /></h6>
          Fast Tarck SE là chương trình đào tạo lập trình viên liên kết với Đại
          học FPT, Công ty Phần mềm FPT Software và Công ty Cổ phần Đào tạo Công
          nghệ Hiệu quả.<br /><br />

          Với mục tiêu đào tạo trong thời gian ngắn cùng với việc đảm bảo việc
          làm tại FPT Software sau khi học, Fast Track SE đang là chương trình
          được nhiều bạn trẻ đón nhận và ủng hộ.<br /><br />

          <h6>
            Fast Track SE có những gì khác biệt so với chương trình đào tạo
            thông thường?<br />
          </h6>
          Sự khác biệt đó chính là đào tạo theo hình thức liên kết chặt chẽ với
          doanh nghiệp mà đối tác chính là công ty phần mềm FPT Software. Khung
          chương trình đào tạo theo yêu cầu thực tế của doanh nghiệp, chú trọng
          đảm bảo tính hiệu quả và chất lượng nguồn nhân lực đầu ra:<br />

          Tập trung vào kỹ năng thực hành cho sinh viên cũng như các kỹ năng mềm
          cần thiết khác đảm bảo cho sự phát triển sau này.<br />
          Ngoài những môn học theo chương trình đào tạo, học viên có cơ hội được
          tham gia học các khóa học Tiếng Anh miễn phí cũng như tham gia các
          hoạt động văn hóa, thể chất…để tăng thêm kỹ năng cộng đồng trong tập
          thể.<br />
          Hơn 3/4 thời gian học tập trung vào thực hành và học viên có từ 4 đến
          8 tháng thực tập tại FPT Software (OJT). Tại đây sinh viên được huấn
          luyện thực tế về nghề nghiệp tương lai, tham gia vào các dự án thật
          (real project) và có thể được trả lương. Đảm bảo sinh viên sau khi kết
          thúc khóa học có thể làm việc ngay theo yêu cầu tuyển dụng của doanh
          nghiệp.<br /><br />

          <h6>Cơ hội nghề nghiệp<br /></h6>
          Không chỉ làm việc ngay sau khi kết thúc khóa học mà học viên có
          nguyện vọng phát triển nghề nghiệp, học vẫn có thể theo học chương
          trình liên kết để lấy bằng đại học CNTT của đại học FPT và đại học
          trực tuyến Funix.<br /><br />

          <h5>
            Đặt nền móng cho sự phát triển NGHỀ NGHIỆP – VIỆC LÀM – HỌC VẤN
            trong tương lai!<br />
          </h5>
        </div>

        <div class="col-md-3">
          <div class="mb-4">
            <div>
              <h3 class="text-align-center">Liên hệ tư vấn</h3>
              <ul>
                Đơn vị chủ quản: Công ty Cổ phần Đào tạo Công nghệ Hiệu quả
                <li>
                  Toà nhà FPT, Đường Số 1, KCN An Đồn, An Hải Bắc, Sơn Trà, Đà
                  Nẵng, Việt Nam
                </li>
                <li>0935.79.37.31</li>
                <li>contact@fasttrack.edu.vn</li>
                <li>fb.com/fasttrack.edu.vn/</li>
              </ul>
            </div>
          </div>

          <h5>Địa điểm Nhà tuyển dụng:</h5>
          <div
            class="mt-3"
            id="googleMap"
            style="width:100%;height:300px;"
          ></div>
        </div>
      </div>
      <div
        class="form-group row my-5 p-4 text-light bg-dark rounded employer-review"
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
                >Bạn cảm nhận thế nào về nhà tuyển dụng này? Hãy chia sẻ cùng
                chúng tôi:</span
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
            <div class="row pl-3">
              <h2 class="bold rating-header d-none d-md-block mr-4">
                <span class="selected-rating">0</span><small> / 5</small>
              </h2>
              <button
                type="button"
                class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25"
                data-attr="1"
                id="rating-star-1"
              >
                <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button
                type="button"
                class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25"
                data-attr="2"
                id="rating-star-2"
              >
                <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button
                type="button"
                class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25"
                data-attr="3"
                id="rating-star-3"
              >
                <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button
                type="button"
                class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25"
                data-attr="4"
                id="rating-star-4"
              >
                <i class="fa fa-star" aria-hidden="true"></i>
              </button>
              <button
                type="button"
                class="btnrating btn btn-default mr-2 btn-md-lg btn-sm h-25"
                data-attr="5"
                id="rating-star-5"
              >
                <i class="fa fa-star" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            rows="3"
          ></textarea>
          <button class="btn btn-primary mt-3 px-5">Gửi</button>
        </div>
      </div>
    </div>

      <?php require_once('/templates/components/footer.php')?>
      <?php require_once('/templates/components/fixed_menu.php')?>

  </body>
</html>
