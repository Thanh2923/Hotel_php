function toggleForm() {
    event.preventDefault();
    var signupForm = document.querySelector(".signup-form");
    var loginForm = document.querySelector(".login-form");
    if (signupForm.style.display === "block") {
        signupForm.style.display = "none";
        loginForm.style.display = "block";
    } else {
        signupForm.style.display = "block";
        loginForm.style.display = "none";
    }
}

function ls_kh() {
    event.preventDefault();
    $ttkh = document.querySelector('.tt-kh');
    $lsdp = document.querySelector('.ls-dp');

    if ($ttkh.style.display === "block") {
        $ttkh.style.display = "none";
        $lsdp.style.display = "block";
    } else {
        $ttkh.style.display = "block";
        $lsdp.style.display = "none";
    }
}



$('.row3').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    nextArrow:`<button type='button' class='slick-next pull-right'><i class="fa-solid fa-arrow-left"></i></button>`,
    prevArrow:`<button type='button' class='slick-prev pull-left'><i class="fa-solid fa-arrow-right"></i></button>`
    
  });
      



  function showErrorNotification(message) {
    var errorNotification = document.getElementById('errorNotification');
    var errorMessageElement = document.createElement('p');
    errorMessageElement.textContent = message;

    // Hiển thị hộp thoại
    errorNotification.style.display = 'block';
    errorNotification.appendChild(errorMessageElement);

    // Đặt thời gian chờ 3 giây (3000 milliseconds) để tự động tắt đi
    setTimeout(function() {
        errorNotification.style.display = 'none';
        errorNotification.removeChild(errorMessageElement);
    }, 3000);
}


window.onload = function() {
    // Kiểm tra xem có thông báo lỗi không
    if (typeof errorMessage !== 'undefined') {
        showErrorNotification(errorMessage);
    }
};


 

  
 

  
   
      
   
      




    




    
    
   
     
   


   

  






   