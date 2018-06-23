$(document).ready(function () {
var arr = [];
var map = {
1:"fx/smb_warning.wav",
2:"fx/smb_stage_clear.wav",
3:"fx/smb_world_clear.wav",
4:"fx/smb_kick.wav",
5:"fx/smb_1-up.wav"
}
var audio = new Audio();
audio.volume = 1.0;
audio.loop = false;
audio.src = map[1];
audio.play();

$.post('fetch.php',{postdata:0},function(data) 
{
	
$('#results').html(data);

});



$('input[type=checkbox]').click(function() {
	
if ($(this).is(':checked')) {
	
$(this).parent().css('text-decoration', 'line-through');
arr.push($(this).parent().text());
} else {
$(this).parent().css('text-decoration', 'initial');
arr.pop();
}
});
$('input[type=checkbox]').change(function() {
	
	$('#value').val((arr.length*100/($('input[type=checkbox]').length)).toFixed(1));
console.log(arr.length);
console.log("Check!");


var data = $('#value').val();
console.log(data+"%");
if (data == 100) {
audio.src = map[5];
audio.play();
} else if (data < 100 && data > 0) {
audio.src = map[4];
audio.play();
}

$.post('fetch.php',{postdata:data},function(data) 
{
	
$('#results').html(data);

});

$('.progress-bar').css('width', data+'%').attr('aria-valuenow', data); 

  });
  

	  

});