<!DOCTYPE html>
<html>
  <head>
    <style>
      .heading {
        font-size: 20px;
        margin-right: 25px;
      }

      .fa {
        font-size: 25px;
      }

      .checked {
        color: orange;
      }

      /* Three column layout */
      .col-2 {
        float: left;
        width: 15%;
        margin-top: 10px;
      }

      .col-8 {
        margin-top: 10px;
        float: left;
        width: 70%;
      }

      /* Place text to the right */
      .right {
        text-align: right;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* The bar container */
      .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
      }

      /* Individual bars */
      .bar-5 {
        width: 60%;
        height: 18px;
        background-color: #ff9800;
      }
      .bar-4 {
        width: 30%;
        height: 18px;
        background-color: #ff9800;
      }
      .bar-3 {
        width: 10%;
        height: 18px;
        background-color: #ff9800;
      }
      .bar-2 {
        width: 4%;
        height: 18px;
        background-color: #ff9800;
      }
      .bar-1 {
        width: 15%;
        height: 18px;
        background-color: #ff9800;
      }

      div.media-body {
        font-size: 0.9rem;
      }

      /* Responsive layout - make the columns stack on top of each other instead of next to each other */
      @media (max-width: 400px) {
        .side,
        .middle {
          width: 100%;
        }
        .right {
          display: none;
        }
      }
    </style>
  </head>

  <body>
    <span class="heading">User Rating</span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span> <span class="fa fa-star"></span>
    <p>4.1 average based on 254 reviews.</p>
    <hr style="border:3px solid #f1f1f1" />

    <div class="container">
      <div class="row">
        <div class="col-2"><div>5 star</div></div>
        <div class="col-8">
          <div class="bar-container"><div class="bar-5"></div></div>
        </div>
        <div class="col-2"><div>150</div></div>
        <div class="col-2"><div>4 star</div></div>
        <div class="col-8">
          <div class="bar-container"><div class="bar-4"></div></div>
        </div>
        <div class="col-2"><div>63</div></div>
        <div class="col-2"><div>3 star</div></div>
        <div class="col-8">
          <div class="bar-container"><div class="bar-3"></div></div>
        </div>
        <div class="col-2"><div>15</div></div>
        <div class="col-2"><div>2 star</div></div>
        <div class="col-8">
          <div class="bar-container"><div class="bar-2"></div></div>
        </div>
        <div class="col-2"><div>6</div></div>
        <div class="col-2"><div>1 star</div></div>
        <div class="col-8">
          <div class="bar-container"><div class="bar-1"></div></div>
        </div>
        <div class="col-2"><div>20</div></div>
      </div>
    </div>

    <ul class="list-unstyled py-5">
      <li class="media  w-75">
        <img
          class="mr-3 w-25 rounded-circle"
          src="/assets/images/reviewers/1.jpg"
          alt="Generic placeholder image"
        />
        <div class="media-body">
          <h5 class="mt-0 mb-1">List-based media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
          scelerisque ante sollicitudin. Cras purus odio, vestibulum in
          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
          vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </li>
      <li class="media my-4 w-75">
        <img
          class="mr-3 w-25 rounded-circle"
          src="/assets/images/reviewers/2.jpg"
          alt="Generic placeholder image"
        />
        <div class="media-body">
          <h5 class="mt-0 mb-1">List-based media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
          scelerisque ante sollicitudin. Cras purus odio, vestibulum in
          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
          vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </li>
      <li class="media w-75">
        <img
          class="mr-3 w-25 rounded-circle"
          src="/assets/images/reviewers/3.jpg"
          alt="Generic placeholder image"
        />
        <div class="media-body">
          <h5 class="mt-0 mb-1">List-based media object</h5>
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
          scelerisque ante sollicitudin. Cras purus odio, vestibulum in
          vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
          vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
      </li>
    </ul>
  </body>
</html>
