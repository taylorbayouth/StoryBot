<?php
// Start the session
session_start();

include_once(__dir__ . "/incs/commons.class.php");
//$common = new Common;
//echo $common->generateAlphaNumericStr(10);
//print_r($_SESSION["google_oauth_info"]);
?>
<html>
<head>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/custom.js"></script>
<link href='http://fonts.googleapis.com/css?family=Abhaya%20Libre' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/profile.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/112f54d6c9.js" crossorigin="anonymous"></script>
</head>


<body class="profile-page sidebar-collapse">

<?php
include "incs/header.inc.php"
?>


  <div class="page-header header-filter" data-parallax="true" style="background-image:url('https://demos.creative-tim.com/bs3/material-kit/assets/img/examples/city.jpg');"></div>
  <div class="main main-raised">
    <div class="profile-content">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <div class="profile">
              <div class="avatar">
                <img src="https://www.livelingua.com/img/profilesTeachers/103/Guillaume-Deneufbourg-Square_Profile_S.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
              </div>
              <div class="name">
                <h3 class="title">Christian Louboutin</h3>
                <h6>Designer</h6>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
            <div class="follow">
            <button class="btn btn-fab btn-primary btn-round" rel="tooltip" title="" data-original-title="Follow this user">
              <i class="material-icons">add</i></button>
          </div>
          </div>
        </div>
        <div class="description text-center">
          <p>An artist of considerable range, Chet Faker &#x2014; the name taken by Melbourne-raised, Brooklyn-based Nick Murphy &#x2014; writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
        </div>
        
        <div class="tab-content tab-space">
          <div class="tab-pane work active show" id="work">
            <div class="row">
              <div class="col-md-7 ml-auto mr-auto ">
                <h4 class="title">Latest Collections</h4>
                <div class="row collections">
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('http://www.ansa.it/webimages/img_457x/2018/1/9/2b87dfb4328e8a6f1dc643aa69af5fc9.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-warning">Spring 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">Stilleto</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('https://i1.wp.com/blog.kakcho.com/wp-content/uploads/2017/12/xeanz6-l-610x610-jacket-tumblr-armygreenjacket-black-turtleneck-blackturtleneck-bag-blackbag-handbag-denim-jeans-bluejeans-pumps-.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-info">Spring 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">High Heels</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('https://s3-eu-west-2.amazonaws.com/cadandthedandy/wp-content/uploads/2018/05/30130124/bespoke-business-suits-savile-row-3.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-danger">Summer 2016</label>
                        <a href="#pablo">
                          <h2 class="card-title">Flats</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="card card-background" style="background-image: url('http://www.backdownsouth.com/wp-content/uploads/2016/11/sockfancy004.jpg')">
                      <a href="#pablo"></a>
                      <div class="card-body">
                        <label class="badge badge-success">Winter 2015</label>
                        <a href="#pablo">
                          <h2 class="card-title">Men's Sneakers</h2>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane connections" id="studio">
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="http://www.ishootshows.com/wp-content/uploads/2008/07/todd-owyoung-portrait-145238_COB8628-square-600px.jpg">
                        </a>
                        <div class="colored-shadow" style="background-image: url('http://www.ishootshows.com/wp-content/uploads/2008/07/todd-owyoung-portrait-145238_COB8628-square-600px.jpg'); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Anthon Jard</h4>
                        <h6 class="card-category text-muted">Model</h6>

                        <p class="card-description">
                          Don't be scared of the truth because we need to restart the human foundation in truth...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-5 mr-auto ml-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="http://new.kevinrees.com/wp-content/uploads/2016/12/Kevin-Portrait-Square.jpg">
                        </a>
                        <div class="colored-shadow" style="background-image: url('http://new.kevinrees.com/wp-content/uploads/2016/12/Kevin-Portrait-Square.jpg'); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Marc Jacobs</h4>
                        <h6 class="card-category text-muted">Designer</h6>

                        <p class="card-description">
                          Don't be scared of the truth because we need to restart the human foundation in truth...
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU3Nzk2NTA0Njc1ODIwNTQ5/rebbeca-marie-gomez-aka-becky-g-poses-for-a-portrait-at-the-2017-latin-american-music-awards-at-dolby-theatre-on-october-25-2017-in-hollywood-california-photo-by-gabriel-olsen_getty-images-square.jpg">
                        </a>
                        <div class="colored-shadow" style="background-image: url('https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU3Nzk2NTA0Njc1ODIwNTQ5/rebbeca-marie-gomez-aka-becky-g-poses-for-a-portrait-at-the-2017-latin-american-music-awards-at-dolby-theatre-on-october-25-2017-in-hollywood-california-photo-by-gabriel-olsen_getty-images-square.jpg'); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">Kendall Jenner</h4>
                        <h6 class="card-category text-muted">Model</h6>

                        <p class="card-description">
                          I love you like Kanye loves Kanye. Don't be scared of the truth.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-profile card-plain">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="card-header card-header-image">
                        <a href="#pablo">
                          <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_Jm45nkeAjmUPtmaxAKvFEMepzVTBQvDm2Y5MgcIOVcHY4iIR">
                        </a>
                        <div class="colored-shadow" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_Jm45nkeAjmUPtmaxAKvFEMepzVTBQvDm2Y5MgcIOVcHY4iIR'); opacity: 1;"></div></div>
                    </div>
                    <div class="col-md-7">
                      <div class="card-body">
                        <h4 class="card-title">George West</h4>
                        <h6 class="card-category text-muted">Model/DJ</h6>

                        <p class="card-description">
                          I love you like Kanye loves Kanye.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane text-center gallery" id="favorite">
            <div class="row">
              <div class="col-md-3 ml-auto">
                <img src="http://www.globalfashionstreet.com/wp-content/uploads/2018/03/the-different-kinds-of-womens-street-fashion-style-1.jpg" class="rounded">
                <img src="https://smhttp-ssl-33667.nexcesscdn.net/manual/wp-content/uploads/2017/08/street-style-mens-overcoat.jpg" class="rounded">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>



</html>