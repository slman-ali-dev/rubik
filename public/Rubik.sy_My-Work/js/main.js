let navHome     =document.getElementById('nav-home');
let navServices =document.getElementById('nav-services');
let navGallery  =document.getElementById('nav-gallery');
let navClients  =document.getElementById('nav-clients');
let navContact  =document.getElementById('nav-contact');
let navProgram  =document.getElementById('nav-program');


let navTHome     =document.getElementById('navToggler-home');
let navTServices =document.getElementById('navToggler-services');
let navTGallery  =document.getElementById('navToggler-gallery');
let navTClients  =document.getElementById('navToggler-clients');
let navTContact  =document.getElementById('navToggler-contact');
let navTProgram  =document.getElementById('navToggler-program');


let parg1 =document.getElementById('parg1');
let btn1  =document.getElementById('btn1');
let btn2  =document.getElementById('btn2');
let btn3  =document.getElementById('btn3');
let v1=0;
let v2=0;
let v3=0;

let sendBtn=document.getElementById('sendBtn');

let buttonToggler =document.getElementById('button-toggler');
let navbar      =document.getElementById('nav-toggler');
let btnCount=0;




//desing Active link design
function activeLink(link){
    id=link.getAttribute('id');

    if(id=='nav-home' || id=='navToggler-home'){
        navHome.classList.add('active-link');    
        navServices.classList.remove('active-link');
        navGallery.classList.remove('active-link');
        navClients.classList.remove('active-link');
        navContact.classList.remove('active-link');
        navProgram.classList.remove('active-link');

        navTHome.classList.add('active-link');    
        navTServices.classList.remove('active-link');
        navTClients.classList.remove('active-link');
        navTGallery.classList.remove('active-link');
        navTContact.classList.remove('active-link');      
    }
    else if(id=='nav-services' || id=='navToggler-services'){
        navServices.classList.add('active-link');
        navHome.classList.remove('active-link'); 
        navGallery.classList.remove('active-link');
        navClients.classList.remove('active-link');
        navContact.classList.remove('active-link');
        navProgram.classList.remove('active-link');


        navTServices.classList.add('active-link');
        navTHome.classList.remove('active-link'); 
        navTGallery.classList.remove('active-link');
        navTClients.classList.remove('active-link');
        navTContact.classList.remove('active-link');
        navTProgram.classList.remove('active-link');



    }
    else if(id=='nav-gallery' || id=='navToggler-gallery'){
        navGallery.classList.add('active-link');
        navHome.classList.remove('active-link'); 
        navClients.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navContact.classList.remove('active-link');
        navProgram.classList.remove('active-link');


        navTGallery.classList.add('active-link');
        navTHome.classList.remove('active-link'); 
        navTServices.classList.remove('active-link');
        navTClients.classList.remove('active-link');
        navTContact.classList.remove('active-link');
        navTProgram.classList.remove('active-link');

    }
    else if(id=='nav-clients' || id=='navToggler-clients'){
        navContact.classList.remove('active-link');
        navHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navGallery.classList.remove('active-link');
        navProgram.classList.remove('active-link');
        navClients.classList.add('active-link');


        navTContact.classList.remove('active-link');
        navTHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navTClients.classList.add('active-link');
        navTGallery.classList.remove('active-link');
        navTProgram.classList.remove('active-link');
    }
    else if(id=="nav-program" || id=="navToggler-program"){
        navProgram.classList.add('active-link');
        navHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navClients.classList.remove('active-link');
        navGallery.classList.remove('active-link');
        navContact.classList.remove('active-link');

        navTContact.classList.remove('active-link');
        navTHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navTClients.classList.remove('active-link');
        navTGallery.classList.remove('active-link');
        navTProgram.classList.add('active-link');
    }
    else if(id=='nav-contact' || id=='navToggler-contact'){
        navContact.classList.add('active-link');
        navHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navGallery.classList.remove('active-link');
        navProgram.classList.remove('active-link');
        navClients.classList.remove('active-link');


        navTContact.classList.add('active-link');
        navTHome.classList.remove('active-link');
        navServices.classList.remove('active-link');
        navTClients.classList.remove('active-link');
        navTGallery.classList.remove('active-link');
        navTProgram.classList.remove('active-link');
    }

}

//design three button read more
btn1.addEventListener('click',function(){

     
        if(v1==1){
            parg1.innerHTML=``;
            v1=0;
            btn1.innerText=`أقرأ المزيد`;
        }
        else{
        parg1.innerHTML=`
         <p id="p">
        تراعي شركة روبيك معايير السلامة الدولية
        سلامة الزبائن : جميع المعدات والمواد التي نستخدمها تراعي معايير الجودة العالمية وهي أمنة على الانسان , حيث أننا نستخدم مواد تعتبر غير سمية-
    
       ننوه أننا نستخدم حلول غير كيميائية في بعض الأماكن
       سلامة طاقم العمل : انطلاقا من حرصنا على طاقم العمل في شركتنا و لضمان سلامتهم على المدى الطويل فأننا نراعي معايير السلامة الخاصة بهم-
       ابتداء من الزي الموحد , حذاء اسلامة , الأقنعة والكفوف وما الى ذلك من 
         </p>
        `;  
        btn1.innerText=`أقرأ أقل`;
        v1=1;
        }
    });


btn2.addEventListener('click',function(){
  
     if(v2==1){
        parg2.innerHTML=``;
          v2=0;
          btn2.innerText=`أقرأ المزيد`;
      }
    else{
    parg2.innerHTML=`
         <p id="p">
       
    تتميز خدمة شركة روبيك بالجودة العالية كما تقدم الشركة كفالات حقيقة تضمن الرضا الكامل للزبون وفق سياساتها التي تعتمد على
    عملية التشييك الأساسي لتحديد الأفات الموجودة في الموقع-
    جودة المواد المستعملة في برنامج مكاغحة الأفات والتي تعتبر الأفضل في هذا المجال-
    تقديم النصح والارشاد لنساهم في الحد من المشاكل القائمة والمستقبلية-
    الاستجابة السريعة للشكاوي والقيام بزيارات سريعة فورية مرة واحدة مجانية بسكل شهري-
    تقديم الخدمة عبر فريق متخصص ذو كفاءة عالية باشراف متخصصين-
    تقديم تقارير دورية عن العمل المنجز والأدوية المستخدمة الارشادات اللازمة اضافة الى تحديد أماكن تكاثر الأفات-
    الاشراف المباشر و المستمر من قبل متخصصين على عملية المكافحة لضمان السالمة لطاقم العمل والزبون-
      </p>
        `;  
    btn2.innerText=`أقرأ أقل`;
     v2=1;
    }
 });

 
btn3.addEventListener('click',function(){
  
    if(v3==1){
       parg3.innerHTML=``;
         v3=0;
         btn3.innerText=`أقرأ المزيد`;
     }
   else{
   parg3.innerHTML=`
        <p id="p">
      
        تؤمن شركة روبيك [أن الزبون قادر على التخفيف من حدة الاصابة بشكل فعال من خلال النظافة الجيدة واغلاق جيمع المداخل المحتملة
            للأفات و الى المبنى وبناء على ذلك نرجو لفت الانتباه الى الأماكن التالية و مراقبتها والتأكد من نظافتها بشكل دائم
            داخل أماكن القاء القمامة وأماكن ترحيلها-
            داخل غرفة الصيانة وغرف الخدمات-
            المصاريف و المجاري الصحية-
            غرف لتخزين المستودعات-
            تحت رفوف التخزين وداخل الأدوات الغير مستعملة-

</p>
       `;  
   btn3.innerText=`أقرأ أقل`;
    v3=1;
   }
});


//desing nav button Toggler
buttonToggler.addEventListener('click',function(){


    if(btnCount==0){
        
       navbar.classList.add('floatright');

        btnCount=1;
    }
    else{

        navbar.classList.remove('floatright');

        btnCount=0;
    }
   
});


//typer text in header init
var typed = new Typed('.element', {
    strings: ["التعقيم", "واللوجستيك"],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true,
    loopCount: Infinity,
    showCursor: false,
    
  });

//slider in clients section

$(document).ready(function(){
      $('.demo').slick({
        dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  touchMove: false


      });

    });

