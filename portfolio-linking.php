<?php
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$title_folder = basename($actual_link);
	$title_set = rtrim($title_folder,"header.php");
	$ttitle=trim($title_set);
  //echo $ttitle;

/*
if($ttitle =='super-cool-learning-tools'){
	$previous_portfolio="gymsource/";
	$next_portfolio="trick-it-out-lacrosse/";
}
*/
if($ttitle =='trick-it-out-lacross'){
	$previous_portfolio="doctors-beyond/";
	$next_portfolio="shuttle-rydez/";
}
/*
elseif($ttitle =='mayday-alarm'){
	$previous_portfolio="trick-it-out-lacrosse/";
	$next_portfolio="shuttle-rydez/";
}*/

elseif($ttitle =='shuttle-rydez'){
	$previous_portfolio="trick-it-out-lacrosse/";
	$next_portfolio="gorilla-glass/";
}

elseif($ttitle =='gorilla-glass'){
	$previous_portfolio="shuttle-rydez/";
	$next_portfolio="numinav/";
}
elseif($ttitle =='numinav'){
	$previous_portfolio="gorilla-glass/";
	$next_portfolio="demand-products/";
}
elseif($ttitle =='demand-products'){
	$previous_portfolio="numinav/";
	$next_portfolio="kls/";
}
elseif($ttitle =='kls'){
	$previous_portfolio="demand-products/";
	$next_portfolio="cut-time/";
}
elseif($ttitle =='cut-tim'){
	$previous_portfolio="kls/";
	$next_portfolio="wild-kitchen/";
}
elseif($ttitle =='wild-kitchen'){
	$previous_portfolio="cut-time/";
	$next_portfolio="sane-solution/";
}
elseif($ttitle =='sane-solution'){
	$previous_portfolio="wild-kitchen/";
	$next_portfolio="paddle-partner/";
}
elseif($ttitle =='paddle-partn'){
	$previous_portfolio="sane-solution/";
	$next_portfolio="fat-burning-man/";
}
elseif($ttitle =='fat-burning-man'){
	$previous_portfolio="paddle-partner/";
	$next_portfolio="montessori-scholars/";
}
elseif($ttitle =='montessori-scholars'){
	$previous_portfolio="fat-burning-man/";
	$next_portfolio="here-to-gamble/";
}
elseif($ttitle =='here-to-gambl'){
	$previous_portfolio="montessori-scholars/";
	$next_portfolio="getmomentum/";
}
elseif($ttitle =='getmomentum'){
	$previous_portfolio="here-to-gamble/";
	$next_portfolio="his-every-action/";
}
elseif($ttitle =='his-every-action'){
	$previous_portfolio="getmomentum/";
	$next_portfolio="gymsource/";
}
elseif($ttitle =='gymsourc'){
	$previous_portfolio="his-every-action/";
	$next_portfolio="audvisor/";
}
elseif($ttitle =='doctors-beyon'){
	$previous_portfolio="audvisor/";
	$next_portfolio="trick-it-out-lacrosse/";
}

elseif($ttitle =='audviso'){
	$previous_portfolio="gymsource/";
	$next_portfolio="doctors-beyond/";
}

else{}
?>
 

