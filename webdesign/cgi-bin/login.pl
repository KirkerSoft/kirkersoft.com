#!/usr/bin/perl -w

&ParseIt(*in);
$UN = $in{'UN'};
$PW = $in{'PW'};

print "Content-type: text/html\n\n";
&Header();
if ($UN eq 'update')
	{ &Error('Updates will take between 24-48 hours.<BR>Thank you.'); }
elsif ($UN eq 'wsiab' && $PW eq '064250')
	{ &WSiaB(); }
elsif ($UN eq 'mobileliving' && $PW eq 'diamond')
	{ &Mobile(); }
elsif ($UN eq 'furniture' && $PW eq 'mavin')
	{ &Lifestyles(); }
elsif ($UN eq 'georgeballard' && $PW eq 'collections')
	{ &GeorgeBallard(); }
else
	{ &Error('Invalid LogIn'); }
&Body();
&Footer();
exit;

##-----------------------------------------##
sub  Lifestyles
	{
        $domains = "furniturebylifestyles.com";        $domainpw = "mavin";
        $company = "Furniture by Lifestyles";
        $contact = "Brian Correa";        $email = "designman46\@sbcglobal.net";        $phone = "925-251-0057";
        $emailurl = "";        $emailun = "";        $emailpw = "";
        $ftpurl = "furniturebylifestyles.com";        $ftpun = "furnitur";        $ftppw = "mavin";
        $webalizerurl = "www.furniturebylifestyles.com/webalizer/";
        $sharedsslurl = "";
        $frontpageurl = "furniturebylifestyles.com";        $frontpageun = "furniture";        $frontpagepw = "mavin";
        return;
        }

##-----------------------------------------##
sub  Mobile
	{
        $domains = "teammobileliving.com, teammobileliving.net, trucknsuvs.com, (trucktopcenter.com)";        $domainpw = "diamond";
        $company = "Mobile Living Truck Tops";
        $contact = "Scott Johnson";        $email = "scottj\@teammobileliving.com";        $phone = "925-689-5454";
        $emailurl = "mail.wsiab.net";        $emailun = "mobileliving\@wsiab.net";        $emailpw = "diamond";
        $ftpurl = "sgwin3.com";        $ftpun = "trucktop";        $ftppw = "diamond";
        $webalizerurl = "";
        $sharedsslurl = "";
        $frontpageurl = "trucktopcenter.com";        $frontpageun = "trucktop";        $frontpagepw = "diamond";
        return;
        }

##-----------------------------------------##
sub  GeorgeBallard
	{
        $domains = "georgeballard.com";        $domainpw = "collections";
        $company = "George Ballard Company";
        $contact = "Rick Wolcott";        $email = "rwolcott\@georgeballard.com";        $phone = "925-677-0300";
        $emailurl = "mail.wsiab.net";        $emailun = "varies";        $emailpw = "varies";
        $ftpurl = "";        $ftpun = "";        $ftppw = "";
        $webalizerurl = "www.georgeballard.com/webalizer/";
        $sharedsslurl = "georgeballard.c4.ixwebhosting.com";
        $frontpageurl = "georgeballard.com";        $frontpageun = "georgeballard";        $frontpagepw = "collections";
        return;
        }

##-----------------------------------------##
sub  Rozner
	{
        $domains = "bradrozner.com";        $domainpw = "realestate";
        $company = "";
        $contact = "Brad Rozner";        $email = "bradrozner\@hotmail.com";        $phone = "925-351-5335";
        $emailurl = "";        $emailun = "";        $emailpw = "";
        $ftpurl = "bradrozner.com";        $ftpun = "bradr";        $ftppw = "realestate";
        $webalizerurl = "www.bradrozner.com/webalizer/";
        $sharedsslurl = "";
        $frontpageurl = "bradrozner.com";        $frontpageun = "bradr";        $frontpagepw = "realestate";
        return;
        }

##-----------------------------------------##
sub  WSiaB
	{
        $domains = "wsiab.net, kirkerenterprises.com";        $domainpw = "whatever";
        $company = "Kirker Enterprises";
        $contact = "John Lester";        $email = "johnl\@kirkersoft.com";        $phone = "925-351-5323";
        $emailurl = "mail.wsiab.net";        $emailun = "mobile\@wsiab.net";        $emailpw = "asdfasdf";
        $ftpurl = "wsiab.net";        $ftpun = "wsiab642";        $ftppw = "pa1na55";
        $webalizerurl = "www.wsiab.net/webalizer/";
        $sharedsslurl = "wsiab.c4.ixwebhosting.com/";
        $frontpageurl = "";        $frontpageun = "";        $frontpagepw = "";
        return;
        }

##-----------------------------------------##
sub  Body
	{
        print "<tr><td colspan=2><input type=hidden name=email value=\"".$email."\"><div align=center><h2>Client Update</h2></div></td></tr>";
        print "<tr><td>Domains:</td><td>".$domains;
        if (length($domainpw) > 2)
        	{ print "<BR><A Href=\"http://access.enom.com\" Target=\"_blank\">Manage</A> (PW:".$domainpw.")"; }
        print "</td></tr>";
        print "<tr><td>Add Domain:</td><td><Input type=text name=add-domain></td></tr>";
        print "<tr><td>Company:</td><td><Input type=text name=company value=\"".$company."\"></td></tr>";
        print "<tr><td>Contact:</td><td><Input type=text name=contact value=\"".$contact."\"></td></tr>";
        print "<tr><td>Email:</td><td><Input type=text name=email value=\"".$email."\"></td></tr>";
        print "<tr><td>Phone:</td><td><Input type=text name=phone value=\"".$phone."\"></td></tr>";
        print "<tr><td colspan=2><div align=center><Input type=submit value=\"Request Update\"></div></td></tr>";
        if (length($emailurl) > 2)
        	{
                print "<tr><td>WebMail URL:</td><td><A Target=_blank Href=http://".$emailurl.">".$emailurl."</A></td></tr>";
                print "<tr><td>WebMail U/N:</td><td>".$emailun."</td></tr>";
                print "<tr><td>WebMail P/W:</td><td>".$emailpw."</td></tr>";
                }
        if (length($ftpurl) > 2)
        	{
                print "<tr><td>FTP URL:</td><td><A Target=_blank Href=ftp://".$ftpurl.">".$ftpurl."</A></td></tr>";
                print "<tr><td>FTP U/N:</td><td>".$ftpun."</td></tr>";
                print "<tr><td>FTP P/W:</td><td>".$ftppw."</td></tr>";
                }
        if (length($webalizerurl) > 2)
        	{ print "<tr><td>Webalizer:</td><td><A Target=_blank Href=http://".$webalizerurl.">".$webalizerurl."</A></td></tr>"; }
        if (length($sharedsslurl) > 2)
        	{ print "<tr><td>Shared SSL:</td><td><A Target=_blank Href=https://".$sharedsslurl.">".$sharedsslurl."</A></td></tr>"; }
        if (length($frontpageurl) > 2)
        	{
                print "<tr><td>MS FrontPage URL:</td><td>".$frontpageurl."</A></td></tr>";
                print "<tr><td>MS FrontPage U/N:</td><td>".$frontpageun."</td></tr>";
                print "<tr><td>MS FrontPage P/W:</td><td>".$frontpagepw."</td></tr>";
                }
	return;
	}

##-----------------------------------------##
sub  Header
	{
	print <<"ENDPRINT";
<html><head><title>KirkerSoft - </title>
		<style><!--
body,td,a,p,.h{font-family:arial,sans-serif}
body  { color: #333; font-size: small; line-height: 140%; background: #fff url("../images/grgrad.gif") repeat-x; margin: 0 20px 2em }
a:link{color:#039}
a:visited{color:#666}
a:hover{color:#333}
a:active{color:#000}
img,table{border:0}
#sf{width:100%}
#frame{width:564px; margin:0 auto}
--></style>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<LINK REL="SHORTCUT ICON" HREF="http://www.wsiab.net/favicon.ico"></head>
<body>
		<center>
			<table id="frame" width="700" border="0" cellpadding="0" cellspacing="0"><tbody><tr><td><img src="../images/clear.gif" height="20" width="1"></td></tr><tr><td><table cellpadding="0" cellspacing="0"><tbody><tr><td><img alt="KirkerSoft Start" src="../images/title.gif" height="116" width="440"></td><td style="background: transparent url(../images/title_bg.gif) repeat-x scroll 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="100%"></td><td><img src="../images/logo1.gif" height="116" width="105"></td><td><img src="../images/logo2.gif" height="85" width="19"></td></tr></tbody></table></td></tr><tr><td><table border="0" cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td bgcolor="#dddddd"><img src="../images/clear.gif" height="1" width="1"></td><td width="100%">
											<div align="center">
												<table cellpadding="0" cellspacing="0">
													<tbody>
														<tr>
<td><img src="../images/clear.gif" height="1" width="40"></td>
<td width="100%">
	<table cellpadding="0" cellspacing="0" width="100%">
		<tbody>
			<tr>
				<td><!--End Header-->
                		<form action=\"formmail/formmail.cgi\"><input type=hidden name=recipient value=\"johnl\@wsiab.net\">
                                <input type=hidden name=subject value="Client Update"><input type=hidden name=redirect value=\"../login.pl?UN=update\">
ENDPRINT
	print "<!--END HEADER-->";
        print "<table border=0>";
	return;
	}

##-----------------------------------------##
sub  Footer
	{
        print "</table>";
	print "<!--BEGIN FOOTER-->";
	print <<"ENDPRINT";
				 </form>														<!--Begin Footer--></td>
																		</tr>
																	</tbody>
																</table>
															</td>
															<td><img src="../images/clear.gif" height="1" width="40"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</td><td bgcolor="#b0b0b0"><img src="../images/clear.gif" height="1" width="1"></td><td><img src="../images/clear.gif" height="1" width="19"></td></tr></tbody></table></td></tr><tr><td><table cellpadding="0" cellspacing="0"><tbody><tr><td valign="top"><img src="../images/footer1.gif" height="34" width="48"></td><td style="background: transparent url(../images/footer2.gif) repeat-x scroll 0%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial;" width="100%">&nbsp;</td><td valign="top"><img src="../images/footer3.gif" height="34" width="497"></td><td><img src="../images/clear.gif" height="1" width="19"></td></tr></tbody></table></td></tr><tr><td><table cellpadding="0" cellspacing="0" width="100%"><tbody><tr>
											<td>
										</td>
											<td><img src="../images/clear.gif" height="1" width="19"></td>
										</tr></tbody></table></td></tr></tbody></table>
		</center>
		<div align="left">
			<p>&copy;2006 <a href="http://www.kirkerenterprises.com">Kirker Enterprises</a></p>
		</div>
	</body></html>
ENDPRINT
	return;
	}

##-----------------------------------------##
sub  Error
	{
	my($error_msg) = @_;
	print "<center><br><br><h2>Error Was Encountered!</h2><hr>";
	print "<UL>$error_msg</UL>";
	print "<br><br><b><A Href=\"JAVASCRIPT\:history.back(-1)\;\">Fix Error</A></b></center>";
	&Footer();
	exit;
	}

##-----------------------------------------##
sub  ParseIt
	{
	if (@_)
		{
		local (*in) = @_;
		}
	local ($i, $loc, $key, $val);
	if ($ENV{'REQUEST_METHOD'} eq "GET")
		{
		$in = $ENV{'QUERY_STRING'};
		}
	elsif ($ENV{'REQUEST_METHOD'} eq "POST")
		{
		for ($i = 0; $i < $ENV{'CONTENT_LENGTH'}; $i++)
			{
			$in .= getc;
			}
		}
	else
		{
		&Error('Undefined Method');
		}
	@in = split(/&/,$in);
	foreach $i (0 .. $#in)
		{
		$in[$i] =~ s/\+/ /g;
		$in[$i] =~ s/%(..)/pack("c",hex($1))/ge;
		$loc = index($in[$i],"=");
		$key = uc substr($in[$i],0,$loc);
		$val = substr($in[$i],$loc+1);
		$in{$key} .= '\0' if (defined($in{$key}));
		$in{$key} .= $val;
		}
	return 1;
	}

##-----------------------------------------##
exit;

