<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=12" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-03-08T20:45:02+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=12</id>
<entry>
<author><name><![CDATA[spluskhan]]></name></author>
<updated>2013-03-08T20:45:02+00:00</updated>
<published>2013-03-08T20:45:02+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788"/>
<title type="html"><![CDATA[PHP Script • Help php code]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788"><![CDATA[
suppose i have 10 products in my database <br />Example:<br />iphone 2 - iphone 3g - laptop i3 - laptop i7 - nokia n96 etc<br /><br />when i enter iphone in my search i see all records stored in database thats my prob!<br /><br />what i want ?<br />suppose if i enter laptop i7 or laptop then i get result for laptop i7 or laptop <br /><br />here is my code..<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;?php<br />// Connects to your Database<br />mysql_connect(&quot;host.com&quot;, &quot;userr&quot;, &quot;pass&quot;) or die(mysql_error());<br />mysql_select_db(&quot;products&quot;) or die(mysql_error()); &#91;/font&#93;&#91;/color&#93;<br />&#91;color=#000000&#93;&#91;font=verdana, geneva, lucida,&#93;$data = mysql_query(&quot;SELECT * FROM Products&quot;)<br />or die(mysql_error());<br />Print &quot;&lt;table border cellpadding=3&gt;&quot;;<br />while($info = mysql_fetch_array( $data ))<br />{<br />Print &quot;&lt;tr&gt;&quot;;<br />Print &quot;&lt;th&gt;Name:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'name'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;new:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'new_price'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;old:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'old_proce'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;faulty:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'Faulty_price'&#93; . &quot; &lt;/td&gt;&lt;/tr&gt;&quot;;<br />}<br />Print &quot;&lt;/table&gt;&quot;;<br />?&gt;</code></dd></dl><br /><br />if any one have better code then please give me tankxx<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17272">spluskhan</a> — Fri Mar 08, 2013 8:45 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Oluwa]]></name></author>
<updated>2013-02-28T15:08:16+00:00</updated>
<published>2013-02-28T15:08:16+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2356&amp;p=2777#p2777</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2356&amp;p=2777#p2777"/>
<title type="html"><![CDATA[PHP Script • php codes for my oscommerce site]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2356&amp;p=2777#p2777"><![CDATA[
I have an OScommerce site<br />and I need all the product views<br />in the Best Viewed Products<br />report (/admin/<br />stats_products_viewed.php) reset<br />to '0'.<br />I need the php codes to do this<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16672">Oluwa</a> — Thu Feb 28, 2013 3:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mona14]]></name></author>
<updated>2013-02-01T15:40:10+00:00</updated>
<published>2013-02-01T15:40:10+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1997&amp;p=2527#p2527</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1997&amp;p=2527#p2527"/>
<title type="html"><![CDATA[PHP Script • ]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1997&amp;p=2527#p2527"><![CDATA[
Very useful.. i think this is the best thing for newbie<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16213">mona14</a> — Fri Feb 01, 2013 3:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[daniel88]]></name></author>
<updated>2013-01-30T10:21:17+00:00</updated>
<published>2013-01-30T10:21:17+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2517#p2517</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2517#p2517"/>
<title type="html"><![CDATA[PHP Script • »]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2517#p2517"><![CDATA[
well the error is that the mail() isnâ€™t used, if i use a if statement it just goes to the else part.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16162">daniel88</a> — Wed Jan 30, 2013 10:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[daniel88]]></name></author>
<updated>2013-01-22T11:03:46+00:00</updated>
<published>2013-01-22T11:03:46+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2490#p2490</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2490#p2490"/>
<title type="html"><![CDATA[PHP Script • »ï¿½]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2490#p2490"><![CDATA[
You cannot pass variable values from the current page javascript to the current page PHP code... PHP code runs at the server side and it doesn't know anything about what is going on on the client side.<br /><br />You need to pass variables to PHP code from html-form using another mechanism, such as submitting form on GET or POST methods.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16162">daniel88</a> — Tue Jan 22, 2013 11:03 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[micael]]></name></author>
<updated>2013-01-19T08:00:42+00:00</updated>
<published>2013-01-19T08:00:42+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2157&amp;p=2482#p2482</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2157&amp;p=2482#p2482"/>
<title type="html"><![CDATA[PHP Script • PHP File Uploading Script showing as text in browser]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2157&amp;p=2482#p2482"><![CDATA[
Hi,<br /><br />I'm a newbie at PHP and am trying to use the script &quot;PHP File Uploading&quot; within a WordPress Site.<br />However, after choosing file and clicking Upload file the uploader.php file is showing up in the browser as textâ€¦ I actually see the script.<br /><br />Any ideas why?<br /><br />BR,<br />Micael<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16269">micael</a> — Sat Jan 19, 2013 8:00 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shirley06]]></name></author>
<updated>2013-01-09T13:16:21+00:00</updated>
<published>2013-01-09T13:16:21+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=529&amp;p=2459#p2459</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=529&amp;p=2459#p2459"/>
<title type="html"><![CDATA[PHP Script • »]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=529&amp;p=2459#p2459"><![CDATA[
I have read your topics, which is covering all web development relating concepts, but San Jose web developing is much better than that and you have to learn them, to improve your developing skills, as well.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16214">shirley06</a> — Wed Jan 09, 2013 1:16 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[justinbellaa03]]></name></author>
<updated>2012-12-28T04:36:42+00:00</updated>
<published>2012-12-28T04:36:42+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=101&amp;p=2440#p2440</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=101&amp;p=2440#p2440"/>
<title type="html"><![CDATA[PHP Script • »]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=101&amp;p=2440#p2440"><![CDATA[
Hello,<br />I have visited this  php script forum. I am also beginner in php.so, that's forum is very beneficial for me and it gives me lots of information that will be very useful to me in the future.I have read this question but i am note able to give your answer right now,sorry for that.So i am giving you this expert link for your queries.<br />thanks.<br />----------------------<br />[url=http://www.ezdia.com/epad/ati-radeon-hd-5670-series-graphics-card-amd/6972/] ATI RADEON HD 5670 â€“ SERIES GRAPHICS CARDS FROM AMD [/url]<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16165">justinbellaa03</a> — Fri Dec 28, 2012 4:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Chester33]]></name></author>
<updated>2012-12-21T15:07:28+00:00</updated>
<published>2012-12-21T15:07:28+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2433#p2433</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2433#p2433"/>
<title type="html"><![CDATA[PHP Script • ]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2433#p2433"><![CDATA[
PHP is a powerful tool for making dynamic and interactive Web pages.<br />PHP is the widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.<br />In our PHP tutorial you will learn about PHP, and how to execute scripts on your server.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16134">Chester33</a> — Fri Dec 21, 2012 3:07 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[micheal.burns]]></name></author>
<updated>2012-09-28T17:28:59+00:00</updated>
<published>2012-09-28T17:28:59+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2377#p2377</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2377#p2377"/>
<title type="html"><![CDATA[PHP Script • ]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=29&amp;p=2377#p2377"><![CDATA[
you can also use sites mentioned below:<br /><br />Online Sources<br /><br />PHP 101: PHP For the Absolute Beginner<br />devzone(dot)zend(dot)com/node/view/id/627<br /><br />Server Side Coding : PHP &amp; MySQL Tutorials<br />www(dot)sitepoint(dot)com/subcat/php-tutorials<br /><br /><br /><br />www(dot)php-mysql-tutorial(dot)com/<br /><br />PHP Reference Manual<br />php(dot)net/<br /><br />Learn PHP Free<br />www(dot)learnphpfree(dot)com<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15690">micheal.burns</a> — Fri Sep 28, 2012 5:28 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[swarndeep]]></name></author>
<updated>2012-09-03T16:25:15+00:00</updated>
<published>2012-09-03T16:25:15+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1982&amp;p=2364#p2364</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1982&amp;p=2364#p2364"/>
<title type="html"><![CDATA[PHP Script • This is correct code]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1982&amp;p=2364#p2364"><![CDATA[
&lt;?php<br />$a;<br />$b;<br />$num;<br />echo &quot;Enter the First Value : &quot;;<br />echo &quot;Enter the Second Value : &quot;;<br />$num = $a + $b;<br />echo &quot;The Result is :&quot;$num;<br />?&gt;<br /><br />you have miss  the concadenation.  echo &quot;The Result is :.&quot;$num;<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15499">swarndeep</a> — Mon Sep 03, 2012 4:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shruti_sharma]]></name></author>
<updated>2012-09-03T11:37:05+00:00</updated>
<published>2012-09-03T11:37:05+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2363#p2363</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2363#p2363"/>
<title type="html"><![CDATA[PHP Script • Please send the error message..]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2363#p2363"><![CDATA[
Hi<br /><br />Please send the error message.. it will be easy to define the error and resolve.<br /><br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15494">shruti_sharma</a> — Mon Sep 03, 2012 11:37 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[shruti_sharma]]></name></author>
<updated>2012-09-02T20:54:21+00:00</updated>
<published>2012-09-02T20:54:21+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2362#p2362</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2362#p2362"/>
<title type="html"><![CDATA[PHP Script • How to pass javascript variable in PHP?]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2106&amp;p=2362#p2362"><![CDATA[
Hi<br /><br />How to pass javascript variable in PHP?<br /><br />Any help?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15494">shruti_sharma</a> — Sun Sep 02, 2012 8:54 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[nameranjeet]]></name></author>
<updated>2012-02-14T19:00:07+00:00</updated>
<published>2012-02-14T19:00:07+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2296#p2296</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2296#p2296"/>
<title type="html"><![CDATA[PHP Script • plz help what is error in this form]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2075&amp;p=2296#p2296"><![CDATA[
&lt;form action=&quot;newposting.php?mode=newtopic&amp;f=&lt;?php echo $generalGetValue; ?&gt;&quot; method=&quot;post&quot; name=&quot;post&quot; onSubmit=&quot;return checkForm(this)&quot;&gt;<br />&lt;table cellspacing=&quot;0&quot; width=&quot;100%&quot; class=&quot;forumline&quot;&gt;<br />&lt;tr&gt;&lt;td colspan=&quot;2&quot; class=&quot;row-header&quot;&gt;&lt;span&gt;Post a new topic&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;<br />&lt;?php<br />if(isset($inerror))<br />{<br />echo '&lt;tr&gt;&lt;td align=&quot;center&quot; colspan=&quot;2&quot;  width=&quot;22%&quot;&gt;&lt;span class=&quot;gen&quot;&gt;&lt;b&gt;';<br />echo $inerror; echo '&lt;/b&gt;&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;';<br />}<br />if(isset($sucemes))<br />{<br />echo '&lt;tr&gt;&lt;td align=&quot;center&quot; colspan=&quot;2&quot;  width=&quot;22%&quot;&gt;&lt;span class=&quot;gen&quot;&gt;&lt;b&gt;';<br />echo $sucemes; echo '&lt;/b&gt;&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;';<br />}<br />if((isset($subject))&amp;&amp; (isset($message))&amp;&amp; (isset($getid)))<br />{<br />echo '&lt;tr&gt;&lt;td align=&quot;center&quot; colspan=&quot;2&quot;  width=&quot;22%&quot;&gt;&lt;span class=&quot;gen&quot;&gt;&lt;b&gt;';<br />echo $subject.&quot;&lt;br&gt;&quot;.$message.&quot;&lt;br&gt;&quot;.$getid; echo '&lt;/b&gt;&lt;/span&gt;&lt;/td&gt;&lt;/tr&gt;';<br />}<br /><br />?&gt;<br />&lt;tr&gt;<br />&lt;td class=&quot;row1&quot; width=&quot;22%&quot;&gt;&lt;span class=&quot;gen&quot;&gt;&lt;b&gt;Subject&lt;/b&gt;&lt;/span&gt;&lt;/td&gt;<br />&lt;td class=&quot;row2&quot; width=&quot;78%&quot;&gt;&lt;input type=&quot;text&quot; name=&quot;subject&quot; size=&quot;45&quot; maxlength=&quot;60&quot; style=&quot;width:98%&quot; tabindex=&quot;2&quot; class=&quot;post&quot; value=&quot;&quot; /&gt;&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;tr&gt;&lt;td class=&quot;row1&quot; valign=&quot;top&quot;&gt;&lt;span class=&quot;gen&quot;&gt;&lt;b&gt;Message body&lt;/b&gt;&lt;/span&gt;&lt;/td&gt;<br /> &lt;td class=&quot;row2&quot; valign=&quot;top&quot; align=&quot;left&quot;&gt;<br /> &lt;textarea name=&quot;message&quot; rows=&quot;15&quot; cols=&quot;35&quot; wrap=&quot;virtual&quot; style=&quot;width:98%&quot; tabindex=&quot;4&quot; class=&quot;post&quot; &gt;&lt;/textarea&gt;<br />&lt;/span&gt;&lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;tr&gt;<br />&lt;td class=&quot;catBottom&quot; colspan=&quot;2&quot; align=&quot;center&quot;&gt; <br />    &lt;input type=&quot;submit&quot; name=&quot;postmessage&quot; class=&quot;mainoption&quot; value=&quot;Submit&quot; /&gt;<br />    &lt;/td&gt;<br />&lt;/tr&gt;<br />&lt;/table&gt;<br /><br />&lt;/form&gt;<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14586">nameranjeet</a> — Tue Feb 14, 2012 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[kala]]></name></author>
<updated>2011-11-27T20:43:29+00:00</updated>
<published>2011-11-27T20:43:29+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2270#p2270</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2270#p2270"/>
<title type="html"><![CDATA[PHP Script • php mail function using windows and zend]]></title>

<category term="PHP Script" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=12" label="PHP Script"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2066&amp;p=2270#p2270"><![CDATA[
&lt;html&gt;<br /> &lt;head&gt;<br /> &lt;title&gt;Send a Mail&lt;/title&gt;<br /> &lt;/head&gt;<br />  &lt;body&gt;<br />&lt;center&gt;<br />  &lt;table border=&quot;1&quot; bgcolor=&quot;green&quot;&gt;<br />  &lt;tr&gt;<br />  &lt;td&gt;<br /> &lt;form name=&quot;form&quot; method=&quot;post&quot; action=&quot;mailsend.php&quot;&gt;<br />  <br />To: &lt;input type=&quot;text&quot; name=&quot;to&quot;&gt; &lt;br&gt;<br /><br />From: &lt;input type=&quot;text&quot; name=&quot;from&quot;&gt; &lt;br&gt;<br /><br />Subject: &lt;input type=&quot;text&quot; name=&quot;subject&quot;&gt; &lt;br&gt;<br /><br />Message:&lt;br&gt; &lt;textarea name=&quot;message&quot; rows=4 cols=25&gt; &lt;/textarea&gt; &lt;br&gt;<br /> <br />&lt;input type=&quot;submit&quot; value=&quot;send&quot;&gt;<br /> <br /> &lt;/center&gt;<br />&lt;/td&gt;<br />&lt;/tr&gt;<br /> &lt;/body&gt;<br />&lt;/html&gt;<br /><br />&lt;?php<br />ini_set(&quot;display_errors&quot;, &quot;1&quot;);error_reporting(E_ALL);<br /><br />//PHP allows you to send e-mails directly from a script.<br /><br />$to = $_POST['to'];<br />$message =stripslashes( $_POST['message']);<br /><br />//stripslashes() function to remove embedded backslashes in the message string that are<br />//used as escape characters for embedded apostrophes, quotation marks and such.<br /><br />$subject = $_POST['subject'];<br />$from = $_POST['from'];<br /><br />echo $to;<br />echo '&lt;br&gt;';<br />echo $message;<br />echo '&lt;br&gt;';<br />echo $subject;<br />echo '&lt;br&gt;';<br />echo $from;<br />echo '&lt;br&gt;';<br /><br /><br /><br />if (   isset( $to ,$message ,$subject ,$from)  ) {<br /><br />$headers = &quot;From:  $from \r\n&quot;;<br /><br />$ret_value =  mail($to , $subject , $message , $headers ) ;<br /><br />if ($ret_value ==  true ) {<br />    echo 'Success Mail sent!';    <br />}<br />else {<br />    echo 'Failed to send Mail !';    <br />}<br /><br />}<br />else { echo 'Please fill the values ..';  }<br /><br />//Returns TRUE if the mail was successfully accepted for delivery, FALSE otherwise.<br />//It is important to note that just because the mail was accepted for delivery, it does NOT mean the mail will actually reach the intended destination.<br /><br />?&gt;<br /><br /><br />Above is complete script  my error is <br />Warning: mail() [function.mail]: Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() in C:\Program Files (x86)\Zend\Apache2\htdocs\workspace\sendMail\mailsend.php on line 30<br />Failed to send Mail !<br /><br />SMTP localhost<br />smtp_port - 25<br />sendmai_from <!-- e --><a href="mailto:admin@localhost.com">admin@localhost.com</a><!-- e -->[/img]<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14495">kala</a> — Sun Nov 27, 2011 8:43 pm</p><hr />
]]></content>
</entry>
</feed>