<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=12&amp;t=2359" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-03-08T20:45:02+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=12&amp;t=2359</id>
<entry>
<author><name><![CDATA[spluskhan]]></name></author>
<updated>2013-03-08T20:45:02+00:00</updated>
<published>2013-03-08T20:45:02+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788"/>
<title type="html"><![CDATA[Help php code]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2359&amp;p=2788#p2788"><![CDATA[
suppose i have 10 products in my database <br />Example:<br />iphone 2 - iphone 3g - laptop i3 - laptop i7 - nokia n96 etc<br /><br />when i enter iphone in my search i see all records stored in database thats my prob!<br /><br />what i want ?<br />suppose if i enter laptop i7 or laptop then i get result for laptop i7 or laptop <br /><br />here is my code..<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;?php<br />// Connects to your Database<br />mysql_connect(&quot;host.com&quot;, &quot;userr&quot;, &quot;pass&quot;) or die(mysql_error());<br />mysql_select_db(&quot;products&quot;) or die(mysql_error()); &#91;/font&#93;&#91;/color&#93;<br />&#91;color=#000000&#93;&#91;font=verdana, geneva, lucida,&#93;$data = mysql_query(&quot;SELECT * FROM Products&quot;)<br />or die(mysql_error());<br />Print &quot;&lt;table border cellpadding=3&gt;&quot;;<br />while($info = mysql_fetch_array( $data ))<br />{<br />Print &quot;&lt;tr&gt;&quot;;<br />Print &quot;&lt;th&gt;Name:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'name'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;new:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'new_price'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;old:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'old_proce'&#93; . &quot;&lt;/td&gt; &quot;;<br />Print &quot;&lt;th&gt;faulty:&lt;/th&gt; &lt;td&gt;&quot;.$info&#91;'Faulty_price'&#93; . &quot; &lt;/td&gt;&lt;/tr&gt;&quot;;<br />}<br />Print &quot;&lt;/table&gt;&quot;;<br />?&gt;</code></dd></dl><br /><br />if any one have better code then please give me tankxx<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17272">spluskhan</a> — Fri Mar 08, 2013 8:45 pm</p><hr />
]]></content>
</entry>
</feed>