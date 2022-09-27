
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

	//show the next fieldset
	next_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;

	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

	//show the previous fieldset
	previous_fs.show();
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
		duration: 800,
		complete: function(){
			current_fs.hide();
			animating = false;
		},
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".VideoSubmit").on('click',function(){
    $(".videoForm").hide();
    setTimeout(() => {
        $("#outputvideo").show();
    }, 1000);
	return false;
})

$(".convert").on('click',function(){
    $("#outputvideo").hide();
    setTimeout(() => {
        $("#outputvideoConverted").show();
    }, 1000);
	return false;
})


$(".voiceSubmit").on('click',function(){
    $("#voiceForm").hide();
    setTimeout(() => {
        $(".voiceOutput").show();
    }, 1000);
    return false;
})




// try video

// https://c20f-156-199-214-176.eu.ngrok.io/fake_download?vid=3.mp4&img=00.png&config=vox-adv

var img_name="temp.jpg"
var vid_name=""


function SetImageName(imgElement) {
      img_name = imgElement.name;
    console.log(img_name)
}

function SetVideoName(imgElement) {
     vid_name = imgElement.name;
    console.log(vid_name)
}




video_button=document.getElementById("gen_vid")
video_button.onclick= async function name(params) {
    console.log("clicked");
    try {
        const formData = new FormData();
        const fileField = document.getElementById("form1").querySelector('input[type="file"]');
        formData.append('file', fileField.files[0]);


     await   fetch('https://bc44-2c0f-fc89-8020-5e1-71b9-703b-bee1-f6e3.eu.ngrok.io/upload', {
            method: 'POST',
            body: formData
          })

    } catch (error) {

    }
    // console.log(document.getElementById("photo").value);
    var base="https://bc44-2c0f-fc89-8020-5e1-71b9-703b-bee1-f6e3.eu.ngrok.io/"
    var endpoint="fake_download_with_logo"
    var qury={
       "config":  "vox-adv",
       "vid":vid_name,
       "img":img_name

    }
    var u = new URLSearchParams(qury).toString();
    var url=base+endpoint+"?"+u
    console.log(url);

    document.getElementById("out_vid").src=url
}





//voice api
var selected_voice="temp.wav"
$(document).ready(function(){
    $("select.voice").change(function(){
        selected_voice = $(this).children("option:selected").val();
        console.log(selected_voice);
    });
});




but1=document.getElementById("but1")
but1.onclick= async function name(params) {
    console.log("clicked");

    try {
        const formData = new FormData();
        const fileField = document.getElementById("voiceForm").querySelector('input[type="file"]');
        formData.append('file', fileField.files[0]);


       await fetch('https://86d9-2a01-7e01-00-f03c-93ff-fe7b-2ff9.eu.ngrok.io/upload', {
            method: 'POST',
            body: formData
          }).then()

    } catch (error) {

    }
    var base="https://86d9-2a01-7e01-00-f03c-93ff-fe7b-2ff9.eu.ngrok.io/"
    var endpoint="fake_download"
    var qury={
       "text":document.getElementById("textVoice").value,
       "voice":selected_voice
    }
    var u = new URLSearchParams(qury).toString();
    var url=base+endpoint+"?"+u
    console.log(url);

    document.getElementById("audio").src=url
}



//     console.log(document.getElementById("textVoice").value);
//     var base="https://3211-156-199-72-143.eu.ngrok.io/"
//     var endpoint="fake_download"
//     var qury={
//         "text": document.getElementById("textVoice").value,
//         "voice":selected_voice
//     }
//     var u = new URLSearchParams(qury).toString();
//     var url=base+endpoint+"?"+u
//     console.log(url);

//     document.getElementById("audio").src=url








// // try voice



// video_button=document.getElementById("gen_vid")
// video_button.onclick=function name(params) {
//     console.log("clicked");
//     try {
//         const formData = new FormData();
//         const fileField = document.getElementById("form1").querySelector('input[type="file"]');
//         formData.append('file', fileField.files[0]);


//         fetch('https://6412-156-199-72-143.eu.ngrok.io/upload', {
//             method: 'POST',
//             body: formData
//           })

//     } catch (error) {

//     }
//     // console.log(document.getElementById("photo").value);
//     var base="https://6412-156-199-72-143.eu.ngrok.io/"
//     var endpoint="fake_download"
//     var qury={
//        "config":  "vox-adv",
//        "vid":vid_name,
//        "img":img_name
//         // "img":"temp.jpg"
//     }
//     var u = new URLSearchParams(qury).toString();
//     var url=base+endpoint+"?"+u
//     console.log(url);

//     document.getElementById("out_vid").src=url
// }








