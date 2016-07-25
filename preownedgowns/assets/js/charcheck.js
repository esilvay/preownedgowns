
 $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input").keyup(function()//Detect keypress in the textarea
{
var text_area_box =$(this).val();//Get the values in the textarea
var max_numb_of_words = 1200;//Set the Maximum Number of words
var main = text_area_box.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box.length;//Get Count of remaining characters

if(text_area_box.length <= max_numb_of_words)
{
$(".progressbar").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input").val(text_area_box.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});

 $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input1").keyup(function()//Detect keypress in the textarea
{
var text_area_box1 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 1200;//Set the Maximum Number of words
var main = text_area_box1.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box1.length;//Get Count of remaining characters

if(text_area_box1.length <= max_numb_of_words)
{
$(".progressbar1").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count1').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar1').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar1").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input1").val(text_area_box1.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});

 $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input2").keyup(function()//Detect keypress in the textarea
{
var text_area_box2 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 1200;//Set the Maximum Number of words
var main = text_area_box2.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box2.length;//Get Count of remaining characters

if(text_area_box2.length <= max_numb_of_words)
{
$(".progressbar2").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count2').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar2').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar2").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input2").val(text_area_box2.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});
 
  $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input3").keyup(function()//Detect keypress in the textarea
{
var text_area_box3 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 1200;//Set the Maximum Number of words
var main = text_area_box3.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box3.length;//Get Count of remaining characters

if(text_area_box3.length <= max_numb_of_words)
{
$(".progressbar3").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count3').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar3').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar3").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input3").val(text_area_box3.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});
  
   $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input4").keyup(function()//Detect keypress in the textarea
{
var text_area_box4 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 255;//Set the Maximum Number of words
var main = text_area_box4.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box4.length;//Get Count of remaining characters

if(text_area_box4.length <= max_numb_of_words)
{
$(".progressbar4").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count4').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar4').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar4").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input4").val(text_area_box4.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});
   
      $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input5").keyup(function()//Detect keypress in the textarea
{
var text_area_box5 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 255;//Set the Maximum Number of words
var main = text_area_box5.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box5.length;//Get Count of remaining characters

if(text_area_box5.length <= max_numb_of_words)
{
$(".progressbar5").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count5').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar5').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar5").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input5").val(text_area_box5.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});
	  
	     $(document).ready(function()//When the dom is ready
{ 
$(".text_area_input6").keyup(function()//Detect keypress in the textarea
{
var text_area_box6 =$(this).val();//Get the values in the textarea
var max_numb_of_words = 255;//Set the Maximum Number of words
var main = text_area_box6.length*100;//Multiply the lenght on words x 100
var value= (main / max_numb_of_words);//Divide it by the Max numb of words previously declared
var count= max_numb_of_words - text_area_box6.length;//Get Count of remaining characters

if(text_area_box6.length <= max_numb_of_words)
{
$(".progressbar6").css("background-color","#5FC9EC");//Set the background of the progressbar to blue
$('.count6').html(count);//Output the count variable previously calculated into the div with id= count
$('.progressbar6').animate(//Increase the width of the css property "width"
{"width": value+'%'}, 1);//Increase the progress bar
}
else
{
    $(".progressbar6").css("background-color","red");//If More words is typed into the textarea than the specified limit ,Change the progress bar from blue to yellow

    $(".text_area_input6").val(text_area_box6.substr(0,max_numb_of_words));//Remove the excess words using substring
}
return false;
});
});