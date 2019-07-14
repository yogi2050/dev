<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=11" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2012-03-13T19:25:30+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=11</id>
<entry>
<author><name><![CDATA[Alek]]></name></author>
<updated>2012-03-13T19:25:30+00:00</updated>
<published>2012-03-13T19:25:30+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2310#p2310</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2310#p2310"/>
<title type="html"><![CDATA[PERL and CGI • ]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2310#p2310"><![CDATA[
Recently i have encountered the CGI script in unrecognized directory problem. It seems to me i have put invalid extensions. Are there any file extensions there apart from .pl or .cgi.? <br /><br />Thanks,<br />Regards.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14830">Alek</a> — Tue Mar 13, 2012 7:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Gabrielle99]]></name></author>
<updated>2012-03-12T19:26:24+00:00</updated>
<published>2012-03-12T19:26:24+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2309#p2309</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2309#p2309"/>
<title type="html"><![CDATA[PERL and CGI • »]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2309#p2309"><![CDATA[
Thanks for sharinf the post. I appreciate it!!<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14753">Gabrielle99</a> — Mon Mar 12, 2012 7:26 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[typomaniac]]></name></author>
<updated>2012-03-10T00:58:37+00:00</updated>
<published>2012-03-10T00:58:37+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2077&amp;p=2305#p2305</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2077&amp;p=2305#p2305"/>
<title type="html"><![CDATA[PERL and CGI • Drag n Drop]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2077&amp;p=2305#p2305"><![CDATA[
I need to know how to take a list which originates in a mysql db and use drag n drop to reorder the list(or even as shown below...reorder table cells) and save it to the database. The scheme for getting the list is no problem but I'm lost past that point.<br /><br />          &lt;table&gt;<br /><br />[code]my $sth=$dbh-&gt;prepare(&quot;SELECT list_item,list_order from table&quot;);<br />$sth-&gt;execute();<br />while($ref=$sth-&gt;fetchrow_hashref()){<br />         <br />print qq~<br />            &lt;tr&gt;<br />              &lt;td&gt;<br />                $ref-&gt;{'list_item'}<br />              &lt;/td&gt;<br />            &lt;/tr&gt;<br />~;<br />            }<br />print qq~<br />          &lt;/table&gt; <br />~;[/code]<br />My project is to build a photo gallery and I have the workings in mind how to do it but this part has me stuck. Any guidance would sure be appreciated.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14820">typomaniac</a> — Sat Mar 10, 2012 12:58 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Arjun]]></name></author>
<updated>2011-06-04T15:08:09+00:00</updated>
<published>2011-06-04T15:08:09+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2214#p2214</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2214#p2214"/>
<title type="html"><![CDATA[PERL and CGI • »]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=2214#p2214"><![CDATA[
i have problem in running CGI programs<br /><br />when i try to run cgi program with the command <blockquote class="uncited"><div><br />perl hello.cgi<br /></div></blockquote><br /><br />say the program is :<br /><blockquote class="uncited"><div><br />#!/usr/bin/perl<br /><br />print &quot;Content-type:text/html\r\n\r\n&quot;;<br />print '&lt;html&gt;';<br />print '&lt;head&gt;';<br />print '&lt;title&gt;Hello Word - First CGI Program&lt;/title&gt;';<br />print '&lt;/head&gt;';<br />print '&lt;body&gt;';<br />print '&lt;h2&gt;Hello Word! This is my first CGI program&lt;/h2&gt;';<br />print '&lt;/body&gt;';<br />print '&lt;/html&gt;';<br /><br />1;<br /></div></blockquote><br /><br />it prints the program as it is in windows as well as in Linux<br /><br />The same problem i am facing with python CGI<br />Need help, how to execute the perl as well as python CGI script so that is gets executed as in browser<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14216">Arjun</a> — Sat Jun 04, 2011 3:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2007-08-24T17:18:53+00:00</updated>
<published>2007-08-24T17:18:53+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=266#p266</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=266#p266"/>
<title type="html"><![CDATA[PERL and CGI • Do you have any problem related to CGI ?]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=227&amp;p=266#p266"><![CDATA[
Hi Friends!<br /><br />Please post your problems related to CGI and I will answer them.....<br /><br /><br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Fri Aug 24, 2007 5:18 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2007-07-05T19:42:45+00:00</updated>
<published>2007-07-05T19:42:45+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=93&amp;p=113#p113</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=93&amp;p=113#p113"/>
<title type="html"><![CDATA[PERL and CGI • A complete tutorial on PERL and CGI]]></title>

<category term="PERL and CGI" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=11" label="PERL and CGI"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=93&amp;p=113#p113"><![CDATA[
Hi!<br /><br />Check our tutorial on CGI and PERL. Everything is illustrated with examples.<br /><br /><!-- m --><a class="postlink" href="http://www.tutorialspoint.com/perl/perl_cgi.htm">http://www.tutorialspoint.com/perl/perl_cgi.htm</a><!-- m --><br /><br /><br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Thu Jul 05, 2007 7:42 pm</p><hr />
]]></content>
</entry>
</feed>