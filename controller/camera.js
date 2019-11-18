// window.addEventListener("load", () => {
// 	// Getting variables
// 	var canvas = document.getElementById("canvas");
// 	var context = canvas.getContext('2d');
// 	var Videobox = document.getElementById("video");
// 	var FileUpload = document.getElementById("fileupload");

// 	// Upload segment
// 	FileUpload.addEventListener("change", (event) => {
// 		var Filefound = null;
// 		if (FileUpload.files.length > 0 && FileUpload.files[0].type.match(/image\/*/))
// 		{
// 			var image = new Image();
// 			image.addEventListener("load", () => {
// 				canvas.height = image.height;
// 				canvas.width = image.width;
// 				context.drawImage(image, 0, 0);
// 				console.log(canvas.toDataURL());
// 			});
// 			image.src = URL.createObjectURL(FileUpload.files[0]);
// 		}
// 		console.log("Done with upload change");
// 	});

// 	// capture segment

// 	var capture = document.getElementById("capture");
// 	capture.addEventListener("click", (event) => {
// 		canvas.height = Videobox.offsetHeight;
// 		canvas.width = Videobox.offsetWidth;
// 		context.drawImage(Videobox, 0, 0);
// 		console.log(canvas.toDataURL());
// 	});

// 	if (navigator.mediaDevices.getUserMedia)
// 	{
// 		navigator.mediaDevices.getUserMedia({"video": true}).then((stream) => {
// 			Videobox.srcObject = stream;
// 		}).catch((error) => {
// 			console.log(error);
// 		});
// 	}


// 	console.log("Done with window load");
// })
// console.log("Hi");

var canvas = document.getElementById('canvas'),
    context = canvas.getContext('2d'),
    video = document.getElementById('video'),
    capture = document.getElementById('photo-button'),
    pic = document.getElementById('filetoUpload');

(function(){
    navigator.getMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia ||
                         navigator.msGetUserMedia;

    navigator.getMedia({
        video: true,
        audio: false
        
    }, function(stream){
        video.srcObject = stream;
        video.play();
    }, function(error){
        //An error occured
        console.log('I don\'t want you to use my camera');
    });

    capture.addEventListener('click', function () {
        context.drawImage(video, 0, 0, 400, 300);
        pic.value = canvas.toDataURL('image/png');
    }, false);

    document.getElementById('clear-button').addEventListener('click', function () {
        context.clearRect(0, 0, canvas.width, canvas.height);
    });
    
})();

function addSticker(id, num){
    let sticker = document.getElementById(id);
    context.drawImage(sticker, num, num, 150, 150);
    pic.value = canvas.toDataURL('image/png');
}