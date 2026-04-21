

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>Cardic Instruments </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
    
    
    
        <style>
.vertical-line {
    display: inline-block;
    height: 25px;
    width: 1px;
    background-color: gray;
    vertical-align: middle;
    margin-top: 5px;
    margin-left: 20px;
    margin-right: -13px;
    
}
/* Add these styles to your CSS */
.instrument-img {
    position: absolute;
    top: 45%;
    left: 57%;
    bottom:53%;
    transform: translate(-50%, -50%);
    /*width: 100%;*/
    height:90%;
    max-width: 400px;
    z-index: 1;
    border-radius: 20px;
    transition: left 1.8s ease; 
    object-fit: inherit;
}

.border-image {
    
    border-radius: 20px;
    
    width: 100%;
}

.instrument-img:hover {
    left: 35%; /* Adjust the position on hover */
}


.footer-sevtion {
        display: flex;
        justify-content: center;
        border-left: 1px solid #FFFFFF;
        height: 150px;
        color: white;
    }

@media screen and (max-width: 767px) {
    .footer-sevtion {
        justify-content: left;
        text-align: left;
    }
}



    

</style>



</head>
<body>


<style>
    .card {
 width: 250px;
 height: 315px;
 background: #FAFAFA;
 padding: 1.1rem 1.5rem;
 transition: box-shadow .3s ease, transform .2s ease;
}

.card-info {
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 transition: transform .2s ease, opacity .2s ease;
}

/*Image*/
.card-avatar {
 --size: 150px;
 background: linear-gradient(to top, #f1e1c1 0%, #fcbc97 100%);
 width: var(--size);
 height: var(--size);
 
 transition: transform .2s ease;
 
}


.card-social {
    transform: translateY(10%); /* Smaller push to start */
    display: flex;
    justify-content: space-around;
    width: 100%;
    opacity: 0;
    transition: transform .2s ease, opacity .2s ease;
}


.card-social__item {
 list-style: none;
}



/*Text*/
.card-title {
 color: #333;
 font-size: 1em;
 font-weight: 600;
 line-height: 2rem;
}

.card-subtitle {
 color: #859ba8;
 font-size: 0.8em;
 margin-top:-10px;
}

/*Hover*/
.card:hover {
    box-shadow: 0 8px 40px rgba(245, 130, 31, 0.2);
}


.card:hover .card-info {
 transform: translateY(-5%);
}

.card:hover .card-social {
    transform: translateY(0%);
    opacity: 1;
}


.card-social__item svg:hover {
 fill: #232323;
 transform: scale(1.1);
}

.card-avatar:hover {
 transform: scale(1.1);
}
</style>
<!--//header start -->
  <header>
        <div class="container-fluid">
            <div class="header-top row">
                <!--<div class="col-sm-6 col-md-7 offset-md-2 form-box">
        <form class="form-inline" action="{{ route('search') }}" method="post">
          {{ csrf_field() }}
          <input style="border-radius: 0" type="text" class="form-control mb-2 mr-sm-2" id="search" name="search" placeholder="Product name..">
          <button style="border-radius: 0;padding: 5px;margin-left: -8px" type="submit" class="btn btn-primary mb-2"><i class="fa fa-search"></i></button>
        </form>
      </div>-->
                <div class="col-sm-6 col-md-7 offset-md-2 form-box">

                </div>
                <div class="col-sm-6 col-md-2 ">
                    <div class="top-social-icon">
                        <a href="https://www.facebook.com/pg/Cardic-Instruments-2048579925441999/about/?ref=page_internal"
                            target="_blank"><i class="fa fa-facebook-f fa-social fb"></i></a>
                        <a href="https://www.instagram.com/cardicinstruments/" target="_blank"><i
                                class="fa fa-instagram fa-social insta"></i></a>
                        <a href="https://www.linkedin.com/company/cardic-instruments/about/" target="_blank"><i
                                class="fa fa-linkedin fa-social linkedin"></i> </a>

                        <!--<a class="float-right" style="text-decoration: none;" href="{{ route('cart') }}">-->
                        <!--    <p><i class="fa fa-shopping-cart"></i> </p>-->
                        <!--</a>-->

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-center" style="padding-top:20px; padding-bottom: 20px;">
                    <a href="/"><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" width="180"
                            height="100"></a>
                </div>
            </div>

        </div>
        <div class="container">
          
        </div>
    </header>
    <!-- header ends -->

<!--header ends -->


<div class="col-md-12">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d841.1715853081237!2d74.5379477696442!3d32.507811529339264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391eea509e215ba3%3A0xfb59dda454550ba9!2sCardic%20Instruments!5e0!3m2!1sen!2s!4v1705565727297!5m2!1sen!2s" width="100%"  height="350px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

<div class="container-fluid">
  <div class="container">
 
    <div class="row justify-content-center">
    <div class="col-md-12 ">
        <h1 class="space-up">HEAD OFFICE</h1>
        <div style="width:150px;border-bottom:1px solid #DD0B2F;margin-top:15px; line-height: 24px;"></div>
        <br>
            <p>
              <b style="color:gray;">Cardic Instruments</b><br>
                <span style="color:gray;">P.O.Box : 147, Nishat Park, <br>
                Opposite: Sialkot Chamber Of Commerce & Indutry, Sialkot - 51310, Pakistan</span><br><br>
                            <b>Tel:</b>&nbsp;<span style="color:gray;">   0092 52 426 7708 </span><br><br>
                            <b>Fex:</b>&nbsp;<span style="color:gray;">   0092 52 427 2688</span><br><br>
                            <b>Email:</b>&nbsp;<span style="color:gray;">  info@cardic.com.pk</span>
            </p>
      </div>
    
<div class="container row d-flex align-items-center justify-content-center ">
<div class="col-md-4 space-bottom mt-5">
    
        <div class="card">
    <div class="card-info">
        <div class="card-avatar" style="background-image: url('{{asset('assets/images/download.jpeg')}}');"></div>
        <div class="card-title ">M.AFZAL CHOUDHRY</div>
        <div class="card-subtitle pb-3">Managing Director</div>
        <div class="card-subtitle">
        <p><b class="text-dark">PHONE:</b> 0092 300-9617546</p>
        <p><b class="text-dark">EMAIL:</b> choudhry@cardic.com.pk</p>
        
        </div>
        
    </div>
</div>
    
</div>

<div class="col-md-4 space-bottom mt-5">
    
        <div class="card">
    <div class="card-info">
        <div class="card-avatar" style="background-image: url('{{asset('assets/images/download.jpeg')}}');"></div>
        <div class="card-title ">USMAN CHAUDHRY</div>
        <div class="card-subtitle pb-3">Sales Director</div>
        <div class="card-subtitle">
        <p><b class="text-dark">PHONE:</b>0092 333-6117118 </p>
        <p><b class="text-dark">EMAIL:</b>usman@cardic.com.pk</p>
        
        </div>
        
    </div>
</div>
    
</div>

<div class="col-md-4 space-bottom mt-5">
    
        <div class="card">
    <div class="card-info">
        <div class="card-avatar" style="background-image: url('{{asset('assets/images/download.jpeg')}}');"></div>
        <div class="card-title ">KAMRAN SALEEM</div>
        <div class="card-subtitle pb-3">Import/Export Manager</div>
        <div class="card-subtitle">
        <p><b class="text-dark">PHONE:</b> 0092 302-5203121</p>
        <p><b class="text-dark">EMAIL:</b> kamran@cardic.com.pk</p>
        
        </div>
        
    </div>
</div>
    
</div>
</div>




    
      

  </div>
</div>
</div>


     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    


    @yield('SpecificScripts')

    <!-- used for search button in header-->
    <script type="text/javascript">
        $(document).ready(function() {

            $(".fa-search").click(function() {
                $(".togglesearch").toggle();
                $("input[type='text']").focus();
            });

        });
    </script>
</body>

</html>