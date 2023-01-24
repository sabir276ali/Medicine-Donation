
@extends('layouts.main')
@section('content')
<!----=======banner========-->
    <div class="banner">

        <div class="container-fluid">

            <div class="slider">
                <input type="radio" name="slide" id="slide-1" checked>
                <input type="radio" name="slide" id="slide-2">
                <input type="radio" name="slide" id="slide-3">

                <div class="slides">
                    <div class="slide slide-1">
                        <div class="slide-data">
                            <h1>GIVE A HELPING HAND TO THOSE WHO NEED IT!</h1>
                            <P>
                                Volunteers do not Necessarily have the Time, They Just have the Heart.
                            </P>
                            @auth
                            <a href="/donate"><button>Donate </button></a>
                            @else
                            <a href="/login"><button>Donate </button></a>
                            @endauth
                        </div>
                    </div>
                    <div class="slide slide-2">
                        <div class="slide-data">
                            <h1>GIVE A HELPING HAND TO THOSE WHO NEED IT!</h1>
                            <P>Volunteers do not Necessarily have the Time, They Just have the Heart.</P>
                          
                            @auth
                            <a href="/donate"><button>Donate </button></a>
                            @else
                            <a href="/login"><button>Donate </button></a>
                            @endauth

                            
                        </div>
                    </div>
                    <div class="slide slide-3">
                        <div class="slide-data">
                            <h1>GIVE A HELPING HAND TO THOSE WHO NEED IT!</h1>
                            <P>Volunteers do not Necessarily have the Time, They Just have the Heart.</P>
                           
                            @auth
                            <a href="/donate"><button>Donate </button></a>
                            @else
                            <a href="/login"><button>Donate </button></a>
                            @endauth

                            
                        </div>
                    </div>
                </div>

                <div class="arrows arrow-left">
                    <label for="slide-3">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                    <label for="slide-1">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                    <label for="slide-2">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                </div>

                <div class="arrows arrow-right">
                    <label for="slide-2">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                    <label for="slide-3">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                    <label for="slide-1">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                </div>

                <div class="dots">
                    <label for="slide-1"></label>
                    <label for="slide-2"></label>
                    <label for="slide-3"></label>
                </div>
            </div>
        </div>

    </div>
    <!---========events===========-->




    <div class="events">
        <div class="container" id="column-5">

            <div class="row">
                <div class="col-6" id="column-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters"
                            style=" border-bottom: 2px solid #E5C12F; border-top: 2px solid #E5C12F;">
                            <div class="col-md-4"
                                style="background-image: url(event-img.jpg);background-size: cover; background-repeat: no-repeat; ">

                            </div>
                            <div class="col-md-8" style="border:none; ">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: rgb(75, 67, 67);">Up-Coming Events</h5>
                                    <p class="card-text"> <i class="fa-solid fa-clock"></i> &nbsp;December-11-2022 </p>
                                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> &nbsp; ISlamabad I-8/4
                                    </p>
                                    <p class="card-text"><small class="text-muted">
                                            <a href=""><button type="button" class="btn btn-dark">More
                                                    Info</button></a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6" id="range">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters"
                            style=" border-bottom: 2px solid #E5C12F; border-top: 2px solid #E5C12F;">
                            <div class="col-md-4"
                                style="background-image: url(event-image.jpg);background-size: contain; background-repeat: no-repeat; ">

                            </div>
                            <div class="col-md-8" style="border:none; ">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: rgb(75, 67, 67);">Up-Coming Events</h5>
                                    <p class="card-text"> <i class="fa-solid fa-clock"></i> &nbsp;December-11-2022 </p>
                                    <p class="card-text"><i class="fa-solid fa-location-dot"></i> &nbsp; ISlamabad I-8/4
                                    </p>
                                    <p class="card-text"><small class="text-muted">
                                            <a href=""><button type="button" class="btn btn-dark">More
                                                    Info</button></a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>
    </div>
    <!-------=====Recent Causes=======-->
    <div class="recentcauses">
        <div class="container" id="recent-causes">
            <div class="row">
                <div class="tittle" style=" text-align: center; margin-left: 400px; margin-top: 43px;">
                    <h3 style="font-family:'lato',serif ; color: black;"> Recent <span
                            style="font-weight:bold; color: black;">Causes</span> </h3>
                    <p style="color:rgb(92, 80, 80) ; font-family:'lato,serif' ;"> Our <span
                            style="background-image: url(span-underline.png);background-position: right bottom; background-repeat: no-repeat; font-family: 'lato',serif;">charity
                            helps</span> those people who have no hope</p>
                </div>


            </div>

        </div>
    </div>
    <!---------------=========causes end---------------->
    <!---------=======card-sliderr==========-->
    <div class="card-slider">
        <div class="container" id="card-slider">
            <div class="row">
                <div class="card-deck" style="color: black;font-family: 'lato',serif; ">
                    <div class="card">
                        <img src="slider-img-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donate for Dengue</h5>
                            <p class="card-text">Dengue (DENG-gey) fever is a mosquito-borne illness that occurs in
                                tropical and subtropical areas of the world. Mild dengue fever causes a high fever and
                                flu-like symptoms water contaminated with cholera bacteria.</p>
                            <p class="card-text">
                            <small class="text-muted">
                            
                            @auth
                            <a href="/donate"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                            @else
                            <a href="/login"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                            @endauth 
                          
                        
                            </small>
                            </p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="slider-img-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donate for Cholera</h5>
                            <p class="card-text">Cholera is an acute diarrheal illness caused by infection of the
                                intestine with Vibrio cholerae bacteria. People can get sick when they swallow food or
                                water contaminated with cholera bacteria.</p>
                            <p class="card-text"><small class="text-muted">
                             <p class="card-text">
                                <small class="text-muted">
                                @auth
                                <a href="/donate"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                                @else
                                <a href="/login"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                                @endauth 
                                </small></p>
                                </small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="slider-img-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donate for Alzheimer's</h5>
                            <p class="card-text">Alzheimer's disease is thought to be caused by the abnormal build-up of
                                proteins in and around brain cells. One of the proteins involved is called amyloid,
                                deposits of which form plaques around brain cells.</p>
                            <p class="card-text"><small class="text-muted">
                                <p class="card-text"><small class="text-muted">
                                        @auth
                                        <a href="/donate"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                                        @else
                                        <a href="/login"><button type="button"class="btn btn-primary btn-sm">Donate Now</button></a>
                                        @endauth 
                                </small></p>
                            </small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-------------------------===================slider end here==================-->
    <!------====new section start here how can you help=========-->
    <div class="how-can-you-help">
        <!-------====this div is just for creating empty background for color purpose=====-->

        <div class="container" id="C-1">
            <div class="row" id="help">
                <!-----====help======-->
                <div class="col-4" id="col-1">
                    <span class="big-text">
                        HOW
                    </span>
                    <br>
                    <span class="small">
                        CAN YOU
                    </span>
                    <br>
                    <span class="small">
                        HELP?
                    </span>
                    <br>
                    <hr class="hr">
                    <p class="enim">
                        Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea cmodo
                        conse quat. Duis aute irure dolor in reprehenderit inas voluptate velit esse cillum...
                    </p>
                    <a href=""><button type="button" class="btn btn-primary">learn More</button>
                    </a>
                </div>
                <!---========featured===========-->
                <div class="col-4" id="col-2">
                    <div class="media">
                        <ul id="medias">
                            <li><i class="fa-solid fa-people-line"></i> &nbsp;media</i></li>
                            <li><i class="fa-solid fa-person-circle-check"></i>&nbsp;Become Volunteer</li>
                            <li> <i class="fa-solid fa-gift "></i>&nbsp; Make a Gift</li>
                            <li> <i class="fa-solid fa-hand-holding-heart"></i>&nbsp; Send Donation</li>
                            <li> <i class="fa-solid fa-hand-holding-heart"></i> &nbsp; Give helping Hand</li>
                        </ul>
                    </div>
                </div>
                <div class="col-4" id="col-image">



                </div>
            </div>
        </div>
    </div>
    <!------------======donation in specific area started from here=================-->
    <div class="area">
        <div class="container" id="d-counter">
            <h2 class="fields">Donate to Our fields</h2>
            <hr style="width: 150px; height: 5px; background-color:rgb(236,199,49); border-radius: 30px;">
            <div class="row" id="donation-counter">

                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/islambad.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Islamabad</h5>
                                    <p class="card-text">donate in Islamabad Sectors. <br> G/6 G/4 G/3 G/5</p>
                                    <p class="card-text"><small class="text-muted"> <a href=""><button type="button"
                                                    class="btn btn-warning"
                                                    style="font-family:'lato',serif; font-weight: bold;">Click
                                                    Here</button></a> </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="images/lahore.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lahore</h5>
                                    <p class="card-text"> Donate in lahore Sectors <br> Defence /model colony.</p>
                                    <p class="card-text"><small class="text-muted"><a href=""><button type="button"
                                                    class="btn btn-warning"
                                                    style="font-family:'lato',serif; font-weight: bold;">Click
                                                    Here</button></a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!------------===donation specific area end=======-->
    <!---------------------===========Donaters rows==============-->
    <div class="donater-rows">
        <div class="container" id="donaters">
            <h2 style="font-family:'lato',serif;padding-top: 20px; color: black;">Latest <span
                    style="font-weight: bold;"> Donaters</span> </h2>
            <p style="font-family:'lato',serif; font-size: large; color: black;">Our charity helps those people who have
                no hope</p>
            <div class="row" id="donaters-name">

                <div class="container">
                    <div class="row " id="text-center">

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                    src="https://bootstrapious.com/i/snippets/sn-team/teacher-4.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Hadi</h5><span class="small text-uppercase text-muted">Quetta &nbsp;
                                    &nbsp; - </span>
                                <h6 style="color:#836a08; ">Donated for Cholera</h6>
                            </div>
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                    src="https://bootstrapious.com/i/snippets/sn-team/teacher-2.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Areeb</h5><span class="small text-uppercase text-muted">Islamabad
                                    -</span>
                                <h6 style="color:#836a08; ">Donated for Alzheimer's</h6>
                            </div>
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                    src="https://bootstrapious.com/i/snippets/sn-team/teacher-1.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Hussnain</h5><span class="small text-uppercase text-muted">Lahore
                                    &nbsp; &nbsp; -</span>
                                <h6 style="color:#836a08; ">Donated for flood</h6>
                            </div>
                        </div><!-- End -->

                        <!-- Team item -->
                        <div class="col-xl-3 col-sm-6 mb-5">
                            <div class="bg-white rounded shadow-sm py-5 px-4"><img
                                    src="https://bootstrapious.com/i/snippets/sn-team/teacher-7.jpg" alt="" width="100"
                                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                                <h5 class="mb-0">Qasim</h5><span class="small text-uppercase text-muted">Punjab
                                    &nbsp;&nbsp;&nbsp;&nbsp; -</span>
                                <h6 style="color:#836a08; ">Donated for dengue</h6>
                            </div>
                        </div><!-- End -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!----------------=======Donaters Row end===========-->
    <!--------============fresh from the blog===============-->
    <div class="blog" id="freshblog">
        <h2 style="font-family:'lato',serif;">Fresh <span style="font-family:'lato',serif ;font-weight: bold;"> from the
                blog</span></h2>
        <p style="font-family:'lato',serif; font-size: large; font-weight: bold;">Every charitable act is a stepping
            stone toward heaven</p>
        <div class="container" id="fresh-blog">
            <div class="row" id="blog" style="color: black;font-family: 'lato',serif; ">
                <div class="col" id="video" style="margin: 0%; padding: 0%;">
                    <img src="images/blog1.jpg" alt="">
                </div>
                <div class="col">
                    <div class="card mb-3">
                        <img src="images/blog-2.jpg" class="card-img-top" alt="..." style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">Flood in pakistan</h5>
                            <p class="card-text">pakistan iis suffering from the massive flood due to heavy.</p>
                            <p class="card-text"><small class="text-muted"><a href=""></a><button type="button"
                                        class="btn btn-primary" style="border-radius:20%;">Check Blog</button></small>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!---------======fresh from the blog end here-->
    <!-----======feed content start here=====-->
    <div class="feed">
        <div class="poet" style=" width:30%; height: auto; font-family: 'lato',serif;">
            <h3 style="font-weight: bold;">WHAT Our Donaters Say
            </h3>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit atque dignissimos magnam quia
                aliquid
                veniam aliquam quaerat porro assumenda, sit, dolorem pariatur cupiditate laboriosam, eligendi laborum
                sunt.
                Dolorem, nostrum tempore. <span style="font-weight:bold ;">Will Smith</span></p>
        </div>
        <div class="imagepoor">

        </div>

    </div>
    <!------------------=========feed content end here=========-->
    <!---------volunter end herer-->
    <div class="volunter">
        <h2 style="color:#E5C12F; padding-top: 20px;">27,517</h2>
        <h3 style="color:black ;">We are Really Proud of Our Kind <span><i class="fa-sharp fa-solid fa-heart-pulse"
                    style="color: #E5C12F;"></i></span> <span style="font-weight:bold ;"> Voluntaries.</span></h3>
    </div>
    <!---------volunter end herer-->
@endsection