 <!-- Header-->
 <!-- <header class="bg-dark py-5" id="main-header">
    <div class="container h-100 d-flex align-items-end justify-content-center w-100">
        <div class="text-center text-white w-100">
            <h1 class="display-4 fw-bolder mx-5">About Us</h1>
        </div>
    </div>
</header> -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>    
<link rel='stylesheet' href='https://kit.fontawesome.com/a076d05399.js' >    

<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
            <div class="card-body">
                <h4>Contact Us</h4>
                <i style='font-size:50px;color:black'>Phone no. <a href="#" style='text-decoration: none;color:black;'>984-092-9478</a></i>
                <br>
                <a href="#" style='text-decoration: none;'><span class="bi bi-facebook" style='font-size:50px;color:black;'></span> <i style='font-size:50px;color:black'>Facebook: GBDS</i></a><br>
                <a href="#"style='text-decoration: none;'> <span class="bi bi-messenger" style='font-size:50px;color:black'></span><i style='font-size:50px;color:black'>Messange: GBDS</i></a><br>
                <a href="#"style='text-decoration: none;'> <span class="bi bi-instagram" style='font-size:50px;color:black'></span><i style='font-size:50px;color:black'>Instagram: @GBDS</i></a><br>    
                <a href="#"style='text-decoration: none;'> <span class="bi bi-tiktok" style='font-size:50px;color:black'></span><i style='font-size:50px;color:black'>Tik-Tok: @GBDS</i></a><br>
                <a href="#"style='text-decoration: none;'> <span class='fab fa-google' style='font-size:50px;color:black'></span><i style='font-size:50px;color:black'>G-mail: GBDS@GMAIL.COM</i></a><br>
            </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).scroll(function() { 
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if($(window).scrollTop() === 0) {
           $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        }else{
           $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        } style='font-size:75px;color:black'
    });
    $(function(){
        $(document).trigger('scroll')
    })
</script>