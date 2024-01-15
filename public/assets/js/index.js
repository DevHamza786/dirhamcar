let navul = document.getElementById('navul')
// let humberger = document.getElementById('humberger')
let headerNav = document.getElementById('header-nav')

//Changes in  Nav
let humbergerMain = document.getElementById('humbergerMain')
let headerNavSide = document.getElementById('header-nav-side')

humbergerMain.addEventListener('click',()=>{
  headerNavSide.classList.toggle('header-nav-side-left-to-right')
  var body = document.body;
  if (body.style.overflow === 'hidden') {
    body.style.overflow = 'auto';
  } else {
    body.style.overflow = 'hidden';
  }
})

// Changes in nav end



// function currencyChange(){
//   let aedElements = document.getElementsByClassName('price-aed')
//   let usdElements = document.getElementsByClassName('price-usd');
//   let currencyChange = document.getElementById('currencyChange')
//   if(currencyChange.value == 'usd'){
//     localStorage.setItem("currency", "usd");
//     console.log('value set')
//     //converting into usd
//     Array.from(aedElements).forEach(element => {
//       element.style.display = 'none';
//     });
//     Array.from(usdElements).forEach(element => {
//       element.style.display = 'block';
//     });
//   }else{
//     localStorage.setItem("currency", "aed");
//     //converting into aed
//     Array.from(usdElements).forEach(element => {
//       element.style.display = 'none';
//     });
//     Array.from(aedElements).forEach(element => {
//       element.style.display = 'block';
//     });
//   }
// }
// window.addEventListener('load', () => {
//   let currency = localStorage.getItem("currency");
//             if(currency == 'usd'){
//                 document.getElementById("currencyChange")[1].setAttribute('selected','selected');
//                 currencyChange()
//             }else{
//                 document.getElementById("currencyChange")[0].setAttribute('selected','selected');
//                 currencyChange()
//             } 
//  });


// Add a scroll event listener to the window
window.addEventListener('scroll', function () {
  if (window.scrollY > 110) {
    headerNav.classList.add('header-nav-fixed');
    navul.classList.add('navul-fixed')
  } else {
    navul.classList.remove('navul-fixed')
    headerNav.classList.remove('header-nav-fixed');
  }
});

// humberger.addEventListener('click',()=>{
//   navul.classList.toggle('left-to-right')
// })


$(document).ready(function() {
  // Listen for keyup event on the search input
//   $('#searchInput').on('input',function() {
//       let searchText = $(this).val().trim(); // Get the search text
//       // console.log(searchText)
    
//       // Check if the search text has a minimum length or perform other validations
      
//       // Make an AJAX request to your API
//       $.ajax({
//           url: 'https://dirhamcars.com/admin/api/get_filter_car_name/'+searchText,
//           method: 'GET',
//           // data: { search: searchTex  t }, // Pass the search text to the API
//           success: function(response) {
//             response = JSON.parse(response)
//               // Handle the API response here
//               // console.log(response)
//               displaySuggestions(response);
//           },
//           error: function(error) {
//               // Handle error, if any
//               console.error('Error fetching data:', error);
//           }
//       });
//   });

  // Function to display suggestions based on API response
  function displaySuggestions(data) {

    let suggestionsList = $('#suggestions');
    suggestionsList.css('display', 'block');
      suggestionsList.empty(); // Clear previous suggestions

    if(data.status == 'success')
    {
      data.data.forEach(function(item) {
        // Create list item and append it to the suggestions list
        suggestionsList.append(`<li><a href="car-detail.php?id=${item.id}">${item.model}</a></li>`);
        // console.log(item.model)
        // console.log(item.id)
      });
    }else{
      suggestionsList.append(`<li><a>${data.message}</a></li>`);
      // console.log(data.  message)
    }
      // let suggestionsList = $('#suggestions');
      // suggestionsList.empty(); // Clear previous suggestions
      
      // console.log(data)
      // console.log('iam displaysuggestion btn  ')
      // Loop through the response data and create list items for suggestions
      // data.forEach(function(item) {
      //     // Create list item and append it to the suggestions list
      //     suggestionsList.append(`<li>${item.suggestion}</li>`);
      // });
  }
  window.addEventListener('click',()=>{
    let suggestionsList = $('#suggestions');
    suggestionsList.css('display', 'none');
  })
});















$(document).ready(function(){
  //top destination slider
  if(document.getElementsByClassName('top-destination-slider')[0]){
    $('.top-destination-slider').slick({
      infinite: true,
      nextArrow:'<span class="top-dest-next-arrow"><i class="fa-solid fa-arrow-right"></i></span>',
      prevArrow:'<span class="top-dest-prev-arrow"><i class="fa-solid fa-arrow-left"></i></span>',
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      dots:true,
      centerPadding: '0px',   
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '0px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerPadding: '0px',
            slidesToShow: 1
          }
        }
        ]
    });
  }


  //featured-inner-slider
  if(document.getElementsByClassName('featured-inner-slider')[0]){

    $('.featured-inner-slider').slick({
      infinite: false,
      nextArrow:'<span class="featured-inner-next-arrow"><i class="fa-solid fa-angle-right"></i></span>',
      prevArrow:'<span class="featured-inner-prev-arrow"><i class="fa-solid fa-angle-left"></i></span>',
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: false ,
      dots:false,
      centerPadding: '0px',   

    });
  }



//ourfeet slider
  if(document.getElementsByClassName('outfeet-slider-container')[0]){

    $('.outfeet-slider-container').slick({
  centerMode: true,
  centerPadding: '0px',
  dots:true,
  nextArrow:'<span class="feet-next-arrow"><i class="fa-solid fa-angle-right"></i></span>',
  prevArrow:'<span class="feet-prev-arrow"><i class="fa-solid fa-angle-left"></i></span>',
    centerPadding: '0px',   
    slidesToShow: 3,
  responsive: [
  {
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 1
    }
  }
  ]
    });
  }
    
  
//featured-car-slider-container slider
if(document.getElementsByClassName('featured-car-slider-container')[0]){
$('.featured-car-slider-container').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  centerPadding: '0px',   
  nextArrow:'<span class="feet-next-arrow"><i class="fa-solid fa-angle-right"></i></span>',
  prevArrow:'<span class="feet-prev-arrow"><i class="fa-solid fa-angle-left"></i></span>',
  dots:true,
  centerMode: false,
  responsive: [
    {
      breakpoint: 990,
      settings: {
        arrows: true,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 2
      }
    },
    
    // {
    //   breakpoint: 768,
    //   settings: {
    //     arrows: false,
    //     centerMode: false,
    //     centerPadding: '0px',
    //     slidesToShow: 1
    //   }
    // },
    {
      breakpoint: 576,
      settings: {
        arrows: false,
        centerMode: false,
        centerPadding: '0px',
        slidesToShow: 1
      }
    }
    ]
});
}


  //view car slider

  if(document.getElementsByClassName('featured-inner-slider')[0]){
    $('.car-view-slider').slick({
      infinite: true,
      nextArrow:'<span class="featured-inner-next-arrow"><i class="fa-solid fa-angle-right"></i></span>',
      prevArrow:'<span class="featured-inner-prev-arrow"><i class="fa-solid fa-angle-left"></i></span>',
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      dots:false,
      centerPadding: '0px',
      autoplay:true, 
    
    });
  }

  //header-slider
  if(document.getElementsByClassName('header-slider')[0]){
    $('.header-slider').slick({
      infinite: true,
      slidesToShow: 1,
      arrows: false,
      slidesToScroll: 1,
      centerMode: false,
      dots:true,
      centerPadding: '0px',
      autoplay:true, 
      responsive: [

        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: false,
            centerPadding: '0px',
            dots:false,
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: false,
            centerPadding: '0px',
          }
        }
        ]
    
    });
  }

})

//For Header Message
function headerMessageOff(){
  document.getElementById('header-message').style.display="none"
}


//chat option
// if($('.floating-chat')){

// var element = $('.floating-chat');
// var myStorage = localStorage;

// if (!myStorage.getItem('chatID')) {
//     myStorage.setItem('chatID', createUUID());
// }

// setTimeout(function() {
//     element.addClass('enter');
// }, 1000);

// element.click(openElement);

// function openElement() {
//     var messages = element.find('.side-bot-messages');
//     var textInput = element.find('.text-box');
//     element.find('>i').hide();
//     element.addClass('expand');
//     element.find('.chat').addClass('enter');
//     var strLength = textInput.val().length * 2;
//     textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
//     element.off('click', openElement);
//     element.find('.side-bot-header button').click(closeElement);
//     element.find('#sendMessage').click(sendNewMessage);
//     messages.scrollTop(messages.prop("scrollHeight"));
// }

// function closeElement() {
//     element.find('.chat').removeClass('enter').hide();
//     element.find('>i').show();
//     element.removeClass('expand');
//     element.find('.side-bot-header button').off('click', closeElement);
//     element.find('#sendMessage').off('click', sendNewMessage);
//     element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
//     setTimeout(function() {
//         element.find('.chat').removeClass('enter').show()
//         element.click(openElement);
//     }, 500);
// }

// function createUUID() {
//     // http://www.ietf.org/rfc/rfc4122.txt
//     var s = [];
//     var hexDigits = "0123456789abcdef";
//     for (var i = 0; i < 36; i++) {
//         s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
//     }
//     s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
//     s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
//     s[8] = s[13] = s[18] = s[23] = "-";

//     var uuid = s.join("");
//     return uuid;
// }

// function sendNewMessage() {
//     var userInput = $('.text-box');
//     var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

//     if (!newMessage) return;

//     var messagesContainer = $('.side-bot-messages');

//     messagesContainer.append([
//         '<li class="self">',
//         newMessage,
//         '</li>'
//     ].join(''));

//     // clean out old message
//     userInput.html('');
//     // focus on input
//     userInput.focus();

//     messagesContainer.finish().animate({
//         scrollTop: messagesContainer.prop("scrollHeight")
//     }, 250);
// }

// function onMetaAndEnter(event) {
//     if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
//         sendNewMessage();
//     }
// }
// }
