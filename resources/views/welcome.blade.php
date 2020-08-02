

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Rubik</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
        <!-- Animate.css -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }} ">
        {{-- <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.min.css') }} "> --}}
        <!-- Responsive-->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }} ">

        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}" />
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}" media="screen" />
        {{-- <link rel="stylesheet" href="{{ asset('https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }} ">
        <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen') }} "> --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script type="text/javascript">
                function callbackThen(response){
                    // read HTTP status
                    console.log(response.status);
                    
                    // read Promise object
                    response.json().then(function(data){
                        console.log(data);
                    });
                }
                function callbackCatch(error){
                    console.error('Error:', error)
                }   
        </script>  

        {!! htmlScriptTagJsApi([
            'action' => 'homepage',
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch'
        ]) !!}  
   </head>
   <!-- body -->
   
   <body class="main-layout">
   
       <!-- header -->
       <header>
           <!-- header inner -->
           <div class="head_top">
               <div class="header">
                   <div class="container">
                       <div class="row">
                           <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                               <div class="full">
                                   <div class="center-desk">
                                       <div class="logo">
                                           <a href="/">
                                               <img src="{{ asset('images/robik.png')}}" alt="#" />
                                            </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                               <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                              </button>
                                   <div class="collapse navbar-collapse" id="navbarsExample04">
                                       <ul class="navbar-nav ml-auto">
   
                                           <li class="nav-item">
                                               <a class="nav-link" href="#">الرئيسية</a>
                                           </li>
   
                                           <li class="nav-item">
                                               <a class="nav-link" href="#why">خدماتنا</a>
                                           </li>
   
   
   
                                           <li class="nav-item">
                                               <a class="nav-link" href="#studio">المعرض</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="#contact"> تواصل معنا</a>
                                           </li>
                                       </ul>
                                   </div>
                               </nav>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- end header inner -->
               <!-- end header -->
   
               <section id="slideshow">
                   <div class="slider">
                       <div class="slide current">
                           <div class="content">
                               <h1></h1>
                               <p>
                                   شركة روبيك تحرص وتهتم بحياة صحية للأفراد ومهمتنا الأساسية هي توفير بيئة نقية وخالية من الفيروسات و الميكروبات المسببة للأمراض حيث تشمل خدماتنا تعقيم وتطهير كل ما يحيط بك
                               </p>
                           </div>
                       </div>
   
                       <div class="slide">
                           <div class="content">
                               <h1></h1>
                               <p>
                                   بالاضافة الى جزء لا يتجزأ عن النظافة في البيوت والمحال التجارية والمنشأت و المعامل و..و , وهي مكافحة الأفات والقوارض المنتشرة
                               </p>
                           </div>
                       </div>
   
                       <div class="slide">
                           <div class="content">
                               <h1></h1>
                               <p>
                                   ان شركتنا وباستخدام أحدث أساليب التغليف وأمان البضائع تحرص على نغليف و نقل البضائع من المصدر الى الوجهة بعناية فائقة
                               </p>
                           </div>
                       </div>
                   </div>
                   <div class="onoffswitch">
                       <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                       <label class="onoffswitch-label" for="myonoffswitch">Auto</label>
                   </div>
   
               </section>
   
   
   
               <!-- end banner -->
               <!-- business -->
               <!-- why -->
                <div id="why" class="why ">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="titlepage">
                                <br><br>
                                <h2 class="animated wow animate__zoomInDown">ماهي الخدمات التي نقدمها في روبيك  </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row whycards">
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <div class="why-box ">
                                    <i>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 399.96 404.12"><defs><style>.cls-1{fill:#231f20;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="_1" data-name="1"><circle class="cls-1" cx="121.32" cy="47.24" r="47.24"></circle><path class="cls-1" d="M43,195.73l14.09-70.1a21.71,21.71,0,0,0-42.56-8.55L.43,187.17A21.71,21.71,0,0,0,43,195.73Z"></path><path class="cls-1" d="M338.4,232a11.26,11.26,0,0,0-6.33-3.47l-4.68-.84a11.37,11.37,0,0,1-6.66-3.85L295.49,200a11.36,11.36,0,0,0-8.67-4H219.66a16.93,16.93,0,0,0-12.86-12.33l-31-6.56a17,17,0,0,1-11-7.87L134.3,118.45a13.87,13.87,0,0,0-11.9-6.73H85.89A13.86,13.86,0,0,0,72.2,123.37L47.53,276.09a13.63,13.63,0,0,1-.89,3.11l-38,91.38A24.23,24.23,0,0,0,52.55,391L101,307.23a3.24,3.24,0,0,1,6,1.14c2.87,19.47,6.65,66,6.65,66a24.58,24.58,0,1,0,49.16,0l-4.13-62.74a29.11,29.11,0,0,0-1.27-6.92c-8-25.19-24.37-56.21-24.37-56.21a13.84,13.84,0,0,1-1.47-8.57l1.28-8.56H167c7.09,0,15.19-9.63,20.18-16.68l13.3,2.25a16.92,16.92,0,0,0,18.13-9.55l62.26-.26a11.35,11.35,0,0,1,7.85,3.11l22.66,21.45a11.28,11.28,0,0,1,3.54,8.63,11.4,11.4,0,0,0,2.42,7.4l.95,1.21,21.39-15.64ZM158.45,221.2H134.39l1.2-8a7,7,0,0,1,8.06-5.85l30.6,5.17C170.89,216.75,165.64,221.2,158.45,221.2Z"></path><path class="cls-1" d="M339,251.2a6.06,6.06,0,1,0-6.06,6.05A6.05,6.05,0,0,0,339,251.2Z"></path><path class="cls-1" d="M369,257.25A6.05,6.05,0,1,0,363,263.3,6.05,6.05,0,0,0,369,257.25Z"></path><path class="cls-1" d="M393.91,261.42a6.05,6.05,0,1,0,6,6.05A6.05,6.05,0,0,0,393.91,261.42Z"></path><path class="cls-1" d="M371.89,282.48a6.06,6.06,0,1,0,6.05,6A6.05,6.05,0,0,0,371.89,282.48Z"></path><path class="cls-1" d="M348.25,279.57a6.05,6.05,0,1,0-6.05,6.05A6.05,6.05,0,0,0,348.25,279.57Z"></path><path class="cls-1" d="M348.25,306.71a6.06,6.06,0,1,0,6.05,6.05A6.05,6.05,0,0,0,348.25,306.71Z"></path></g></g></svg>
                                    </i>
                                    <h3>مكافحة الافات</h3>
                                    <h4>
                                    يتضمن برنامج الشركة مكافحة الآفات الشائعة والتي تشكل خطر كبير على النظافة والصحة العامة في المحيط حولنا ، حيث تعتبر ناقل لبعض الامراض والجراثيم . تتمحور الخدمات في ثلاث نطاقات. 
                                    </h4>

                                    <p> ✔ الحشرات الطائرة (البق- البعوض-الذباب)  </p>
                                    <p> ✔ الحشرات الزاحفة(الصراصير -النمل -العناكب-الديدان) </p>
                                    <p> ✔ القوارض(الجرذان-لفئران-السحالي)  </p>
                                    <p> ✔ استشارات في المجال من قبل فريق مختص </p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12   wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="why-box" id="why">
                                    <i>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125.74 131.09"><defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>Asset 1</title><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M105.83,55.1,96.42,77.74,86.91,54.86H21.79a7.29,7.29,0,0,0-7.27,7.27v61.68a7.29,7.29,0,0,0,7.27,7.28H45.11V112.68A2.68,2.68,0,0,1,47.78,110H78a2.68,2.68,0,0,1,2.67,2.68v18.41H104a7.29,7.29,0,0,0,7.27-7.28V62.13A7.31,7.31,0,0,0,105.83,55.1Z"></path><path class="cls-1" d="M111.34,42.48c-1.38,3.17-2.67,6.05-3.65,8.28h.55a8,8,0,0,1,5.31,2h12.19Z"></path><path class="cls-1" d="M85.15,50.76C81.28,42,72.72,23.2,72.72,16.7c0-.61,0-1.21.07-1.8L62.87,7.8l-26,18.6V19.08a1.43,1.43,0,0,0-1.43-1.43H32.29a1.44,1.44,0,0,0-1.44,1.43V30.71L0,52.78H12.18a8,8,0,0,1,5.32-2Z"></path><path class="cls-1" d="M96.42,70.73l8.31-20c2.18-5.25,11.47-24.79,11.47-31a19.78,19.78,0,0,0-39.56,0c0,6.19,9.29,25.73,11.47,31Zm0-56.74a5.79,5.79,0,1,1-5.8,5.79A5.8,5.8,0,0,1,96.42,14Z"></path></g></g></svg>
                                    </i>
                                    <h3>التنظيف و التغليف و النقل </h3>
                                    <h4>
                                        من خلال كادر مدرب و محترف ومجهز بأحدث وسائل التنظيف العالمية ونلبي احتياجات طالبي الرحيل من مكان الى أخر بطريقة احترافية ويتضمن ذلك 
                                    </h4>
                                    

                                    <p> ✔ تنضيف الأثاث ليكون جاهز للنقل  </p>
                                    <p> ✔ تغليف الأثاث بطريقة احترافية لتصل للمكان المراد </p>
                                    <p> ✔ التحميل والنقل والتفريغ بوسائط نقل مخصصة  </p>
                                    <p> ✔ اعادة التركيب والتسليم جاهز حسب طلب صاحب الخدمة  </p>

                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12  wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                                <div id="box_ho" class="why-box ">
                                    <i>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 404.24 387.78"><defs><style>.cls-1{fill:#231f20;}</style></defs><title>cleaning</title><g id="Layer_2" data-name="Layer 2"><g id="icons"><path class="cls-1" d="M180.76,0H0V11.81H180.76ZM78.88,211.07a11.5,11.5,0,0,0,23,0V102.15h-23Zm319.41-33.3H386.14v-8.51h-5.32l.24-5.09h2.25a10.69,10.69,0,0,0,0-21.38H178.58a10.69,10.69,0,1,0,0,21.38h2.25l.24,5.09h-5.32v8.51H163.6a6,6,0,0,0-5.95,5.95c0,40.17,7.38,70.27,22.56,92a93.12,93.12,0,0,0,6.22,7.95l4.25,90.68a14.24,14.24,0,0,0,14,13.4H357.17a14.24,14.24,0,0,0,14-13.4l4.25-90.68a91.58,91.58,0,0,0,6.22-7.95c15.18-21.76,22.56-51.86,22.56-92A6,6,0,0,0,398.29,177.77ZM169.6,189.67h6.15v9.22h6.71l2.94,62.73C175.39,243.68,170.2,220,169.6,189.67Zm206.89,72,2.94-62.73h6.71v-9.22h6.15C391.69,220,386.5,243.69,376.49,261.62ZM180.76,26.69H0V49.54H60.82l7.53,37.73h44.06l7.53-37.73h60.82Z"></path></g></g></svg>
                                    </i>
                                    <h3> التعقيم والتطهير</h3>
                                    <h4>يتم التعقيم بأحدث التجهيزات و المعدات الألية حسب مواصفات قياسية و مطابقة لتوصيات منظمة الصحة العالمية</h4>
                                    <h4>يسرنا تقديم خدماتنا حسب رغبة العميل في الأماكن التالية </h4>
                                    <p>  ✔ المطاعم,  المستودعات, المنزل </p>
                                    <p>  ✔ الشركات, مكان العمل </p>
                                    <p>  ✔ وسائل النقل كالباصات والسيارات </p>
                                    <p>  ✔ مكان العلاج والمستشفيات </p>
                                

                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- end why -->
               <section>
                   <div class="cont" id="studio">
                       <div class="page-head" >
                           <div class="titlepage">
                               <h2 class="animated fadeInUp wow">يسرنا أن تطلع على كيفية اتمام المهام في روبيك</h2>
                           </div>
   
                           <div class="demo-gallery">
                               
                                <ul id="lightgallery">
                                    <li class="video   wow fadeInUp  animated" data-src="https://www.youtube.com/watch?v=gQR5l7Zx-60" data-poster="images/web1.jpg" style="visibility: visible; animation-name: fadeInUp;">
                                        <a href="https://www.youtube.com/watch?v=gQR5l7Zx-60" target="_blank">
                                            <img class="img-responsive" src="images/web1.png">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="video  wow fadeInUp animated" data-wow-delay="0.1s" data-src="https://www.youtube.com/watch?v=gQR5l7Zx-60" data-poster="images/web2.jpg" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <a href="https://www.youtube.com/watch?v=gQR5l7Zx-60" target="_blank">
                                            <img class="img-responsive" src="images/web2.png">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="video  wow fadeInUp  animated" data-wow-delay="0.2s" data-src="https://www.youtube.com/watch?v=NLuTk5L3R7k" data-poster="images/web3.jpg" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <a href="https://www.youtube.com/watch?v=NLuTk5L3R7k" target="_blank">
                                            <img class="img-responsive" src="images/web3.png">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                    <li class="video  wow fadeInUp  animated" data-wow-delay="0.3s" data-src="https://www.youtube.com/watch?v=4cOjsutG2-8&amp;t=2s" data-poster="images/web4.jpg" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                        <a href="https://www.youtube.com/watch?v=4cOjsutG2-8&amp;t=2s" target="_blank">
                                            <img class="img-responsive" src="images/web4.png">
                                            <div class="demo-gallery-poster">
                                                <img src="https://sachinchoolur.github.io/lightGallery/static/img/play-button.png">
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                           </div>


                       </div>
   
               </section>
   
               <!-- PORTFOLIO -->
   
               <div class="container">
   
                   <div class="row mb-3">
                       <div class="col-12 text-center" data-aos="fade">
                           <div class="titlepage wow animated fadeInUp">
                               <h2>معرض الصور</h2>
                               <p>
                                   تطمح شركتنا لنيل رضا الزبائن من خلال الانتظام والالتزام بالعمل الذي تقدمه والنتائج المكفولة
                               </p>
                           </div>
                       </div>
                   </div>
   
   
   
                   <div id="posts" class="row no-gutter">
   
   
                       <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
   
                           <a href="#" class="item-wrap animated wow fadeInUp">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man4.jpg">
                           </a>
   
                       </div>
   
                       <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                           <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.1s">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man8.jpg">
                           </a>
                       </div>
   
                       <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                           <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.2s">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man9.jpg">
                           </a>
                       </div>
   
                       <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                           <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.3s">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man10.jpg">
                           </a>
                       </div>
   
                       <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                           <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.4s">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man7.jpg">
                           </a>
                       </div>
   
                       <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                           <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.5s">
                               <span class="icon-add"></span>
                               <img class="img-fluid" src="images/man6.jpg">
                           </a>
                       </div>

                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.6s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal1.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.7s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal2.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.8s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal3.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="0.9s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal4.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="1s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal5.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="1.1s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal6.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="1.2s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal7.jpeg">
                            </a>
                        </div>
                       
                        <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
                            <a href="#" class="item-wrap animated wow fadeInUp" data-wow-delay="1.3s">
                                <span class="icon-add"></span>
                                <img class="img-fluid" src="images/gal8.jpeg">
                            </a>
                        </div>
   
   
   
   
                   </div>
               </div>
   
               <div class="business">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12 ">
                               <div class="titlepage">
                                   <h2 class="animated wow fadeInUp">
                                       برنامج شركتنا متنوع ومخصص لكل خدمة من خدماتنا
                                   </h2>
                                   <br>
                                   <h3 class="animated wow fadeInUp" data-wow-delay="0.1s">
                                       حفاظا على السلامة العامة والضمان المثالي الذي نقدمه في روبيك نقوم بالمهام بخطة عمل متكاملة ويسرنا أن تطلع على أهم النقاط فيها
                                   </h3>
                                   <span class="animated wow fadeInUp" data-wow-delay="0.1s">برنامج التعقيم والتطهير</span>
                                   <p class="animated wow fadeInUp" data-wow-delay="0.1s">
                                       تقوم شركة روبيك بتقديم برنامج متكامل للتعقيم والتطهير خلال سنة عام كامل يجدد تلقائي الا في اعتراض أحد الطرفين ويتضمن البرنامج
                                       <br> الجلسة الأساسية:وتكون شاملة ويتم تعقيم جميع أجزاء المبنى المراد وتكون على مرحلتين كل 15 يوم
                                       <br> المتابعة: تكون بالاتفاق وذلك بعقد سنوي يحدد فيه المدة والزمن وبناء عليه يتم التسعير والعروض
                                       <br> جميع مواعيد التعقيم تنفذ وفق مواعيد مسبقة لكل عملية وحسب متطلبات العمل والاتفاق مع الزبون
                                   </p>
                                   <br>
                                   <span class="animated wow fadeInUp" data-wow-delay="0.1s">معايير السلامة والأمان</span>
                                   <p class="animated wow fadeInUp" data-wow-delay="0.1s">
                                       تراعي شركة روبيك معايير السلامة الدولية
                                       <br> سلامة الزبائن : جميع المعدات والمواد التي نستخدمها تراعي معايير الجودة العالمية وهي أمنة على الانسان , حيث أننا نستخدم مواد تعتبر غير سمية-
                                       <p id="dots">..</p>
                                       <p id="more">
                                           ننوه أننا نستخدم حلول غير كيميائية في بعض الأماكن
                                           <br> سلامة طاقم العمل : انطلاقا من حرصنا على طاقم العمل في شركتنا و لضمان سلامتهم على المدى الطويل فأننا نراعي معايير السلامة الخاصة بهم- <br>ابتداء من الزي الموحد , حذاء اسلامة , الأقنعة والكفوف وما الى ذلك من
                                           وسائل السلامة المهنية
   
                                       </p>
   
                                       <!-- <button  class="read_more"  onclick="myFunction()" id="myBtn">read more</button> -->
   
                                       <br>
                                   </p>
   
                                   <div class="wrapper">
                                       <a style="cursor: pointer;" class="button animated wow zoomIn" class="read_more" onclick="myFunction()" id="myBtn">إقرأ أقل</a>
                                   </div>
   
                                   <!-- Filter: https://css-tricks.com/gooey-effect/ -->
                                   <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
                                       <defs>
                                       <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />    
                                       <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                                       <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
                                       </filter>
                                       </defs>
                                      </svg>
   
   
                               </div>
                           </div>
                       </div>
   
                       <div class="row">
                           <div class="col-md-10 offset-md-1">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="business_box animated wow fadeInUp">
                                           <figure><img id="image" class="up-and-down-animate" src="images/new.png" alt="#" /></figure>
   
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- end business -->
               <!-- Projects -->
               <div class="projects">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="titlepage">
                                   <span class="animated wow fadeInUp"> برنامج مكافحة الأفات </span>
                                   <p class="animated wow fadeInUp">
                                       نتبع في برنامجنا سبل متقدمة في مقدمتها استخدام مواد غير سامة للانسان وذات فعالية قصوى في السيطرة غلى الأفات وعديمة الرائحة ومن مناشئ أوربية
                                       <br> وتستخدم شركة روبيك أفضل المواد الكيميائية في مكافهة الأفات التي تراعي معايير الدولة في سلامة البيئة وسلامة الزبائن و طواقم العمل للوصول لأقصى
                                       <br> درجات الرضى لدى الزبون و النجاح في العمل اذ لدينا برنامج متكامل وبتناسب مع كل شرائح المجتمع "الشركات المتوسطة -المصانع - المعامل-الفلل- المنازل-المطاعم"
                                       <br>
                                   </p>
                                   <p class="p animated wow fadeInUp">
                                       الرشة الأساسية: معالجة جميع أجزاء المبنى ضد الأفات المذكورة وتكون على مرحلتين كل 15 يوم*
                                       <br> رشات متتابعة وتتم فيها رشات نصف شهرية بشكل دوري*
                                       <br> المعالجات تكون بجدول مواعيد مسبقة و محددة*
                                       <br>
                                   </p>
                                   <br>
                                   <span>سياسة مكافحة الأفات</span>
                                   <p class="animated wow fadeInUp">
                                       :تتميز خدمة شركة روبيك بالجودة العالية كما تقدم الشركة كفالات حقيقة تضمن الرضا الكامل للزبون وفق سياساتها التي تعتمد على
                                       <br>
                                       <p id="dot">..</p>
                                       <p class="animated wow fadeInUp" id="mor">
                                           عملية التشييك الأساسي لتحديد الأفات الموجودة في الموقع-
                                           <br> جودة المواد المستعملة في برنامج مكاغحة الأفات والتي تعتبر الأفضل في هذا المجال-
                                           <br> تقديم النصح والارشاد لنساهم في الحد من المشاكل القائمة والمستقبلية-
                                           <br> الاستجابة السريعة للشكاوي والقيام بزيارات سريعة فورية مرة واحدة مجانية بسكل شهري-
                                           <br> تقديم الخدمة عبر فريق متخصص ذو كفاءة عالية باشراف متخصصين-
                                           <br> تقديم تقارير دورية عن العمل المنجز والأدوية المستخدمة الارشادات اللازمة اضافة الى تحديد أماكن تكاثر الأفات-
                                           <br> الاشراف المباشر و المستمر من قبل متخصصين على عملية المكافحة لضمان السالمة لطاقم العمل والزبون-
                                           <br>
                                           <br>
   
                                           <span> النصائح و الارشادات</span>
                                           <br> تؤمن شركة روبيك [أن الزبون قادر على التخفيف من حدة الاصابة بشكل فعال من خلال النظافة الجيدة واغلاق جيمع المداخل المحتملة
                                           <br> للأفات و الى المبنى وبناء على ذلك نرجو لفت الانتباه الى الأماكن التالية و مراقبتها والتأكد من نظافتها بشكل دائم
                                           <br> داخل أماكن القاء القمامة وأماكن ترحيلها-
                                           <br> داخل غرفة الصيانة وغرف الخدمات-
                                           <br> المصاريف و المجاري الصحية-
                                           <br> غرف لتخزين المستودعات-
                                           <br> تحت رفوف التخزين وداخل الأدوات الغير مستعملة-
   
                                           <br>
   
   
   
   
                                       </p>
                                       <!-- <button  class="read_more" onclick="myFunctionn()" id="myBt">read more</button> -->
   
                                       <div class="wrapper">
                                           <a style="cursor: pointer;" class="button" class="read_more animated wow zoomIn" onclick="myFunctionn()" id="myBt">إقرأ أقل</a>
                                       </div>
   
   
                               </div>
                           </div>
                       </div>
                   </div>
   
                   <!-- <image> -->
   
   
                   <!-- </image> -->
                   <!-- end projects -->
                   <!-- Testimonial -->
                   <div class="section">
                       <div class="container">
                           <div id="" class="Testimonial  animated wow fadeInUp">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="titlepage">
                                           <h2></h2>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-md-3">
                                       <div class="Testimonial_box">
                                           <i><img src="images/advice.jpg" class="advice"alt="#"/></i>
                                       </div>
                                   </div>
                                   <div class="col-md-9">
                                       <div class="Testimonial_box">
                                           <h4>كلنا معا لمجتمع نظيف مثالي </h4>
                                           <p>
                                               نود التنويه الى أن خدمة تعقيم المشافي و أماكن العلاج تشمل : "تعقيم الأرضيات و الأسطح و خزانات المياه العلوية والسفلية - السجاد والموكيت عن طريق البخار -المفروشات وأثاث المطابخ -الحمامات - غرف الغسيل -الأجهزة الالكترونية-المصاعد - الدرج -السيراميك والرخام
                                               -النوافذ ومقابض الأ[واب"
                                           </p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
   
                   <!-- end Testimonial -->
                   <!-- contact -->
                   <div id="contact" class="contact" id="">
                       <div id="contact" class="contact" id="contact">
                           <div class="container">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="titlepage wow animated fadeInUp">
                                           <h2>تواصل معنا</h2>
                                           <h3>لا تتردد في طلب الخدمة من خلال تعبئة البيانات أدناه أو من خلال الاتصال بالرقم المرفق</h3>
                                           <span></span>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="container">
                               <div class="row">
                                    @if(session()->has('success'))
                                        <div class="alert alert-success" style="width: 100%;text-align: center;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert alert-error" style="width: 100%;text-align: center;">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            {{ session()->get('error') }}
                                        </div>
                                    @endif
                               </div>
                               <div class="row">
                                   <div class="col-md-12 ">
                                       <form class="main_form " action="{{ route('contact_us') }}" method="post" >
                                            @csrf
                                           <div class="row">
                                               <div class="col-md-12 ">
                                                   <a href="tel:0944 820 220" class="send_btn">اضغط  لطلب الاتصال</a>
                                                   <input class="form_contril" dir="rtl" placeholder="الاسم" type="text" name="Name" required>
                                               </div>
                                               <div class="col-md-12">
                                                   <input class="form_contril" dir="rtl" placeholder="رقم الهاتف" type="text" name="Phone">
                                               </div>
                                               <div class="col-md-12">
                                                   <input class="form_contril" dir="rtl" placeholder="البريد الالكتروني" type="email" name="Email" required>
                                               </div>
                                               <div class="col-md-12">
                                                   <textarea class="textarea" dir="rtl" placeholder="الرسالة" type="text" name="Message" required></textarea>
                                               </div>
                                               <div class="col-sm-12">
                                                   <button class="send_btn">ارسال</button>
                                               </div>
                                           </div>
                                       </form>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- end contact -->
                       <!--  footer -->
                       <footer>
                           <div class="footer">
                               <div class="container">
                                   <div class="row">
                                       <div class="col-md-12 ">
                                           <div class="cont">
                                               <h3> <strong class="multi animated wow fadeInUp">سعداء بخدمتكم دوما </strong><br>
                                               </h3>
                                           </div>
                                       </div>
                                       <div class="col-md-12">
                                           <ul class="social_icon">
                                               <li><a href="https//www.facebook.com/Rubik-107596957649695/"><i class="fa fa-facebook animated wow animate__heartBeat" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-instagram animate__heartBeat" aria-hidden="true"></i></i></a></li>
                                               <li><a href="#"><i class="fa fa-linkedin animate__heartBeat" aria-hidden="true"></i></i></a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                               <div class="copyright">
                                   <div class="container">
                                       <div class="row">
                                           <div class="col-md-12">
                                               <p>Copyright 2020 All Right Reserved By <a href="">Rubik</a></p>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </footer>
                       <!-- end footer -->
                       <!-- Javascript files-->


                       <script src="js/jquery.min.js"></script>
                       <script src="js/popper.min.js"></script>
                       <script src="js/bootstrap.bundle.min.js"></script>
                       <script src="js/jquery-3.0.0.min.js"></script>
                       
                       <script>
                           var str = "شركة روبيك لخدمات اللوجيستيك والتعقيم";
                           var split = str.split("");
                           var counter = 0;
   
                           var SI = setInterval(function() {
                               var h1 = $("h1");
   
                               h1.append(split[counter]);
                               counter++;
                               if (counter == str.length) {
                                   clearInterval(SI)
                               }
   
   
                           }, 80)
                       </script>
                       <script>
                           function myFunction() {
                               var dots = document.getElementById("dots");
                               var moreText = document.getElementById("more");
                               var btnText = document.getElementById("myBtn");
   
                               if (dots.style.display === "none") {
                                   dots.style.display = "inline";
                                   btnText.innerHTML = "إقرأ المزيد";
                                   moreText.style.display = "none";
                               } else {
                                   dots.style.display = "none";
                                   btnText.innerHTML = "إقرأ أقل";
                                   moreText.style.display = "inline";
                               }
                           }
                       </script>
                       <script>
                           function myFunctionn() {
                               var dots = document.getElementById("dot");
                               var moreText = document.getElementById("mor");
                               var btnText = document.getElementById("myBt");
   
                               if (dots.style.display === "none") {
                                   dots.style.display = "inline";
                                   btnText.innerHTML = "إقرأ المزيد";
                                   moreText.style.display = "none";
                               } else {
                                   dots.style.display = "none";
                                   btnText.innerHTML = "إقرأ أقل";
                                   moreText.style.display = "inline";
                               }
                           }
                       </script>
   
   
   
                      
                       <!-- <script src="js/plugin.js"></script> -->
                       <!-- sidebar -->
                       <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
                       <script>
                           const slides = document.querySelectorAll('.slide');
                           const next = document.querySelector('#next');
                           const prev = document.querySelector('#prev');
                           const toggle = document.querySelector('#myonoffswitch');
                           let auto = true; // Auto scroll
                           const intervalTime = 7000;
                           let slideInterval;
   
                           const nextSlide = () => {
                               // Get current class
                               const current = document.querySelector('.current');
                               // Remove current class
                               current.classList.remove('current');
                               // Check for next slide
                               if (current.nextElementSibling) {
                                   // Add current to next sibiling
                                   current.nextElementSibling.classList.add('current');
                               } else {
                                   // Add current to start
                                   slides[0].classList.add('current');
                               }
                               setTimeout(() => current.classList.remove('current'));
                           }
   
                           const prevSlide = () => {
                               // Get current class
                               const current = document.querySelector('.current');
                               // Remove current class
                               current.classList.remove('current');
                               // Check for next slide
                               if (current.previousElementSibling) {
                                   // Add current to prev sibiling
                                   current.previousElementSibling.classList.add('current');
                               } else {
                                   // Add current to last
                                   slides[slides.length - 1].classList.add('current');
                               }
                               setTimeout(() => current.classList.remove('current'));
                           }
   
   
   
                           // Auto slide toggle
                           toggle.addEventListener('click', e => {
                               if (toggle.checked) {
                                   auto = true;
                                   slideInterval = setInterval(nextSlide, intervalTime);
                               } else {
                                   auto = false;
                                   clearInterval(slideInterval);
                               }
                           })
   
                           // Auto slide
                           if (auto) {
                               slideInterval = setInterval(nextSlide, intervalTime);
                           }
                       </script>
   
   
   
                       <script src="{{ asset('js/jquery.fancybox.min.js')}}"></script>
                       <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
                       <script>
                           new WOW().init();
                       </script>
   
                       <script>
                           $(document).ready(function() {
                               document.getElementById("myBtn").click();
                               document.getElementById("myBt").click();
                               document.getElementById("myBtn").click();
                               document.getElementById("myBt").click();
                           })
                       </script>
   </body>
   
   </html>