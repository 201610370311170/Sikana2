<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="SIKANA &amp;">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>SIKANA &amp; Sistem Informasi Ibu dan Anak</title>

  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/core-img/ibudananak.png')?>">

  <!-- autocomplete -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/autocomplete.css')?>">


  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo base_url('assets/style2.css')?>">


</head>

<body>
  <!-- Preloader -->
  <div id="preloader">
    <div class="preload-content">
      <div id="dento-load"></div>
    </div>
  </div>

  <?php
    $pegawai = $this->session->userdata('pegawai');
  ?>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <!-- Top Content -->
          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="maps.html" data-toggle="tooltip" data-placement="bottom" title="Jl. Tugu No.1, Kiduldalem, Klojen, Kota Malang, Jawa Timur 65119"><i class="fa fa-map-marker"></i> <span>Kota Malang </span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.sikana@gmail.com"><i class="fa fa-envelope"></i> <span>Email</span></a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top Header End -->

    <!-- Main Header Start -->
    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Classy Menu -->
          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <!-- Logo -->
            <a class="nav-brand" href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/img/core-img/logoo.jpg')?>" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <!-- Nav Start -->
              <div class="classynav">
                <ul id="nav">
                  <li><a href="<?php echo base_url('pegawai/dashboard');?>">Beranda</a></li>
                  <li><a href="<?php echo base_url('pegawai/periksa')?>">Periksa</a></li>
                  <li><a href="<?php echo base_url('pegawai/#')?>">Tutorial</a></li>
                  <li>
                    <a  href="#" role="text" id="dropdownMenuLink" data-toggle="dropdown">
                      <?php echo $pegawai['Nama'];?>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo site_url('pegawai/login/logout')?>">Logout</a>
                    </a>


                    </div>
                  </li>
              </div>
              <!-- Nav End -->
            </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- content -->
  <section class="content">

    <div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/homeee.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">
            <h2 class="title">Periksa</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="breadcumb--con">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="masuk.html"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Periksa</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->
    <!-- ****** About Us Area Start ******* -->
    <section class="dento-about-us-area mt-50 mb-100">
      <div class="container">
        <div class="row">
          <!-- Informasi Periksa -->
          <div class="col-12 col-md-4">
            <div class="periksa-information">
              <p>Periksa Kesehatan dengan menginputkan NIK (Nomor Induk Kependudukan) dari Ibu yang sudah didaftarkan pada Kohort kesehatan.</p>
            </div>
          </div>
            <!-- Contact Form -->
          <div class="col-12 col-md-8">
            <div class="contact-form">
              <!-- Section Heading -->
              <div class="section-heading">
                <h2>Masukkan NIK Ibu</h2>
                  <p id="demo"></p>
                <div class="line"></div>
              </div>






              <!-- Form -->
              <form action="<?php echo base_url('pegawai/periksa/search')?>" method="post" autocomplete="off">
                <div class="row">
                  <div class="col-lg-12 autocomplete">
                    <input type="text" id="myInput" name="NIK_Ibu" class="form-control mb-30" placeholder="NIK Ibu">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn dento-btn">Cari</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>



      </div>
    </section>
  </section>


  <!-- ***** Footer Area Start ***** -->
  <footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(assets/img/bg-img/homeeee.jpg);">
    <!-- Copywrite Area -->
    <div class="container">
        <div class="col-12">
          <div class="copywrite-content">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
          </div>
        </div>
    </div>
  </footer>
  <!-- ***** Footer Area End ***** -->

  <!-- ******* All JS ******* -->
  <!-- jQuery js -->
  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <!-- Popper js -->
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <!-- Bootstrap js -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <!-- All js -->
  <script src="<?php echo base_url('assets/js/dento.bundle.js')?>"></script>
  <!-- Active js -->
  <script src="<?php echo base_url('assets/js/default-assets/active.js')?>"></script>

  <script>

  var jArray = <?php echo json_encode($phpArray); ?>;

   for(var i=0; i<jArray.length; i++){
       alert(jArray[i]);
   }

  document.getElementById("demo").innerHTML = jArray ;

  </script>

  <script>
  function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
            b.innerHTML += arr[i].substr(val.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
            b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
          x[i].parentNode.removeChild(x[i]);
        }
      }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function (e) {
        closeAllLists(e.target);
    });
  }

  /*An array containing all the country names in the world:*/
  var countries = [  <?php

      foreach ($data as $data ): {
        echo '"'.$data['NIK'].'"'.",";
      }
      endforeach;
    ?>
  ];

  /*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
  autocomplete(document.getElementById("myInput"), countries);
  </script>





</body>

</html>
