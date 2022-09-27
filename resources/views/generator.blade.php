<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/form.css">

    <title>MASK website -generator</title>
</head>

<body>
    <div class="container-fluid position-relative nav-bar m-5">
        <div class="container position-relative m-5" style="z-index: 9;" >
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top py-3 py-lg-0 pl-3 pl-lg-3  ">
                <a href="/" class="navbar-brand mx-5">
                    <h1 class="m-0 display-5 text-white"><img src="img/MaskLogo.png" class="pb-3 pr-0 pl-0" alt="" height="60px" width="70px" style=""><span class="text-primary" style="color: white;">M</span>ASK</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center px-3 mr-auto mt-2 mt-lg-0" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0 my-2 my-lg-0 text-center mx-3">

                        <a href="/" class="nav-item nav-link ">Home</a>
                      @guest

                        <a href="login" class="nav-item nav-link active">Generator</a>

                      @else
                      <a href="generator" class="nav-item nav-link active">Generator</a>
                     @endguest



                        <a href="service" class="nav-item nav-link ">Service</a>
                        <div class="mt-4 ">
                            @guest
                            <a class="btn btn-primary text-white   " type="button" role="button" aria-pressed="true" href="{{ route('login') }}" >{{ __('Login  ') }}</a>
                            @if (Route::has('register'))
                            <a class="btn btn-light  " href="{{ route('register') }}">{{ __('Sign up') }} </a>


                    @endif
                    @else
                    <a class="btn btn-primary text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>

                    {{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endguest
                        </div>

                    </div>
                </div>

            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<div class="container-fluid mask" style="">
    <div class="row generator bg-img" style="background-image: url('img/Untitled.png')">
        <div class="mask"></div>

    </div>
  </div>
</div>
</header>
<div class="item content ">
<div class="container toparea ">
  <div class="row justify-content-center ">

    <div class="col-md-5  mr-4 ml-5 cardIntro" >
        <div class="col editContent">
          <p class="mt-5"> <i class="fas fa-microphone text-primary mr-2 ml-0 "></i>Voice generator</p>
          <h4 style="display: inline-block">You can now use our website to try a different fake audio experience with all kinds of safety</h4>
          <a href="#voiceHeader" class="btn btn-primary  my-3">Try It Now</a> </div>
      </div>

      <div class="col-md-5 mr-4 ml-5 cardIntro" >
        <div class="col editContent">
          <p class="mt-5"> <i class="fas fa-video text-primary mr-2 ml-0 "></i>Video generator</p>
          <h4 style="display: inline-block">You can now use our website to try a different fake video experience with all kinds of safety</h4>
          <a href="#videoHeader" class="btn btn-primary my-3">Try It Now</a> </div>
      </div>

  </div>
</div>
</div>



{{-- start info voice header --}}
<section class="py-5 bg-primary border-top border-bottom mb-5" style="margin-top: 150px">
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        {{-- <a  class="btn  btn-icon-only btn-zoom--hover rounded-circle " id="stepIcon">
          <span class="btn-inner--icon"><i class="fas fa-question-circle text-white" style="font-size: 40px"></i></span>
        </a> --}}
        <span class="heading h4 ml-3 mb-2 stepText">Second, all you need to know about our audio generator</span>
      </div>
    </div>
  </section>
{{-- end info voice header --}}



{{-- start step voice --}}

<div class="container " style="margin-top: 150px">
    <div class="row text-center">



        <div class="col-lg-4 col-sm-6">
            <div class="">
                <i class="fas fa-pause-circle text-primary " style="font-size: 50px"></i>
            </div>
            <h3 class="m-3">Upload audio File</h3>
            <p class="m-3">You can upload audio file not less then 6 second or choose one of our existing sounds that we prepared for you, there's both female and male voices speaking only the English language</p>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="">
                <i class="fas fa-text-height text-primary " style="font-size: 50px"></i>
            </div>

            <h3 class="m-3">Write the text</h3>
            <p class="m-3">Write your text -as long as you want it to be- not less than 15 words and it will be merged with the voice you choose, but you can only write in the English language</p>
        </div>



        <div class="col-lg-4 col-sm-6">
            <div >
                <i class="fas fa-file-audio text-primary " style="font-size: 50px"></i>
            </div>

            <h3 class="m-3">Your audio completed</h3>
            <p class="m-3">Your fake audio is ready. You can enjoy it, but within the  respecting <a href="/policy"> the terms of privacy and security</a></p>
        </div>
    </div>
</div>
{{-- end step voice --}}

{{-- start voice form --}}


<div class="inputForm voiceinputform " id="voiceHeader" >
    <div class="container-fluid position-relative row">
        <form class="msform voiceform justify-content-center" action="" style="width:650px; display:flex;" id="voiceForm">
            <fieldset style="margin-left: 50px">
                <h3 class="fs-subtitle mt-3 mb-4 pb-3">Step 1</h3>



                {{-- <input type="file" name="submitfile"  id="" class="form-control border p-4 text-center" /> --}}
                <label for="apply2"><input class="inputFile" type="file" name="submitfile" accept="audio/*"   id="apply2" >Upload audio file</label>



                <div class="mt-4">

                    <h2 class="fs-title " >
                        <h3 class="text-center text-primary">OR</h3>
                        choose one of our voices
                    </h2>
                </div>
                <div class="row mt-4">

                    <div class="col-3"></div>



                    <select class="voice col-6 form-select text-center mt-3" aria-label="Default select example">
                        <option value="">Select A voice </option>
                        <option value="trump.wav">trump(male)</option>
                        <option value="1.wav">sound 1(male)</option>
                        <option value="1f.wav">sound 1(female)</option>
                        <option value="2.wav">sound 2(male)</option>
                        <option value="2f.wav">sound 2(female)</option>
                        <option value="3.wav">sound 3(male)</option>
                        <option value="3f.wav">sound 3(female)</option>
                        <option value="4.wav">sound 4(male)</option>

                        <option value="4f.wav">sound 4(female)</option>
                        <option value="5.wav">sound 5(male)</option>
                        <option value="5f.wav">sound 5(female)</option>
                        <option value="6.wav">sound 6(male)</option>
                        <option value="6f.wav">sound 6(female)</option>
                        <option value="7.wav">sound 7(male)</option>
                        <option value="7f.wav">sound 7(female)</option>
                        <option value="8.wav">sound 8(male)</option>
                    </select>


                </div>


                <div class="row mt-1">

                </div>
                <div class="row "></div>
                <h3 class="fs-subtitle mt-3 pt-3" >Step 2</h3>
                <h2 class="fs-title" style="text-align: center">
                    Enter Your Text
                </h2>
                <textarea name="textVoice" id="textVoice" style="width: 70% ; height:200px"></textarea>
                <div class="row">
                    <div class="" style="margin: auto">
                        <input  style="margin: 0; padding:12px; width:auto; border:none; border-radius:0px;
                        font-size:1rem"
                        type="submit" class="voiceSubmit btn btn-primary text-white" value="Generate" id="but1"/>

                    </div>
                </div>

            </fieldset>
        </form>



        <div class="voiceOutput">
            <h3 class="fs-title pt-5 text-center">Your audio is ready.</h3>
            <div class="row">
                <div class="col-2"></div>

                 <audio id="audio" controls class="col-8 mt-5">
                    <source src=""\>
                </audio>

                        </div>
            <div class="row">
                <div class="col-5"></div>
                {{-- <button class="action-button text-white mt-5 col-2" class="retryAudio"> Try Again</button> --}}
            </div>
        </div>

    </div>


</div>




{{-- end voice form --}}

{{-- start info video header --}}
<section class="py-5 bg-primary border-top border-bottom mb-5" style="margin-top: 150px" >
    <div class="container">
      <div class="d-flex align-items-center justify-content-center">
        {{-- <a  class="btn  btn-icon-only btn-zoom--hover rounded-circle " id="stepIcon">
          <span class="btn-inner--icon"><i class="fas fa-question-circle text-white" style="font-size: 40px"></i></span>
        </a> --}}
        <span class="heading h4 ml-3 mb-2 stepText">First, all you need to know about our video generator</span>
      </div>
    </div>
  </section>
{{-- end info video header --}}



{{-- start step video --}}

<div class="container " style="margin-top: 150px">
    <div class="row text-center">
        <div class="col-lg-4 col-sm-6">
            <div class="">
                <i class="fas fa-image text-primary " style="font-size: 50px"></i>
            </div>

            <h3 class="m-3">upload your photo</h3>
            <p class="m-3">You should choose a clear picture and not use side pictures or glasses to ensure the highest quality video or choose default photo</p>
        </div>


        <div class="col-lg-4 col-sm-6">
            <div class="">
                <i class="fas fa-film text-primary " style="font-size: 50px"></i>
            </div>

            <h3 class="m-3">Choose your video</h3>
            <p class="m-3">You should choose the video that you want to edit with the image, and our site supports all types of photos and videos </p>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div >
                <i class="fas fa-check-circle text-primary " style="font-size: 50px"></i>
            </div>

            <h3 class="m-3">Your video completed</h3>
            <p class="m-3">Your fake video is ready. You can enjoy it, but within the  respecting <a href="/policy"> the terms of privacy and security </a></p>
        </div>
    </div>
</div>
{{-- end step video --}}

{{-- start form video --}}

<div class="inputForm" id="videoHeader" >
    <!-- multistep form -->
    <form id="form1" class="msform videoForm" name="Upload" action="#" enctype="multipart/form-data" method="post">
        <!-- progressbar -->
        <ul id="progressbar">
        <li class="active">Upload Photo</li>
        <li>Upload Vidoe</li>
        <li>Preparing video</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
        <h2 class="fs-title">Upload your Photo</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        {{-- <input type="file" accept="image/*" name="photo" id="photo" placeholder="Photo" /> --}}
        <label for="apply"><input class="inputFile" type="file" name="submitfile"   id="apply" accept="image/*" >Upload image</label>


        {{-- <input type="file" name="submitfile" accept="image/*"   id="" /> --}}

        <h1 class="text-dark mt-2">  OR</h1>
        <h3 class="fs-title mt-2"> You can now use one of the default images</h3>


        <div class="col-lg-12 mt-5 p-0 pt-5 pt-lg-0">
            <div class="owl-carousel service-carousel position-relative">
                <div class="d-flex flex-column text-center bg-light mx-3 p-4">



                    <button type="button" class="imgHover container" >
                        <img src="img/41.png" class="imgDefult image" name="41.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Click</div>
                    </button>



                    </div>
                <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                    <button type="button" class="imgHover container" >
                        <img src="img/24.png" class="imgDefult image" name="24.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Click</div>
                    </button>

                </div>
                {{-- <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                    <button type="button" class="imgHover container" >
                        <img src="img/21.png" class="imgDefult image" name="21.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Click</div>
                    </button>
                 </div> --}}

                    <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                        <button type="button" class="imgHover container" >
                            <img src="img/22.png" class="imgDefult image" name="22.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                            <div class="middle">
                                <div class="text">Click</div>

                        </button>
                     </div>


                        <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/20.png" class="imgDefult image" name="20.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>







                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/43.png" class="imgDefult image" name="43.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/42.png" class="imgDefult image" name="42.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/35.png" class="imgDefult image" name="35.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/34.png" class="imgDefult image" name="34.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


{{-- 
                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/31.png" class="imgDefult image" name="31.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div> --}}



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/25.png" class="imgDefult image" name="25.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/06.png" class="imgDefult image" name="06.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/10.png" class="imgDefult image" name="10.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/11.png" class="imgDefult image" name="11.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/12.png" class="imgDefult image" name="12.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/13.png" class="imgDefult image" name="13.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>






                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/03.png" class="imgDefult image" name="03.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/02.png" class="imgDefult image" name="02.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>



                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/23.png" class="imgDefult image" name="23.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/26.png" class="imgDefult image" name="26.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/27.png" class="imgDefult image" name="27.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/32.png" class="imgDefult image" name="32.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         {{-- <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/30.png" class="imgDefult image" name="30.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div> --}}


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/36.png" class="imgDefult image" name="36.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>


                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/33.png" class="imgDefult image" name="33.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>

                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/40.png" class="imgDefult image" name="40.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>

                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/38.png" class="imgDefult image" name="38.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>

                         <div class="d-flex flex-column text-center bg-light mx-3 p-4">

                            <button type="button" class="imgHover container" >
                                <img src="img/37.png" class="imgDefult image" name="37.png" onclick="SetImageName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                   <div class="text">Click</div>
                            </button>

                         </div>





            </div>
        </div>

        <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset >
        <h2 class="fs-title">You can now use one of the default Video</h2>
        <h3 class="fs-subtitle">This is step 2</h3>

        <div class="col-lg-12 p-0 pt-5 pt-lg-0 mt-5">
            <div class="owl-carousel service-carousel position-relative">
                <div class="d-flex flex-column text-center ">

                    <button type="button" class=" container" >
                        <img src="img/0.png" class="imgDefult image" name="0.mp4" onclick="SetVideoName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Choose video</div>
                    </button>




                    </div>
                <div class="d-flex flex-column text-center ">



                    <button type="button" class=" container" >
                        <img src="img/1.png" class="imgDefult image" name="1.mp4" onclick="SetVideoName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Choose video</div>
                    </button>



                 </div>
                <div class="d-flex flex-column text-center ">

                    <button type="button" class=" container" >
                        <img src="img/2.png" class="imgDefult image" name="2.mp4" onclick="SetVideoName(this)" id="myImg"  width="100%">

                        <div class="middle">
                            <div class="text">Choose video</div>
                    </button>

                 </div>

                    <div class="d-flex flex-column text-center ">

                        <button type="button" class=" container" >
                            <img src="img/3.png" class="imgDefult image" name="3.mp4" onclick="SetVideoName(this)" id="myImg"  width="100%">

                            <div class="middle">
                                <div class="text">Choose video</div>
                        </button>



                     </div>


                        <div class="d-flex flex-column text-center videoDiv">

                            <button type="button" class=" container" >
                                <img src="img/4.png" class="imgDefult image" name="4.mp4" onclick="SetVideoName(this)" id="myImg"  width="100%">

                                <div class="middle">
                                    <div class="text">only click</div>
                            </button>

                         </div>


            </div>
        </div>






        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="submit" id="gen_vid" class="next VideoSubmit action-button" value="Generate"/>
        </fieldset>
    </form>

    <div class="col-6 text-center mt-4" id="outputvideo">
        <div>
            <h3 class="fs-title pt-5">Your video is being prepared.</h3>
            <h5 class="m-2"></h5>

            <video id="out_vid" controls class=" justify-content-center text-center mt-2">
                <source src="" type="video/mp4">
            </video>
        </div>

        <div>
            {{-- <input type="button" class="convert action-button text-white mt-4" value=" convert to 1920 x 1080 " style="width: 200px"> --}}
            {{-- <button class="action-button text-white mt-4" class="retryVideo"> Try Again</button> --}}
        </div>
    </div>

    <div class="col-6 text-center mt-4" id="outputvideoConverted">
        <div>
            <h3 class="fs-title pt-5">Your video is ready.</h3>
            <video controls class=" justify-content-center text-center mt-2">
                <source src="img/.mp4" type="video/mp4">
            </video>
        </div>
        <div>
             <button class="action-button text-white mt-4" class="retryVideo"> Try Again</button>
        </div>
    </div>

</div>


{{-- end form video --}}





<div class="container-fluid " style="background-image: url('img/EPRS_STOA_ATAG_690046_What_If_Deepfakes_final (1).png'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; height: 360px; padding-bottom:40px">
    <div class="row"  >
        <div class="col-12" style="padding-bottom:60px">
            <div class="p-5 text-center"  style="background-color: rgba(0, 0, 0, 0.4); height:250px; margin-top:20px; ">
                <div class=" " >
                  <div class="d-flex  ">
                    <div class="text-white col-sm-5" style="margin-left: 2% " >
                      <h1 class="mb-3" style="color: white;">See Some made Examples</h1>

                      <h5 class="mb-3" style="color: white;">If you wish to see some of the experiments that have been conducted by our site, you can do so</h5>

                      <div class="col-sm-5" style="margin-left: 25%; margin-top: 5%;">
                        <a href="/#example" class="btn btn-primary  text-white p-2" ><span class="">See more</span></a>


                      </div>

                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>







    <!-- Footer Start -->
     <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-md-5">

        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5 bg-dark">

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="" >Home</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
                @guest
                <a href="login" >generator</a>
                @else
                <a href="generator" >generator</a>
                @endguest

              </h6>


        </div>
          <!-- Grid column -->





          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="service" >Service</a>
            </h6>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2">

            <h6 class="text-uppercase font-weight-bold">
                <a href="/policy" >Privacy Policy</a>
            </h6>

        </div>
        <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">



                @guest
                <a href="login" >Login</a>
         @else
         <a class=" " href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                      <i class="fas fa-sign-out-alt"></i>

          {{ __('Logout') }}</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          @endguest

            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->
            {{-- <hr class="text-light ">--}}
      <hr class="text-dark my-5" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              We propose an application that leverages the power of deepfake algorithms to extract an accurate model of an individual and generate new content especially designed for benign use.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Social -->
      <section class="text-center mb-3">
         <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" ><i  class="fab fa-facebook-f"></i></a>

        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button" ><i class="fab fa-google"></i></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
      </section>
    </div>
    <div class="bg-dark">
        <div class="container border-top border-secondary pt-3 bg-dark">
            <p class="m-0 text-center text-white ">
                <a class="text-white font-weight-bold" href="#"> &copy; mask.</a> All Rights Reserved.

            </p>
        </div>
    </div>



<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/form.js"></script>
</body>

</html>
