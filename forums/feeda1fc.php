<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=18&amp;t=1969" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2009-03-05T13:09:08+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=18&amp;t=1969</id>
<entry>
<author><name><![CDATA[dlarez]]></name></author>
<updated>2009-03-05T13:09:08+00:00</updated>
<published>2009-03-05T13:09:08+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065"/>
<title type="html"><![CDATA[Prototype Form with Request]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065"><![CDATA[
IÂ´m working with the following code to process a form without refreshing the page and showing a message. That iÂ´m still working on. since I have 2 forms in the html, iÂ´d like to know how to send the form name as a parameter to trigger the function, and to process the datafields from each form (separately of course).<br /><br />HTML FILE:<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;script&gt;<br />&lt;!-- For dissapearing message working with DWÂ´s Effects<br />function timedMsg()<br />{<br />var t1=setTimeout(&quot;MM_effectAppearFade('show', 1000, 100, 0, false)&quot;,4000);<br /><br /><br />}<br /><br />function MM_effectAppearFade(targetElement, duration, from, to, toggle)<br />{<br />Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});<br />}<br />//--&gt;<br />&lt;/script&gt;<br />&lt;script&gt;<br />&lt;!-- For processing the request<br /><br />function sendRequest() {<br /><br />new Ajax.Request(&quot;save.php&quot;, <br />{ <br />method: 'post', <br />postBody: 'field1='+ $F('field1'),<br />onComplete: showResponse <br />});<br />}<br /><br />function showResponse(req){<br />$('show').innerHTML= req.responseText;<br />MM_effectAppearFade('show', 1000, 0, 100, false);<br />timedMsg();<br /><br />}<br />&lt;/script&gt;<br /><br />&lt;script type=&quot;text/javascript&quot; src=&quot;../js/prototype.js&quot;&gt;&lt;/script&gt;<br />&lt;script src=&quot;../SpryAssets/SpryEffects.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;<br /><br />&lt;body&gt;<br />&lt;form id=&quot;test&quot; onSubmit=&quot;return false;&quot;&gt;<br />&lt;input type=&quot;text&quot; name=&quot;field1&quot; id=&quot;field1&quot; &gt;<br />&lt;input type=&quot;submit&quot; value=&quot;submit&quot; onClick=&quot;sendRequest()&quot;&gt;<br /><br />&lt;/form&gt;<br />        <br />        &lt;form id=&quot;test2&quot; onSubmit=&quot;return false;&quot;&gt;<br />&lt;input type=&quot;text&quot; name=&quot;field1&quot; id=&quot;field1&quot; &gt;<br />&lt;input type=&quot;submit&quot; value=&quot;submit&quot; onClick=&quot;sendRequest()&quot;&gt;<br /><br />&lt;/form&gt;<br /><br />&lt;div id=&quot;show&quot;&gt;&lt;/div&gt;<br />&lt;/body&gt;<br /><br />&lt;/html&gt;<br /><br />------------------<br />PHP FILE ('save.php')<br /><br />&lt;?php<br /><br />if($_POST[&quot;field1&quot;] == &quot;&quot;)<br />echo &quot;name is empty&quot;;<br />else<br />echo &quot;you typed &quot;.$_POST[&quot;field1&quot;];<br />?&gt;<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=13745">dlarez</a> — Thu Mar 05, 2009 1:09 pm</p><hr />
]]></content>
</entry>
</feed>