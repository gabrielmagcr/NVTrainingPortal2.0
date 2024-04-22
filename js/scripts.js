function updatePage() {
	setTimeout(function(){
  // Get the current URL
  let url = window.location.href;

  // Check if the "?completedQuiz" parameter already exists
  if (url.indexOf("?completedQuiz") === -1) {
    // If it doesn't exist, add it to the end of the URL
    url += "?completedQuiz";
  }

  // Update the page with the new URL
  window.location.href = url;
	},200);
}
function markComplete(callback) {
  console.log(callback);
  if (callback.type == "error") {
    jQuery("html,body").animate(
      {
        scrollTop: jQuery("#caldera_notices_1").offset().top - 150,
      },
      "slow"
    );
    return;
  }
  var formID = document.getElementById("currentpostid");
  formID = parseInt(formID.getAttribute("dataType"));
  var userID = document.getElementById("currentpostid");
  userID = parseInt(userID.getAttribute("ses"));

  jQuery.ajax({
    //route api called in function.php file in line 69-91
    url: "https://5hp.86b.myftpupload.com/wp-json/nvtp/v1/quizSubs",
    type: "POST",
    data: { quizID: formID, user_id: userID },
    success: function (response) {
      console.log(response);
      setTimeout(function () {
        document.location.href = "/";
      }, 1500);
    },
    error: function (response) {
      console.log(response);
    },
  });
  updatePage();
}

jQuery(document).ready(function($) {
  function isInViewport(element) {
      var rect = element.getBoundingClientRect();
      return (
          rect.top >= 0 &&
          rect.left >= 0 &&
          rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
          rect.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
  }

  function lazyLoad() {
      $(".lazy-load").each(function() {
          if (isInViewport(this)) {
              $(this).attr("src", $(this).data("src"));
              $(this).removeClass("lazy-load");
          }
      });
  }

  // Load images on initial page load
  lazyLoad();

  // Load images when scrolling
  $(window).on("scroll", function() {
      lazyLoad();
  });
});
