//$(window).bind('load', function() {
    // $.ajax({
    //     url: 'archive-seminars.php',
    //     success: function(data){
    //         $('#result-container').html(data);
    //         //$('#result-container article').html(data);
    //         slideSwitch(); //Initialize slider after elements are loaded into the DOM
    //     }
    // });

    // $.ajax({
    //     url: 'archive-seminars.php',
    //     success: function(data){
    //         $('#result-container article').html(data);
    //         slideSwitch(); //Initialize slider after elements are loaded into the DOM
    //         console.log(data);
    //     }
    // });


    // // Get all the links of the articles
    // var allArticles = document.querySelectorAll('#result-container article');
    // var container = document.querySelector('#result-container');
    //
    // // Grab an image attribute src from console
    // var articleArray = [];
    //
    // // Push image src into an array 'imageSource'
    // for ( var i=0; i<allArticles.length; i++ ){
    //
    // 	articleArray.push( allArticles[i].src );
    //
    // }

    //console.log(container);
    //console.log(articleArray);
//});

$(document).ready(function(){

  $.ajax({
     url: 'https://api.github.com/repos/vmg/redcarpet/issues?state=closed',

success: function(data){
console.log(data);

          // Loop over the JSON that comes back from the GitHub links

          // Use the below code to create new article and HTML elements

          // Fill those elements with any data you want from the GitHub data

          // Create new HTML element
          $article = $('<article>');

          $h1 = $('<h1>');

          // Put data into h1 element (change this to say a name from the GitHub Data)
          $($h1).html(data.title);

          // Put the h1 into the article
          $($article).append($h1);


          // Put the article into the page
         $('#result-container').append($article);

         //slideSwitch();
     },
error: function(){
alert('if this alert shows then AJAX is not connecting to your PHP file correctly');
}
});

});
