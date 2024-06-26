const bgQuizz = document.querySelector(".quizBg");
const submitBtn = document.querySelector(".submitQuizBtn");
const calderaQuestions = document.querySelectorAll(".caldera-question");
const modal = document.getElementsByClassName("popup");

function resetCaldera() {
  const alertErrorDiv = document.querySelector(".alert-error");
  if (submitBtn.style.display === "none") {
    alertErrorDiv.style.display = "flex";
  } else {
    alertErrorDiv.style.display = "none";
  }
  calderaQuestions.forEach(function (question) {
    question.style.background = "#fff";
  });
}

(function checkVideo() {
  if (window.location.search != "?completed") {
    var required = document.querySelectorAll(".field_required");
    for (var x = 0; x < required.length; x++) {
      required[x].style.display = "none";
    }
    var videoDiv = document.querySelector(".popup");
    if (videoDiv.classList.contains("video_modal")) {
      videoModal();
    }
  } else {
    return;
  }
})();

function videoModal() {
  scrollToTop();
  bgQuizz.style.display = "block";
  modal[0].style.display = "block";
  var body = document.getElementsByTagName("body");
  body[0].style.overflow = "hidden";
  var vid = document.getElementsByClassName("wp-video-shortcode")[1];
  setTimeout(function () {
    var videoProgress = document.getElementsByClassName("mejs-time-rail")[0];
    videoProgress.style.pointerEvents = "none";
  }, 500);

  setTimeout(function () {
    var videoEndCheck = setInterval(function () {
      var videoCurrentTime = checkTime();

      if (vid.duration <= videoCurrentTime + 1) {
        removeVideoModal();
        body[0].style.overflow = "auto";

        clearInterval(videoEndCheck);
      }
    }, 1000);
  }, 700);
}

function checkTime() {
  var vid = document.getElementsByClassName("wp-video-shortcode")[1];
  return vid.currentTime;
}
function removeVideoModal() {
  modal[0].style.display = "none";
  bgQuizz.style.display = "none";
}

function wrongQuestion() {
  setTimeout(function () {
    const alertError = document.querySelector(".alert-error");
    const calderaQuestions = document.querySelectorAll(".caldera-question");

    if (alertError && /QUESTION/i.test(alertError.textContent)) {
      resetCaldera();
      const matches = alertError.textContent.match(/QUESTION (\d+)/i);
      if (matches) {
        const questionNumber = parseInt(matches[1]);
        if (questionNumber >= 1 && questionNumber <= calderaQuestions.length) {
          const incorrectQuestion = calderaQuestions[questionNumber - 1];
          incorrectQuestion.style.background = "#FCE1D9";
        }
      }
    }
  }, 1000);
}

document.addEventListener("DOMContentLoaded", function () {
  submitBtn.addEventListener("click", function () {
    wrongQuestion();
    observer.observe(document.body, { childList: true, subtree: true });
  });
});

function btnToggleVideo() {
  scrollToTop();
  setTimeout(function () {
    videoModal();
    submitBtn.style.display = "block";
    resetCaldera();
    bgQuizz.style.display = "block";
  }, 300);
}

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}

var observer = new MutationObserver(function (mutationsList, observer) {
  for (var mutation of mutationsList) {
    if (
      mutation.type === "childList" &&
      mutation.addedNodes.length > 0 &&
      mutation.addedNodes[0].classList.contains("alert-error")
    ) {
      insertBtn();
      observer.disconnect();
      submitBtn.style.display = "none";
    }
  }
});

function insertBtn() {
  const alertErrorDiv = document.querySelector(".alert-error");

  var button = document.createElement("button");
  button.className = "btn";
  button.id = "toggleVideo";
  button.textContent = "PLAY VIDEO";

  alertErrorDiv.appendChild(button);

  var span = document.createElement("span");
  span.className = "quizErrorSpan";
  span.textContent = "Do you want to watch the video again?";

  alertErrorDiv.appendChild(span);

  button.addEventListener("click", btnToggleVideo);
}
