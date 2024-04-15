const bgQuizz= document.querySelector('.quizBg');
const toggleVideo= document.querySelector('#toggleVideo');
const submitBtn = document.querySelector('.submitQuizBtn');
const calderaQuestions = document.querySelectorAll('.caldera-question');
const modal=document.getElementsByClassName("popup");


toggleVideo.addEventListener('click', function(){
    videoModal()
  })


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
    modal[0].style.display='block';
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
      
      modal[0].style.display='none';
      bgQuizz.style.display='none';

    }


  
  function ShowVideoBtn() {
    
      wrongQuestion();
  }
  
  function wrongQuestion() {
    setTimeout(function() {
        const alertError = document.querySelector('.alert-error');
        if (alertError && alertError.textContent.includes('QUESTION')) {
            console.log('testwrong');
            const calderaQuestions = document.querySelectorAll('.caldera-question');
            
            calderaQuestions.forEach(function(question) {
                question.style.background = '#fff';
                
            });

            // Aplicar el estilo a la pregunta incorrecta
            const matches = alertError.textContent.match(/QUESTION (\d+)/);
            if (matches) {
                const questionNumber = parseInt(matches[1]);
                if (questionNumber >= 1 && questionNumber <= calderaQuestions.length) {
                    const incorrectQuestion = calderaQuestions[questionNumber - 1];
                    incorrectQuestion.style.background = '#FCE1D9';
                }
            }
        }
    }, 1000);
}
  
  document.addEventListener('DOMContentLoaded', function() {
      submitBtn.addEventListener('click', function() {
          ShowVideoBtn();
      });
  });
  