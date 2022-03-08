// DD JavaScript
//============================================================
// Image Cache
var ImageCache = function() {
	// Constant
	var BOOK = 'book';
	var SPIRAL = 'spiral';
	// Bind 'this' to a local variable since referencing 'this' in ajax/events closures might be confusing.
	var imageCache = this;

	var cache = {} 

	var addImage = function(url) {
		cache[url] = $('<img />').attr('src', url);
		return cache[url];
	}
	var getImage = function(url) {
		if (url == null)
		{
			return $('<img />');
		}
		else if (url in cache) 
		{
			return cache[url];
		}                   
		else 
		{
			return addImage(url);
		}
	}

	var preCache = function(type, imageList, startIndex, imagesToCache, timeout) {
		if (!timeout) {
			//Set default timeout, millisec
			timeout = 1500;
		}
		var t = setTimeout(function(){
			var no = 0;
			for (i=0, len=imageList.length; i < len; i++) {
				if (i < startIndex) {
					continue;
				}
				if (type == BOOK) {
					var imagetuple = imageList[i];
					getImage(imagetuple[0]);
					getImage(imagetuple[1]);
				}
				else 
				if (type == SPIRAL) {
					getImage(imageList[i]);
				}

				no = no + 1;
				if (no >= imagesToCache) {
					break;
				}
			}
		}, timeout); //setTimeout
	}

	// Public interface
	return {
	    BOOK: BOOK,
	    SPIRAL: SPIRAL,
		getImage: getImage,
		preCache: preCache
	}

};


//============================================================
// SpiralViewer
var SpiralViewer = {}
SpiralViewer.ImageList = [];
SpiralViewer.ImageIndex = 0;
SpiralViewer.ImageCache = new ImageCache()

SpiralViewer.Open = function(ImageList, SrcURL)
{
	SpiralViewer.ImageList = ImageList;

	SpiralViewer.UpdateImage(0);
	
    $('#Video').hide();
    $('#SpiralViewer_BackButton').hide();
    $('#Cloak').show();
    $('#SpiralViewer').show();    
	
    // Check if we should show/hide download link
	if (SrcURL) {
		$('.DownloadButton').show();
		$('.DownloadButton').attr('data-src', SrcURL.replace("/fv/", "/fd/"));
	}
	else {
		$('.DownloadButton').hide();
		$('.DownloadButton').attr('data-src', null);
	}

	// Pre-cache N images
	SpiralViewer.ImageCache.preCache(BookViewer.ImageCache.SPIRAL, SpiralViewer.ImageList, 1, 40);
	

};

SpiralViewer.Close = function()
{
    $('#Video').show();
    $('#Cloak').hide();
    $('#SpiralViewer').hide();    
    $('#SpiralViewer_ForwardButton').show();    
	/* Upgraded to a cached implementation 
	* $('#SpiralViewer_Paper_Image').attr('src', null);
	*/
	$('#SpiralViewer_Paper').empty();
	$("#SpiralViewer").removeClass("paper-view services letter");
	$("#SpiralViewer_BackButton").removeClass("trigger-txt");
	$("#SpiralViewer_Paper").css({"width":"","margin-left":""});
};

SpiralViewer.GoForward = function()
{
if(SpiralViewer.ImageIndex + 2 == SpiralViewer.ImageList.length)
{
$("#SpiralViewer_ForwardButton").hide();//hide the forward button.
}
if(SpiralViewer.ImageIndex ==0)
$("#SpiralViewer_BackButton").show();//hide the forward button.

	if(SpiralViewer.ImageIndex + 1 >= SpiralViewer.ImageList.length)
	{
		SpiralViewer.UpdateImage(SpiralViewer.ImageList.length - 1);
		
	}
	else
		SpiralViewer.UpdateImage(SpiralViewer.ImageIndex + 1);
};

SpiralViewer.GoBack = function()
{
if(SpiralViewer.ImageIndex  == 1)
{$("#SpiralViewer_BackButton").hide();//hide the forward button.
}
if(SpiralViewer.ImageIndex  < SpiralViewer.ImageList.length)
$("#SpiralViewer_ForwardButton").show();//hide the forward button.
	if(SpiralViewer.ImageIndex <= 0)
		SpiralViewer.UpdateImage(0);
	else
		SpiralViewer.UpdateImage(SpiralViewer.ImageIndex - 1);
};

SpiralViewer.UpdateImage = function(index)
{
	SpiralViewer.ImageIndex = index;
	/* Upgraded to a cached implementation 
	if(index < 0)
		$('#SpiralViewer_Paper_Image').attr('src', null);
	else
		$('#SpiralViewer_Paper_Image').attr('src', SpiralViewer.ImageList[index]);
	*/
	$('#SpiralViewer_Paper').empty();
	// Retrieve image from a cache
	if(index >= 0) {
		$('#SpiralViewer_Paper').append(BookViewer.ImageCache.getImage(SpiralViewer.ImageList[index]));
	}
};

//============================================================
//  BookViewer
var BookViewer = {}
BookViewer.ImageList = [];  //Actually a list of 2-tuples
BookViewer.ImageIndex = 0;
BookViewer.ImageCache = new ImageCache()


BookViewer.Open = function(ImageList, SrcURL)
{
	// Reset the Image List
	BookViewer.ImageList = [];

	var l = null;
	for(i=0; i<ImageList.length; i+=2)
	{
		
		BookViewer.ImageList.push([ImageList[i], i+1<ImageList.length ? ImageList[i+1] : null])

	}

	if(typeof localStorage.ImgIndex != 'undefined' && localStorage.ImgIndex!=null && localStorage.ImgIndex!="")
		BookViewer.UpdateImage(parseInt(localStorage.ImgIndex));
	else
	    BookViewer.UpdateImage(0);
	   
    $('#Video').hide();
    $('#Cloak').show();
    $('#BookViewer').show();    

    // Check if we should show/hide download link
	if (SrcURL) {
		$('.DownloadButton').show();
		$('.DownloadButton').attr('data-src', SrcURL.replace("/fv/", "/fd/"));
	}
	else {
		$('.DownloadButton').hide();
		$('.DownloadButton').attr('data-src', null);
	}


	// Pre-cache N images
	BookViewer.ImageCache.preCache(BookViewer.ImageCache.BOOK, BookViewer.ImageList, 1, 40);

};

BookViewer.Close = function()
{
  //  $('#Video').show();
   // $('#Cloak').hide();
    //$('#BookViewer').hide();    
	/* Upgraded to a cached implementation 
	$('#BookViewer_PageLeft').attr('src', null);
	$('#BookViewer_PageRight').attr('src', null);
	*/
	$('#BookViewer_PageLeft').empty();
	$('#BookViewer_PageRight').empty();
	$('#book-close-v').show();
	$('#book-wrapper-v').hide();
	$("#table-of-index-block").removeClass("toi-active");
 
};

BookViewer.GoForward = function()
{
	if(BookViewer.ImageIndex + 1 >= BookViewer.ImageList.length)
	{
		BookViewer.UpdateImage(BookViewer.ImageList.length - 1);  // set to end
		localStorage.ImgIndex =BookViewer.ImageIndex;
	}
	else
	{
		BookViewer.UpdateImage(BookViewer.ImageIndex + 1); // or increment
		localStorage.ImgIndex =BookViewer.ImageIndex;
	}
	
   if ($('#BookViewer_PageRight img').attr('src') == "images/ultimate-plan/161.png"){
	{
 	$('#BookViewer_PageLeft').empty();
	$('#BookViewer_PageRight').empty();
	$('#book-close-v').show();
	$('#book-wrapper-v').hide(); 
};
}

if ($('#BookViewer_PageRight img').attr('src') == "images/ultimate-plan/5.png"){
	$('#table-of-index').clone().insertBefore('#BookViewer_PageRight img');
	
	
		
		
		}
		$("#table-of-index-block").removeClass("toi-active");
};

BookViewer.GoBack = function()
{
	if(BookViewer.ImageIndex <= 0)	//Set to beginning
	{
		BookViewer.UpdateImage(0);
		localStorage.ImgIndex =0;
	}
	else
	{
		BookViewer.UpdateImage(BookViewer.ImageIndex - 1);  // or decrement
		localStorage.ImgIndex =BookViewer.ImageIndex;
	}
	
if ($('#BookViewer_PageRight img').attr('src') == "images/ultimate-plan/5.png"){
	$('#table-of-index').clone().insertBefore('#BookViewer_PageRight img');
				}
				$("#table-of-index-block").removeClass("toi-active");
};

BookViewer.UpdateImage = function(index)
{
	BookViewer.ImageIndex = index;

	$('#BookViewer_PageLeft').empty();
	$('#BookViewer_PageRight').empty();
	
	// If out of bounds, return
	if(index < 0 || index >= BookViewer.ImageList.length)
		return;
	
	var imagetuple = BookViewer.ImageList[index];

	// Retrieve image from a cache.  If null is part of the tuple (eg, last page), then a blank image will be returned.
	$('#BookViewer_PageLeft').append(BookViewer.ImageCache.getImage(imagetuple[0]));
	$('#BookViewer_PageRight').append(BookViewer.ImageCache.getImage(imagetuple[1]));

};





var BCViewer = {}

BCViewer.Open = function(SrcURL)
{
    $('#Video').hide();
    $('#Cloak').show();
    $('#BCViewer').show();    
	
	// Check if we should show/hide download link
	if (SrcURL) {
		$('.DownloadButton').show();
		$('.DownloadButton').attr('data-src', SrcURL.replace("/fv/", "/fd/"));
	}
	else {
		$('.DownloadButton').hide();
		$('.DownloadButton').attr('data-src', null);
	}
};

BCViewer.Close = function()
{
    $('#BCViewer').hide();    
    $('#Cloak').hide();
    $('#Video').show();
};


var Video2Viewer = {}

Video2Viewer.Open = function()
{
    $('#Video').hide();
    $('#Cloak').show();
    $('#Video2Viewer').show();    
    $('#Video2').show();
};

Video2Viewer.Close = function()
{
    $('#Video2Viewer').hide();    
    $('#Video2').hide();
    $('#Cloak').hide();
    $('#Video').show();
};


var LetterViewer = {}

LetterViewer.Open = function(ImageURL, SrcURL)
{
	$('#LetterViewer_Paper_Image').attr('src', ImageURL);
    $('#Video').hide();
    $('#Cloak').show();
    $('#LetterViewer').show();    

    // Check if we should show/hide download link
	if (SrcURL) {
		$('.DownloadButton').show();
		$('.DownloadButton').attr('data-src', SrcURL.replace("/fv/", "/fd/"));
	}
	else {
		$('.DownloadButton').hide();
		$('.DownloadButton').attr('data-src', null);
	}

};

LetterViewer.Close = function()
{
    $('#LetterViewer').hide();    
	$('#LetterViewer_Paper_Image').attr('src', null);
    $('#Cloak').hide();
    $('#Video').show();
};


//============================================================
//  ClipboardViewer
var ClipboardViewer = {}

ClipboardViewer.Open = function()
{
    $('#Video').hide();
    $('#Cloak').show();
    $('#ClipboardViewer').show();    

};

ClipboardViewer.Close = function()
{
    $('#Video').show();
    $('#Cloak').hide();
    $('#ClipboardViewer').hide();    
};
//============================================================
//  Flipbook Viewer

$('#id').click(function(e)
{
    $('#Video').hide();
    $('#Cloak').show();
    $('#flipbook').show();    

});

$('#id-close').click(function(e)
{
    $('#Cloak').hide();  
    $('#flipbook').hide();  

});

ClipboardViewer.Close = function()
{
    $('#Video').show();
    $('#Cloak').hide();
    $('#ClipboardViewer').hide();    
};

$(document).ready( function () {
  
	$('#SpiralViewer_CloseButton').click(SpiralViewer.Close);
	$('#SpiralViewer_ForwardButton').click(SpiralViewer.GoForward);
	$('#SpiralViewer_BackButton').click(function(){
	SpiralViewer.GoBack();
	if($(this).hasClass("trigger-txt"))
		{
			papertext();
		}
	
	});

	$('#BookViewer_CloseButton').click(BookViewer.Close);
	$('#BookViewer_ForwardButton').click(BookViewer.GoForward);
	$('#BookViewer_BackButton').click(BookViewer.GoBack);

	$('#BCViewer_CloseButton').click(BCViewer.Close);
	
	$('#Video2Viewer_CloseButton').click(Video2Viewer.Close);
	
	$('#LetterViewer_CloseButton').click(function(){
	LetterViewer.Close();
	$("#LetterViewer_Paper_Image").css("margin-left", "");
	$("#LetterViewer_Paper").css({"width":"","margin-left":""});
	});
	$('#ClipboardViewer_CloseButton').click(ClipboardViewer.Close);

 	// Handle document download
	$('.DownloadButton').click(function(){
			var src="https://www.dedicateddevelopers.com/OutsourcingRiskReductionKit/download.php?d="+$(this).attr('data-src');
		$(this).attr('data-src') && window.open(src, '_blank');
		return false;
	});

	$('.VCardDownloadButton').click(function(){
		$(this).attr('href') && window.open($(this).attr('href').attr("download","download"));
		return false;
	});

	var activeViewer = null;

	// Handle keyboard events
	$(document).keyup(function(e) {
		try {
			switch (e.keyCode) {
				// Close any open viewers on escape
				case 27:
					activeViewer.Close();
					break;
				//Left arrow, 37
				case 37:
					activeViewer.GoBack();
					break;
				//Right arrow, 39
				case 39:
					activeViewer.GoForward();
					break;
			}
			
		}
		catch(e) {
			// do nothing
		}
	});

	SPOpen = function(Images, Src)
	{
		if(Images.length == 1) {
			LetterViewer.Open(Images, Src);
			return LetterViewer;
		}
		else {
			SpiralViewer.Open(Images, Src);
			return SpiralViewer
		}
	};


	if(LoadData.BusinessCardURI)
		$('#BusinessCard').click(function(e) { e.preventDefault(); activeViewer = BCViewer; BCViewer.Open(LoadData.BusinessCardSrc); });
	
	if(true)
		$('#Video2').click(function(e) { e.preventDefault(); activeViewer = Video2Viewer; Video2Viewer.Open(); });
	
	
	if(LoadData.LeftReportURIs)
		$('#LeftReport').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.LeftReportURIs, LoadData.LeftReportSrc); });
	
	if(LoadData.LetterURI)
		$('#Letter').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.LetterURI, LoadData.LetterSrc);
		$("#SpiralViewer").addClass("paper-view letter");
		$("#SpiralViewer_BackButton").addClass("trigger-txt");

		papertext();
		}); 

	
	if(LoadData.RightBookURIs)
		$('#RightBook').click(function(e) { e.preventDefault(); activeViewer = BookViewer; BookViewer.Open(LoadData.RightBookURIs, LoadData.RightBookSrc); });

	if(LoadData.Folder1URIs)
		$('#Folder1').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.Folder1URIs, LoadData.Folder1Src); });	

	if(LoadData.Folder2URIs)
		$('#Folder2').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.Folder2URIs, LoadData.Folder2Src); 
		$("#SpiralViewer").addClass("paper-view letter");
		});

	if(LoadData.Folder3URIs)
		$('#Folder3').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.Folder3URIs, LoadData.Folder3Src); 
		$("#SpiralViewer").addClass("paper-view services");
		$("#SpiralViewer_Paper").css({"width":"1100px","margin-left":"-574px"});});

	if(LoadData.Folder4URIs)
		$('#Folder4').click(function(e) { e.preventDefault(); activeViewer = SPOpen(LoadData.Folder4URIs, LoadData.Folder4Src);
		$("#LetterViewer_Paper").css({"width":"900px","margin-left":"-490px"}); });
		$("#LetterViewer").addClass("certificate"); 

	$('#Clipboard').click(function(e) { 
		e.preventDefault(); 
		activeViewer = ClipboardViewer; ClipboardViewer.Open();

	});
	$('#ClipboardBtn').click(function(e) { 
		e.preventDefault(); 

		if ($('#ClipboardBtn').data('NextURL') == 'close') {
			ClipboardViewer.Close();
			return false;
		}
		else 
		if ($('#ClipboardBtn').data('NextURL')) {
			window.location = $('#ClipboardBtn').data('NextURL');
			return false;
		}

		$.post(
			'/ShockBox/FormHitAjax',
            {
              ShockBox_ESID: LoadData.ShockBox_ESID,
              Company: $('#ClipboardForm input[name=Company]').val(),
              FirstName: $('#ClipboardForm input[name=FirstName]').val(),
              LastName: $('#ClipboardForm input[name=LastName]').val(),
              Address1: $('#ClipboardForm input[name=Address1]').val(),
              Address2: $('#ClipboardForm input[name=Address2]').val(),
              City: $('#ClipboardForm input[name=City]').val(),
              State: $('#ClipboardForm input[name=State]').val(),
              Zip: $('#ClipboardForm input[name=Zip]').val(),
              Country: $('#ClipboardForm select[name=Country]').val(),
              Phone: $('#ClipboardForm input[name=Phone]').val(),
              Email: $('#ClipboardForm input[name=Email]').val(),
              Comments: $('#ClipboardForm textarea[name=AdditionalComments]').val(),
              Field1: $('#ClipboardForm input[name=Field1]').val(),
              Field2: $('#ClipboardForm input[name=Field2]').val(),
              Field3: $('#ClipboardForm input[name=Field3]').val()
            },
            function(data){
            	/*
            	* API is returing the following:
            	* 
            	* Success: False, Message: "Error Message"
            	* OR
            	* Success: True, Action: 'Redirect', NextURL: 'http:...'
            	* OR
            	* Success: True, Action: 'Message', Headline: ..., Paragraph: ..., NextURL: 'close' or 'http:'
            	* Actually, if NextURL is None, the button should just say "close" and close the window.
            	*/

            	if(! data.Success){
	            	alert(data.Message);
            	}
            	else {
            		if (data.Action == 'Redirect') {
            			window.location = data.NextURL;
            		}
            		else if (data.Action == 'ShowMessage') {
            			$('#ClipboardForm form').remove();
            			$('#ClipboardForm').prepend($(
            			  '<h1>' + data.Headline + '</h1>' +
            			  '<p>' + data.Paragraph + '</p>'
            			));
            		}
            		if (data.NextURL == null) {
            			$('#ClipboardBtn').data('NextURL', 'close');
            			$('#ClipboardBtn').text('Close');
            		}
            		else if (data.NextURL) {
            			$('#ClipboardBtn').data('NextURL', data.NextURL);
            		}
            	}

            },
            'json'
		);
	});
	

	$("#AudioPlayer").hide();
	/* if(LoadData.AudioURI) {
	    
        var mplayer = new MediaElementPlayer('#AudioPlayerAudio', {
			success: function(media, node, player) {
			// player.paused: this will be undefined since it's the player with buttons
			// media.paused: this will be a real value since it's the underlying mediaelement

			$('#AudioLink').click(function(e) { 
				e.preventDefault(); 
				
				// Make audio player visible
				$('.mejs-container').css('z-index', 1001);
				$("#AudioPlayer").show();

				if (media.paused) 
					player.play(); 
				else 
					player.pause(); 
			});

		}});
		
		//$('audio').mediaelementplayer({autoplay:false});
	} */
	
	
	
});

/*
var pathname =  window.location.href;
var name = pathname.split("=");
console.log(name);
var uname=name[1];
console.log(uname);
var udate=name[2];
console.log(udate);
var uTime=name[3];
console.log(uTime	);
var advisorName=uname.split("&");
var advisordate=udate.split("&");
$('#desk-name').text(decodeURI(advisorName[0]));
$('#udate').text(advisordate[0]);
$('#uTime').text(uTime);

*/


$('#b-card1').hide();
$('#b-card2').hide();
$('#card-Forward1').hide();
$('#card-Back').hide();
$('#card-Back1').hide();

/*
$('#card-Forward').click(function()
{
$('#b-card').hide();
$('#b-card1').show();
$(this).hide();
$('#card-Forward1').show();
$('#card-Back').show();
});

$('#card-Forward1').click(function()
{
$('#b-card1').hide();
$('#b-card2').show();
$(this).hide();
$('#card-Back').hide();
$('#card-Back1').show();
});

$('#card-Back').click(function()
{
$('#b-card').show();
$('#b-card1').hide();
$(this).hide();
$('#card-Forward').show();
$('#card-Forward1').hide();
});

$('#card-Back1').click(function()
{
$('#b-card2').hide();
$('#b-card1').show();
$(this).hide();
$('#card-Back').show();
$('#card-Forward1').show();
});

*/

$(function(){
var pathname =  window.location.href;
var name = pathname.split("=");
var uname=name[1];
var lname=name[2];
var uDate=name[3];
//var ytcode=name[4];
var fName=uname.split("&");
var lastname=lname.split("&");
var edate=uDate.split("&");
 edate=decodeURI(edate[0]);
 edate=edate.split("+");
 
 var month='';
 
switch(parseInt(edate[0]))
 {
 case 1:
 month='January';
 break
 case 2:
 month='February';
 break
 case 3:
 month='March';
 break;
 case 4:
 month='April';
 break;
 case 5:
 month='May';
 break;
 case 6:
 month='June';
 break;
 case 7:
 month='July';
 break;
 case 8:
 month='August';
 break;
  case 9:
  month='September';
 break;
 case 10:
 month='October';
 break;
 case 11:
 month='November';
 break;
 case 12:
 month='December';
 break;
 default:
 month= edate[0];
 
}
 edate=month + " " + edate[1] + ", "+ edate[2] ; 
$('#desk-name').text(decodeURI(fName[0]));
$('#desk-name').append('&nbsp;');
$('#desk-name').append(decodeURI(lastname[0]));
//$('#udate').text(lastname[0]);
$('#paper-date').hide();
$('#paper-date').text(edate);
/* if(ytcode != "")
{
$('#yt-video iframe').attr("src","//www.youtube.com/embed/"+ ytcode +"?rel=0&amp;controls=1&amp;showinfo=0");
} */
});

function papertext()
{
var dname = $("#desk-name").html();
var nvalue = dname.split("&nbsp;");
$('<h3 id="paper-name"></h3>').insertAfter('#SpiralViewer_Paper img');
$('#paper-name').text(decodeURI(nvalue[0]));
$("#paper-date").clone().insertAfter('#paper-name');
$(".letter #paper-date").show();
};


function UpdateBookPage(CurrentIndex)
{
  BookViewer.UpdateImage(BookViewer.ImageIndex = CurrentIndex);
  $("#table-of-index-block").removeClass("toi-active");
 
}

$('#RightBook').click(function(){

$("#table-of-index-block").removeClass("toi-active");

if ($('#BookViewer_PageRight img').attr('src') == "images/ultimate-plan/5.png"){
	$('#table-of-index').clone().insertBefore('#BookViewer_PageRight img');
}

$("#BookViewer_toi").click(function(){
  $("#table-of-index-block").toggleClass("toi-active");
}); 

 

$('#Video').hide();
 setTimeout(function(){
$('#book-wrapper-v').fadeIn(300);
$('#book-wrapper-v').css('z-index', '5');
$('#book-open-v').css('position', 'static');
//$('#book-open-v').css('display', 'none');
$('#book-open-v').fadeOut(700);

if ($('#BookViewer_PageRight img').attr('src') == "images/ultimate-plan/5.png"){
	$('#table-of-index').clone().insertBefore('#BookViewer_PageRight img');
	}

}, 5000);
});

$('#ToiClose').click(function(){
$("#table-of-index-block").removeClass("toi-active");
});
 







