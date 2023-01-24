<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDS Home</title
    >
    <link rel="apple-touch-icon" sizes="72x72" href="http://127.0.0.1:8000/images/RFS.png">
	<link rel="apple-touch-icon" sizes="32x32" href="http://127.0.0.1:8000/images/RFS1.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://127.0.0.1:8000/images/RFS2.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="mdshome.css">
    <script src="https://kit.fontawesome.com/9c87203289.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--------------=====start of code====----->
    <!-----========top-bar=====-->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <i class="fa-solid fa-hand-holding-heart"></i> &nbsp; No one has Ever Become Poor from Giving!
                </div>
                <div class="col-6">
                    <p style="margin-left:150px;"> Phone: (01) 800 433 633Mail: &nbsp; &nbsp; &nbsp; Info@example.com
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-------======header start========-->
    <header class="sticky">

        <div class="container" id="con1">
            <div class="row">
                <div class="col-5">
                    <a href="#" id="a1">
                        <img src="RFS .png" alt="image not avliable" id="img1">
                    </a> <span class="anime"> <span>DONATE </span> <span> TO</span>
                        <span> MAKE</span><span>CHANGES</span>

                    </span>

                </div>
                <div class="col-7">

                @auth
                    <a href="/donate" class="btn btn-warning" id="a2"><i class="fa fa-heart-o"></i> &nbsp;DONATE</a>
                @else
                <a href="/login" class="btn btn-warning" id="a2"><i class="fa fa-heart-o"></i> &nbsp;DONATE</a>
                @endauth


                </div>

            </div>
        </div>
        <nav class="navigation">

            <div class="container" id="con-3">
                <nav>
                    <a href="/home">Home</a>
                    <a href="/cause">causes</a>
                    <a href="/events">Events</a>
                    <a href="/gallery">gallery</a>
                    <a href="/contact">Contact</a>

                 
                 
                    
                    @guest 
                            @if (Route::has('register'))
                                    <a href="{{ route('register') }}" style="float:right;" id="sign-up">{{ __('Register') }}</a>
                            @endif
                    @else
                            
                    <a href="{{ route('logout') }}" style="float:right;margin-left:20px;padding-top:2px;" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <b>{{ __('Logout') }}</b>  
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                    </form>
                    
                    <a href="" style="float:right ;" id="sign-up">
                                    {{ Auth::user()->name }}
                    </a>

             

                        </div>
                       
                        @endguest
              


                   
                   
                    <div class="animation start-home"></div>
                </nav>
            </div>
        </nav>

        </div>
    </header>
    <!----=======header end=========-->


    @yield('content')

    <!---------footer start herer-->
    
    <footer class="footer">
            <div class="container bottom_border">
                <div class="row">
                    <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
                        <!--headin5_amrc-->
                        <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                        <p><i class="fa fa-phone"></i> +91-9999878398 </p>
                        <p><i class="fa fa fa-envelope"></i> info@example.com </p>


                    </div>


                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="">Image Rectoucing</a></li>
                            <li><a href="">Clipping Path</a></li>
                            <li><a href="">Hollow Man Montage</a></li>
                            <li><a href="">Ebay & Amazon</a></li>
                            <li><a href="">Hair Masking/Clipping</a></li>
                            <li><a href="">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>


                    <div class=" col-sm-4 col-md  col-6 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                        <!--headin5_amrc-->
                        <ul class="footer_ul_amrc">
                            <li><a href="">Remove Background</a></li>
                            <li><a href="">Shadows & Mirror Reflection</a></li>
                            <li><a href="">Logo Design</a></li>
                            <li><a href="">Vectorization</a></li>
                            <li><a href="">Hair Masking/Clipping</a></li>
                            <li><a href="">Image Cropping</a></li>
                        </ul>
                        <!--footer_ul_amrc ends here-->
                    </div>


                    <div class=" col-sm-4 col-md  col-12 col">
                        <h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
                        <!--headin5_amrc ends here-->

                        <ul class="footer_ul2_amrc">
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#"></a></p>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#"></a></p>
                            </li>
                            <li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a>
                                <p>Lorem Ipsum is simply dummy text of the printing...<a
                                        href="#"></a></p>
                            </li>
                        </ul>
                        <!--footer_ul2_amrc ends here-->
                    </div>
                </div>
            </div>


            <div class="container">
                <ul class="foote_bottom_ul_amrc">
                    <li><a href="">Home</a></li>
                    <li><a href="">Causes</a></li>
                    <li><a href="">our Fields</a></li>
                    <li><a href="">Events</a></li>
                    <li><a href="">Gallery</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <!--foote_bottom_ul_amrc ends here-->
                <p class="text-center">Copyright @2017 | Designed With by Mds system<a href="#">Mds System</a></p>

                <ul class="social_footer_ul">
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
                <!--social_footer_ul ends here-->
            </div>

        </footer>
    
</body>

</html>