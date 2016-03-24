{	
	//pre-load e3 nav
	
	homeOn = new Image()
	homeOn.src ="/images/e3/e3_menuicon_home_on.gif"
	homeOff = new Image()
	homeOff.src ="/images/e3/e3_menuicon_home_off.gif"
	
	domainOn = new Image()
	domainOn.src ="/images/e3/e3_menuicon_domain_on.gif"
	domainOff = new Image()
	domainOff.src ="/images/e3/e3_menuicon_domain_off.gif"
	
	wscOn = new Image()
	wscOn.src ="/images/e3/e3_menuicon_wsc_on.gif"
	wscOff = new Image()
	wscOff.src ="/images/e3/e3_menuicon_wsc_off.gif"
	
	hostingOn = new Image()
	hostingOn.src ="/images/e3/e3_menuicon_hosting_on.gif"
	hostingOff = new Image()
	hostingOff.src ="/images/e3/e3_menuicon_hosting_off.gif"
	
	auctionOn = new Image()
	auctionOn.src ="/images/e3/e3_menuicon_auction_on.gif"
	auctionOff = new Image()
	auctionOff.src ="/images/e3/e3_menuicon_auction_off.gif"
	
	toolboxOn = new Image()
	toolboxOn.src ="/images/e3/e3_menuicon_toolbox_on.gif"
	toolboxOff = new Image()
	toolboxOff.src ="/images/e3/e3_menuicon_toolbox_off.gif"
	
	resellerOn = new Image()
	resellerOn.src ="/images/e3/e3_menuicon_reseller_on.gif"
	resellerOff = new Image()
	resellerOff.src ="/images/e3/e3_menuicon_reseller_off.gif"
	
	idprotectOn = new Image()
	idprotectOn.src ="/images/e3/e3_menuicon_idprotect_on.gif"
	idprotectOff = new Image()
	idprotectOff.src ="/images/e3/e3_menuicon_idprotect_off.gif"
	
	tvOn = new Image()
	tvOn.src ="/images/e3/e3_menuicon_tv_on.gif"
	tvOff = new Image()
	tvOff.src ="/images/e3/e3_menuicon_tv_off.gif"
	
	monitorOn = new Image()
	monitorOn.src ="/images/e3/e3_menuicon_monitor_on.gif"
	monitorOff = new Image()
	monitorOff.src ="/images/e3/e3_menuicon_monitor_off.gif"
	
	certsOn = new Image()
	certsOn.src ="/images/e3/e3_menuicon_certs_on.gif"
	certsOff = new Image()
	certsOff.src ="/images/e3/e3_menuicon_certs_off.gif"
	
	trafficonlyOn = new Image()
	trafficonlyOn.src ="/images/e3/e3_menuicon_trafficonly_on.gif"
	trafficonlyOff = new Image()
	trafficonlyOff.src ="/images/e3/e3_menuicon_trafficonly_off.gif"
	
	emailOn = new Image()
	emailOn.src ="/images/e3/e3_menuicon_epk_on.gif"
	emailOff = new Image()
	emailOff.src ="/images/e3/e3_menuicon_epk_off.gif"
	 
}

function turnOn(menuItem, imageColor) {
	  if (document.images)
      document.images[menuItem].src = eval(imageColor + 'On.src');
}

function blankIt(menuItem) {
document.images[menuItem].src = "/images/blank.gif";
}

function switchOn(imageName) {
  if (document.images)
     document.images[imageName].src = eval(imageName + 'On.src');
}
		  
function switchOff(imageName) {
  if (document.images)
     document.images[imageName].src = eval(imageName + 'Off.src');
}