// $(document).ready(function(){
//
//   $.ajax({
//      url: 'https://api.github.com/repos/vmg/redcarpet/issues?state=closed',
//
// success: function(data){
//
//     console.log(data);
//     $.each(data, function(index, value){
//
//     // Create the h1 element for the title
//     $h1 = $('<h1>');
//     // Add the title text to the h1 element
//     $($h1).html(data[index].title);
//
//     // For the text
//     $text = $('<p>');
//     $($text).html(data[index].body);
//
//     // The article itself
//     $article = $('<article>');
//     $($article).append($h1);
//     $($article).append($text);
//
//     // Put it on the screen
//     $('#result-container').append($article);
//     });
//
//      },
// error: function(){
// alert('if this alert shows then AJAX is not connecting to your PHP file correctly');
// }
// });
//
// });
