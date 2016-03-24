#!/usr/bin/perl

use CGI qw(:standard);
use DBI;

my $serverName = "localhost";
my $serverPort = "3306";
my $serverUser = "root";
my $serverPass = "Pa1na55e5";
my $serverDb = "test";
my $serverTabl = "testing";

$dbh = DBI->connect("DBI:mysql:database=$serverDb;host=$serverName;
                     port=$serverPort",$serverUser,$serverPass);

my $SQL = <<"EOT";
select * from testing
EOT

my $cursor = $dbh->prepare($SQL);

$cursor->execute;

print "
<html>
<head>
  <title>Perl MySQL Example</title>
</head>
<body>
<p> Here are the machines in the DB </p>
<hr>
 <table>
   <tr><th>Machine Names</th></tr>\n";

   my @columns;
 while ( @columns = $cursor->fetchrow ) {
     print ( "     <tr>",( map { "<td>$_</td>" }
     @columns ) , "</tr>\n");
   }
print " </table>
<hr>
<p> ... and that's it!</p>
</body>
</html>
";

$cursor->finish;
$dbh->disconnect;
