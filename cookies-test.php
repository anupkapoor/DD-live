<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Testing of cookies</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {


setTimeout(function(){

$('#ccc-notify').html('<div class="ccc-notify-text"><h3>Your choice regarding cookies on this site</h3><p>We use cookies to optimise site functionality and give you the best possible experience.</p></div><div class="ccc-notify-buttons"><button class="ccc-notify-button ccc-button-solid" onclick="CookieControl.notifyAccept()">Accept</button><button class="ccc-notify-button" onclick="CookieControl.open()">Cookie Preferences</button><span id="ccc-notify-dismiss" onclick="CookieControl.notifyDismiss()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg></span></div>');
$('#ccc-notify').attr('visible','visible');
}, 3000);



    
});
</script>

</head>
<body>
<h1>Testing of cookies</h1>
<script src="https://cc.cdn.civiccomputing.com/8.0/cookieControl-8.0.min.js" type="text/javascript"></script>
<script>
var config = {
apiKey: 'a3e368b0f3663a339c0f921bad9f723568db8918',
product: 'COMMUNITY',
optionalCookies: [
{
name: 'analytics',
label: 'Analytics',
description: '',
cookies: [],
onAccept : function(){},
onRevoke: function(){}
},{
name: 'marketing',
label: 'Marketing',
description: '',
cookies: [],
onAccept : function(){},
onRevoke: function(){}
},{
name: 'preferences',
label: 'Preferences',
description: '',
cookies: [],
onAccept : function(){},
onRevoke: function(){}
}
],

position: 'LEFT',
theme: 'DARK'
};

CookieControl.load( config );
</script>
</body>
</html>