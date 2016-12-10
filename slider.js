// $(window).bind('load', function() {
//     $.ajax({
//         url: 'archive-seminars.php',
//         success: function(data){
//             $('#result-container').html(data);
//             //$('#result-container article').html(data);
//             slideSwitch(); //Initialize slider after elements are loaded into the DOM
//         }
//     });
//
//     $.ajax({
//         url: 'archive-seminars.php',
//         success: function(data){
//             $('#result-container article').html(data);
//             slideSwitch(); //Initialize slider after elements are loaded into the DOM
//         }
//     });
//
//     // Get all the links of the articles
//     var allArticles = document.querySelectorAll('#result-container article');
//     var container = document.querySelector('#result-container');
//
//     // Grab an image attribute src from console
//     var articleArray = [];
//
//     // Push image src into an array 'imageSource'
//     for ( var i=0; i<allArticles.length; i++ ){
//
//     	articleArray.push( allArticles[i].src );
//
//     }
//
//     console.log(container);
//     console.log(articleArray);
// });
