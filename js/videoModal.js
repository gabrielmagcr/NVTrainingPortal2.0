const bgQuizz= document.querySelector('.quizBg');
const collapseVideo= document.querySelector('#collapseVideo');
const alertError= document.querySelector('.alert-error');
const toggleVideo= document.querySelector('#toggleVideo');
const submitBtn = document.querySelector('.submitQuizBtn');
const calderaQuestions = document.querySelectorAll('.caldera-question');

(function checkVideo(){

	if(window.location.search!="?completed"){
	var required =document.querySelectorAll(".field_required");
	for(var x=0;x<required.length;x++){
		required[x].style.display="none";
	}
	var videoDiv=document.querySelector(".popup");
	if(videoDiv.classList.contains('video_modal')){
	   videoModal();	
	 }
	}else{
		
		return;
	}
}());

function videoModal(){
    var body=document.getElementsByTagName('body');
    body[0].style.overflow="hidden";
    var vid=document.getElementsByClassName("wp-video-shortcode")[1];
    setTimeout(function(){
    var videoProgress=document.getElementsByClassName("mejs-time-rail")[0];
    videoProgress.style.pointerEvents = "none";
    },500);

    
    setTimeout(function(){
    var videoEndCheck =setInterval(function(){
    var videoCurrentTime=checkTime();
    
        if(vid.duration<=(videoCurrentTime+1)){
            removeVideoModal();
            body[0].style.overflow="auto";
           
            clearInterval(videoEndCheck);
        }
      },1000);
    },700);
 }



function checkTime(){
   var vid=document.getElementsByClassName("wp-video-shortcode")[1];
    return vid.currentTime;
  
}
  function removeVideoModal(){
      var modal=document.getElementsByClassName("popup");
      modal[0].classList.remove("video_modal");
      var modalIframe =document.getElementsByClassName("modal_content");
      modalIframe[0].innerHTML="";
      bgQuizz.style.display='none';
      collapseVideo.style.display='none';

    }

    function ShowVideoBtn(){
            toggleVideo.style.display='block'
            wrongQuestion();
    }
    function wrongQuestion() {
      setTimeout(function() {
          console.log('testwrong');
           if (alertError && alertError.textContent.includes('QUESTION 1')) {
              calderaQuestions.forEach(function(question) {
                  question.style.background = '#FCE1D9';
              });
          }
      }, 300);
  }
  
  

    document.addEventListener('DOMContentLoaded', function() {
      submitBtn.addEventListener('click', function() {
       ShowVideoBtn();
     
      });
    });