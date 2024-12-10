
 window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    if (window.scrollY > 0) { // Kiểm tra nếu người dùng lăn chuột xuống quá 50px
        header.classList.add('active');
    } else {
        header.classList.remove('active');
    }
});


// var scrollSpy = new bootstrap.ScrollSpy(document.body, {
//   target: '#review-4-phuong',
//   offset: 100
// })

// document.addEventListener('DOMContentLoaded', function() {

// var prevScrollpos = window.pageYOffset;
// var myDiv = document.querySelector('body')
// window.onscroll = function () {
//   var currentScrollPos = window.pageYOffset;
  
//   if (currentScrollPos > 80) {
//     myDiv.classList.add("scrollDown");
//   } else {
//     myDiv.classList.remove("scrollDown");
//   }

//   if (prevScrollpos > currentScrollPos) {
//     myDiv.classList.remove("scrollUp");
//   } else {
//     myDiv.classList.add("scrollUp");
//   }

//   if (currentScrollPos + window.innerHeight >= myDiv.scrollHeight) {
//     myDiv.classList.remove("scrollUp");

//   }

//   prevScrollpos = currentScrollPos;

//   var fixBottomElement = document.getElementById('fix-ft')
//   var fixBottomAnchor = document.getElementById('fix-ft-anchor')
  
//   var fixBottom = fixBottomAnchor.getBoundingClientRect().top

//   if(fixBottom < 0) {
//     fixBottomElement.classList.add("fixBottom");
//   } else {
//     fixBottomElement.classList.remove("fixBottom");
//   }
// }

// });




// var mainMenu = document.getElementById('navbarToggler');
//     mainMenu.onclick = function() {toggleActive()}
//     function toggleActive() {
//       mainMenu.classList.toggle("active");
//       document.querySelector('header').classList.toggle("show");
//     }
    
// // var expandSearchBtn = document.getElementById('expand-search-btn');
// //     expandSearchBtn.onclick = function() {toggleClassActive()}

// // var closeSearchBtn = document.querySelector('#expand-search .btn-close')
// //     closeSearchBtn.onclick = function() {toggleClassActive()}
// //     function toggleClassActive() {
// //       expandSearchBtn.classList.toggle("active");
// //     }


// function myFunctLink(element) {
//   location.href = element.attributes.href.value;
// }



// Khi click vào toggler để mở/đóng menu
$('.toggle-menu').on('click', function(event) {
    $('.menu-left').toggleClass('active');
    event.stopPropagation();  // Ngăn sự kiện click lan ra ngoài
});

// Khi click ra ngoài menu hoặc toggler, ẩn class 'active'
$(document).on('click', function(event) {
    var $menu = $('.menu-left');
    var $toggler = $('.toggle-menu');
    
    if (!$menu.is(event.target) && $menu.has(event.target).length === 0 &&
        !$toggler.is(event.target)) {
        $menu.removeClass('active');
    }
});

// Khi click vào phần tử có class 'close', ẩn class 'active'
$('.close').on('click', function() {
    $('.menu-left').removeClass('active');
});

$(document).on('click', function(event) {
    // Kiểm tra nếu click không nằm trong #diadiem hoặc .list-diadiem
    if (!$(event.target).closest('#diadiem, .list-diadiem').length) {
        $('.list-diadiem').removeClass('active'); // Ẩn khi click ra ngoài
    }
});

$('#diadiem').on('click', function(event) {
    event.stopPropagation(); // Ngăn chặn sự kiện click lan ra ngoài
    $('.list-diadiem').toggleClass('active');
});


// ngôn ngữ

document.addEventListener("DOMContentLoaded", function () {
    const langSelector = document.querySelector(".language-selector");
    const langBtn = document.querySelector(".lang-btn");
    const langDropdown = document.querySelector(".lang-dropdown");

    // Toggle dropdown
    langBtn.addEventListener("click", function () {
        langSelector.classList.toggle("active");
    });

    // Update button content when a language is selected
    langDropdown.addEventListener("click", function (event) {
        const target = event.target.closest("li");
        if (target) {
            const imgSrc = target.querySelector("img").src;
            const langCode = target.querySelector("a").textContent.trim();

            // Update button content
            langBtn.innerHTML = `<img src="${imgSrc}" alt="${langCode} Flag"> ${langCode}`;
            langSelector.classList.remove("active");

            // Optional: Handle the selected language logic (e.g., reload page, call API)
            console.log("Selected language:", target.dataset.lang);
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (event) {
        if (!langSelector.contains(event.target)) {
            langSelector.classList.remove("active");
        }
    });
});
