{	
	//pre-load e3 nav
	
	homeOn = new Image()
	homeOn.src ="/images/bulk/bulk_menuicon_on.gif"
	homeOff = new Image()
	homeOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	domainOn = new Image()
	domainOn.src ="/images/bulk/bulk_menuicon_on.gif"
	domainOff = new Image()
	domainOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	wscOn = new Image()
	wscOn.src ="/images/bulk/bulk_menuicon_on.gif"
	wscOff = new Image()
	wscOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	hostingOn = new Image()
	hostingOn.src ="/images/bulk/bulk_menuicon_on.gif"
	hostingOff = new Image()
	hostingOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	auctionOn = new Image()
	auctionOn.src ="/images/bulk/bulk_menuicon_on.gif"
	auctionOff = new Image()
	auctionOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	toolboxOn = new Image()
	toolboxOn.src ="/images/bulk/bulk_menuicon_on.gif"
	toolboxOff = new Image()
	toolboxOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	resellerOn = new Image()
	resellerOn.src ="/images/bulk/bulk_menuicon_on.gif"
	resellerOff = new Image()
	resellerOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	idprotectOn = new Image()
	idprotectOn.src ="/images/bulk/bulk_menuicon_on.gif"
	idprotectOff = new Image()
	idprotectOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	tvOn = new Image()
	tvOn.src ="/images/bulk/bulk_menuicon_on.gif"
	tvOff = new Image()
	tvOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	monitorOn = new Image()
	monitorOn.src =""
	monitorOff = new Image()
	monitorOff.src =""
	
	certsOn = new Image()
	certsOn.src ="/images/bulk/bulk_menuicon_on.gif"
	certsOff = new Image()
	certsOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	trafficonlyOn = new Image()
	trafficonlyOn.src ="/images/bulk/bulk_menuicon_on.gif"
	trafficonlyOff = new Image()
	trafficonlyOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	emailOn = new Image()
	emailOn.src ="/images/bulk/bulk_menuicon_on.gif"
	emailOff = new Image()
	emailOff.src ="/images/bulk/bulk_menuicon_off.gif"
	
	blogOn = new Image()
	blogOn.src ="/images/bulk/bulk_menuicon_on.gif"
	blogOff = new Image()
	blogOff.src ="/images/bulk/bulk_menuicon_off.gif"
	 
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