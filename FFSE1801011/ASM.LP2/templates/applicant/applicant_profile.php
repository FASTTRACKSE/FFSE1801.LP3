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
                            
                              $("#logo1").append(
                                    `<img src="`+apl1.ava+`" alt="Avatar" class="img-thumbnail">`
                              )
                        </script>
                        
                  </div>
                  <div class="col-md-8 pl-3">
                        <a href="#">
                              <h3 id="applicantName">
                                    <script>
                                          $("#applicantName").append(apl1.name)
                                    </script>
                              </h3>
                        </a>
                        <p id="applicantDes">
                                    <script>
                                          $("#applicantDes").append(apl1.aboutme)
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
            
            <div class="row bg-light py-3 pl-2" id="myScrollSpy">
                  <nav class="navbar navbar-expand-lg col-12 px-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                      <a class="nav-link px-2 active" href="#section1">Thông tin ứng viên</a>  
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section2">Công việc - Học vấn</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section3">Kỹ năng - Kinh nghiệm</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section4">Chứng chỉ - Giải thưởng</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section5">Các công việc đang theo dõi</a>
                                                </li>
                                                <li class="nav-item">
                                                      <a class="nav-link px-2" href="#section6">Các sự kiện đang theo dõi</a>
                                                </li>
                                    </ul>
                        </div>
                        
                  </nav>
            </div>
            <div class="row container--background--light py-5 px-3">
                    
                    <div class="col-md-12">
                          <div class="container__scroll" data-spy="scroll" data-target="#myScrollSpy" data-offset="1">
  
                                <div id="section1" class="container__scroll__info">
                                      <h4 class="pb-4">Thông tin ứng viên</h4><br>
                                      <script>
                                                applicantInfo(apl1,"section1")
                                          </script>
                                </div>
                                <div id="section2" class="container__scroll__info">
                                      <h4 class="pb-4">Công việc - Học vấn</h4>
                                      <ul>
                                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa error laborum nisi exercitationem maxime reiciendis doloribus necessitatibus in assumenda asperiores?</li>
                                            <li>Blanditiis sapiente possimus totam reiciendis, eius beatae, culpa officiis assumenda sint ad at dignissimos ex inventore excepturi, facilis iste provident.</li>
                                            <li>Qui commodi aliquam debitis sit. Placeat molestias dolorem pariatur suscipit ab, modi repellat architecto aliquid mollitia fugit facilis, dolor nesciunt.</li>
                                            <li>Molestiae pariatur veniam libero similique. Suscipit, inventore dicta. Quos cupiditate quidem minima laborum laudantium veritatis ad sit, mollitia culpa possimus.</li>
                                            <li>Voluptatum necessitatibus, praesentium laborum, quam hic nisi ullam iure debitis placeat beatae, id blanditiis dicta impedit exercitationem eaque sint architecto!</li>
                                            <li>Voluptas doloremque repudiandae tempore aliquam commodi illo. Adipisci possimus, exercitationem, corrupti ullam velit, quibusdam id doloribus magni veniam tempora eius!</li>
                                            <li>Debitis laborum fugiat adipisci perspiciatis reiciendis voluptates voluptate molestias maiores magnam accusantium quam hic similique ducimus, nostrum, repudiandae eum totam!</li>
                                            <li>Voluptates quisquam voluptatum, cum quidem impedit aperiam deleniti ex quaerat doloremque nobis nostrum quia dicta explicabo quis laborum aliquid adipisci.</li>
                                            <li>Distinctio minus officiis iste quo explicabo reiciendis blanditiis, dolorum commodi deleniti ullam vero pariatur quae eaque nihil suscipit laudantium ipsam!</li>
                                            <li>Vero odit nam dolores voluptate eligendi labore perferendis, fugiat possimus harum ipsum aliquam quos? Totam repudiandae pariatur dolores optio qui?</li>
                                      </ul>
                                </div>
                                <div id="section3" class="container__scroll__info mt-5">
                                      <h4 class="pb-4">Kỹ năng - Kinh nghiệm</h4>
                                      <ul>
                                          <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa error laborum nisi exercitationem maxime reiciendis doloribus necessitatibus in assumenda asperiores?</li>
                                          <li>Blanditiis sapiente possimus totam reiciendis, eius beatae, culpa officiis assumenda sint ad at dignissimos ex inventore excepturi, facilis iste provident.</li>
                                          <li>Qui commodi aliquam debitis sit. Placeat molestias dolorem pariatur suscipit ab, modi repellat architecto aliquid mollitia fugit facilis, dolor nesciunt.</li>
                                          <li>Molestiae pariatur veniam libero similique. Suscipit, inventore dicta. Quos cupiditate quidem minima laborum laudantium veritatis ad sit, mollitia culpa possimus.</li>
                                          <li>Voluptatum necessitatibus, praesentium laborum, quam hic nisi ullam iure debitis placeat beatae, id blanditiis dicta impedit exercitationem eaque sint architecto!</li>
                                          <li>Voluptas doloremque repudiandae tempore aliquam commodi illo. Adipisci possimus, exercitationem, corrupti ullam velit, quibusdam id doloribus magni veniam tempora eius!</li>
                                          <li>Debitis laborum fugiat adipisci perspiciatis reiciendis voluptates voluptate molestias maiores magnam accusantium quam hic similique ducimus, nostrum, repudiandae eum totam!</li>
                                          <li>Voluptates quisquam voluptatum, cum quidem impedit aperiam deleniti ex quaerat doloremque nobis nostrum quia dicta explicabo quis laborum aliquid adipisci.</li>
                                          <li>Distinctio minus officiis iste quo explicabo reiciendis blanditiis, dolorum commodi deleniti ullam vero pariatur quae eaque nihil suscipit laudantium ipsam!</li>
                                          <li>Vero odit nam dolores voluptate eligendi labore perferendis, fugiat possimus harum ipsum aliquam quos? Totam repudiandae pariatur dolores optio qui?</li>
                                    </ul>
                                </div>
                                <div id="section4" class="container__scroll__info mt-5">
                                      <h4 class="pb-4">Chứng chỉ - Giải thưởng</h4>
                                      <div class="media w-50 pb-4">
                                                <img class="mr-3 w-25" src="/assets/images/icons/medal1.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                  <h5 class="mt-0">Media heading</h5>
                                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                    </div>
                                    <div class="media w-50 pb-4">
                                                <img class="mr-3 w-25" src="/assets/images/icons/medal2.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                  <h5 class="mt-0">Media heading</h5>
                                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                    </div>
                                    <div class="media w-50 pb-4">
                                                <img class="mr-3 w-25" src="/assets/images/icons/medal3.png" alt="Generic placeholder image">
                                                <div class="media-body">
                                                  <h5 class="mt-0">Media heading</h5>
                                                  Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                                </div>
                                    </div>
                                </div>
                                <div id="section5" class="container__scroll__info mt-5">
                                      <h4 class="pb-4">Các công việc đang theo dõi</h4>
                                      <div id="hotJobRow">
                                                <script>
                                                      jobCard(getFollowedJobs(),"hotJobRow",6,6)
                                                          $( "input.job__follow__check[type=checkbox]" ).on( "click", function() {
                                                                countCheckedJobs();
                                                          });
                                              </script>
                                          </div>
                                </div>
                                <div id="section6" class="container__scroll__info mt-5">
                                      <h4 class="pb-4">Các sự kiện đang theo dõi</h4>
                                      <div class="row event__row" id="hotEventRow" >
                  
                                                <script>
                                                      eventCard(getFollowedEvents(),"hotEventRow",5,5)
                                                            $( "input.event__follow__check[type=checkbox]" ).on( "click", function() {
                                                                  countCheckedEvents();
                                                            });
                                                            $( ".placeholder" ).remove();
                                                  </script>                                    
                                            </div>
                                </div>
  
                          </div>
                    </div>
              </div>        
              
      </div>

      <?php require_once('/templates/components/footer.php')?>
      <?php require_once("/templates/components/fixed_menu.php")?>
</body>

</html>