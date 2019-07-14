<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=18" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2009-03-05T13:09:08+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=18</id>
<entry>
<author><name><![CDATA[dlarez]]></name></author>
<updated>2009-03-05T13:09:08+00:00</updated>
<published>2009-03-05T13:09:08+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065"/>
<title type="html"><![CDATA[AJAX • Prototype Form with Request]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1969&amp;p=2065#p2065"><![CDATA[
IÂ´m working with the following code to process a form without refreshing the page and showing a message. That iÂ´m still working on. since I have 2 forms in the html, iÂ´d like to know how to send the form name as a parameter to trigger the function, and to process the datafields from each form (separately of course).<br /><br />HTML FILE:<br />&lt;html&gt;<br />&lt;head&gt;<br />&lt;script&gt;<br />&lt;!-- For dissapearing message working with DWÂ´s Effects<br />function timedMsg()<br />{<br />var t1=setTimeout(&quot;MM_effectAppearFade('show', 1000, 100, 0, false)&quot;,4000);<br /><br /><br />}<br /><br />function MM_effectAppearFade(targetElement, duration, from, to, toggle)<br />{<br />Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});<br />}<br />//--&gt;<br />&lt;/script&gt;<br />&lt;script&gt;<br />&lt;!-- For processing the request<br /><br />function sendRequest() {<br /><br />new Ajax.Request(&quot;save.php&quot;, <br />{ <br />method: 'post', <br />postBody: 'field1='+ $F('field1'),<br />onComplete: showResponse <br />});<br />}<br /><br />function showResponse(req){<br />$('show').innerHTML= req.responseText;<br />MM_effectAppearFade('show', 1000, 0, 100, false);<br />timedMsg();<br /><br />}<br />&lt;/script&gt;<br /><br />&lt;script type=&quot;text/javascript&quot; src=&quot;../js/prototype.js&quot;&gt;&lt;/script&gt;<br />&lt;script src=&quot;../SpryAssets/SpryEffects.js&quot; type=&quot;text/javascript&quot;&gt;&lt;/script&gt;<br /><br />&lt;body&gt;<br />&lt;form id=&quot;test&quot; onSubmit=&quot;return false;&quot;&gt;<br />&lt;input type=&quot;text&quot; name=&quot;field1&quot; id=&quot;field1&quot; &gt;<br />&lt;input type=&quot;submit&quot; value=&quot;submit&quot; onClick=&quot;sendRequest()&quot;&gt;<br /><br />&lt;/form&gt;<br />        <br />        &lt;form id=&quot;test2&quot; onSubmit=&quot;return false;&quot;&gt;<br />&lt;input type=&quot;text&quot; name=&quot;field1&quot; id=&quot;field1&quot; &gt;<br />&lt;input type=&quot;submit&quot; value=&quot;submit&quot; onClick=&quot;sendRequest()&quot;&gt;<br /><br />&lt;/form&gt;<br /><br />&lt;div id=&quot;show&quot;&gt;&lt;/div&gt;<br />&lt;/body&gt;<br /><br />&lt;/html&gt;<br /><br />------------------<br />PHP FILE ('save.php')<br /><br />&lt;?php<br /><br />if($_POST[&quot;field1&quot;] == &quot;&quot;)<br />echo &quot;name is empty&quot;;<br />else<br />echo &quot;you typed &quot;.$_POST[&quot;field1&quot;];<br />?&gt;<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=13745">dlarez</a> — Thu Mar 05, 2009 1:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[navidl]]></name></author>
<updated>2008-09-03T00:39:36+00:00</updated>
<published>2008-09-03T00:39:36+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=988&amp;p=1081#p1081</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=988&amp;p=1081#p1081"/>
<title type="html"><![CDATA[AJAX • Drag and Drop using script.aculo.us]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=988&amp;p=1081#p1081"><![CDATA[
Hi<br />I am using the Drag and Drop functionality of script.aculo.us scripts.<br />It all works fine, but I need a minor change, when I drop an image in the drop box, the image gets aligned to exactly top/left corner of drop box. How can I change this?<br /><br />for example I want the dropped image be positions at x=10px, y=10px of drop box, how can I do that?<br /><br />Thanks<br />N.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=10185">navidl</a> — Wed Sep 03, 2008 12:39 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Cindy]]></name></author>
<updated>2008-07-17T00:54:45+00:00</updated>
<published>2008-07-17T00:54:45+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=946&amp;p=1029#p1029</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=946&amp;p=1029#p1029"/>
<title type="html"><![CDATA[AJAX • Ajax and callback]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=946&amp;p=1029#p1029"><![CDATA[
I am doing Ajax/JavaScript/Java/JSP coding for a client-server web application. The callback function defined by AJAX was working ok previously on some old LINUX workstation. Recently I moved the development to to a new LINUX system, the callback function didn't get the http response from the servlet where the http request was sent to. As I debug from Netbeans, the servlet did receive the http requst from javascript/Ajax, and it produced the xml response. Also I use Firebug to debug the javascript/AJax code. A breakpoint was set in the beginning of the callback. It seemed that the running didn't reach to the breakpoint (i.e. the callback) after the servlet produce the xml response. I am not sure if there is any setting missing in the new workstation, or in my development environment of the new workstation. Here is part of my javascript/ajax codes,<br /><br />   :<br />   :<br />// FUNCTION THAT CREATES A NEW AJAX OBJECT TO USE<br />XMLHttp = function() {<br />    self = this;<br />    if (typeof XMLHttpRequest != 'undefined')<br />        return new XMLHttpRequest();<br />    else if (window.ActiveXObject) {<br />        var avers = [&quot;Microsoft.XmlHttp&quot;, &quot;MSXML2.XmlHttp&quot;, &quot;MSXML2.XmlHttp.3.0&quot;,  &quot;MSXML2.XmlHttp.4.0&quot;, &quot;MSXML2.XmlHttp.5.0&quot;];<br />        for (var i = avers.length -1; i &gt;= 0; i--) {<br />            try {httpObj = new ActiveXObject(avers[i]);<br />            return httpObj;<br />            } catch(e) {}<br />        }<br />    }<br />    throw new Error('XMLHttp (AJAX) not supported');<br />}<br /><br />// AJAX FUNCTION THAT ESTABLISHES A BACKGROUND SESSION WITH SERVER<br />XMLHttp.prototype.get = function(url) {<br />    self.open('GET', url, true);<br />    self.onreadystatechange = function() { callback(self); }<br />    self.send(null);<br />}<br />      : <br />      :<br /><br />function requestA(url)<br />{<br />    logAjaxRequests = XMLHttp();<br />    logAjaxRequests.open(&quot;GET&quot;, encodeURI(url), false);<br />    logAjaxRequests.onreadystatechange = function() { callbackA(logAjaxRequests);}<br />    logAjaxRequests.send(null);    <br />}<br />      :<br />      :<br /><br />function callbackA(rqst) {<br />    var signalAJAXrequest = rqst;<br />  <br />    if (signalAJAXrequest.readyState == 4) {<br />        if (signalAJAXrequest.status == 200) {<br />           :<br />           <br />        }<br />    }<br />}<br />   <br />    :<br /><br />Please give me some hint about how this problem can be detected or solved. Thanks.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=9134">Cindy</a> — Thu Jul 17, 2008 12:54 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[cleary1981]]></name></author>
<updated>2008-06-12T09:52:08+00:00</updated>
<published>2008-06-12T09:52:08+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=860&amp;p=941#p941</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=860&amp;p=941#p941"/>
<title type="html"><![CDATA[AJAX • scriptaculus: creating a changeable drop area]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=860&amp;p=941#p941"><![CDATA[
Hi all,<br /><br />I am working on a project an im wrecking my brain with this drag and drop stuff. Im sure its prob really simple. What i am trying to do is drag objects onto a droppable area and once there they stay in that position. The main problem is that i want to be able to expand the dropable area as i dont want the objects to over lap.<br /><br />Any help would be greatly appreciated.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=8358">cleary1981</a> — Thu Jun 12, 2008 9:52 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[emike]]></name></author>
<updated>2008-03-31T12:08:56+00:00</updated>
<published>2008-03-31T12:08:56+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=688&amp;p=761#p761</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=688&amp;p=761#p761"/>
<title type="html"><![CDATA[AJAX • Replace dashes with other text]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=688&amp;p=761#p761"><![CDATA[
Iâ€™m trying to replace a dashed line with an answer after a â€œclick hereâ€<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=6039">emike</a> — Mon Mar 31, 2008 12:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[emike]]></name></author>
<updated>2008-03-28T18:25:50+00:00</updated>
<published>2008-03-28T18:25:50+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=759#p759</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=759#p759"/>
<title type="html"><![CDATA[AJAX • Scriptaculous HighlightEffect function]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=759#p759"><![CDATA[
Hereâ€™s what I have so far.<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;head&gt;<br />...<br />    &lt;script type=&quot;text/javascript&quot; src=&quot;/javascript/prototype.js&quot;&gt;&lt;/script&gt;<br />    &lt;script type=&quot;text/javascript&quot; src=&quot;/javascript/scriptaculous.js?load=effects&quot;&gt;&lt;/script&gt;<br />     &lt;script type=&quot;text/javascript&quot;&gt;<br />        function handleCheckLinks&#40;e&#41; &#123;<br />        var activator = e.findElement&#40;'a.answerChecker'&#41;;<br />        if &#40;!activator&#41;<br />        return;<br />        e.stop&#40;&#41;;<br />        activator.up&#40;'p'&#41;.previous&#40;'p'&#41;.down&#40;'span.answer'&#41;.highlight&#40;&#41;;<br />        &#125;<br /><br />        document.observe&#40;'click', handleCheckLinks&#41;;<br />    &lt;/script&gt;<br />...<br />&lt;/head&gt;<br /><br />&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;answerChecker&quot;&gt;Click here&lt;/a&gt; when you are finished.&lt;/p&gt;<br /><br />&lt;p class=&quot;Rightbar_body_green&quot;&gt;November and December are <br />wonderful months for gardening in the south. While residents <br />of northern states are more concerned with preparations for <br />winter, gardeners in southern states can enjoy natural <br />circumstances that enhance their efforts. <br />&lt;span class=&quot;answer&quot;&gt;Football enthusiasts in November <br />and December can enjoy the sport throughout the country.&lt;/span&gt; <br />Temperatures in the south are warm enough to grow abundant <br />amounts of flowers and vegetables. Plants and gardeners are <br />relatively free from the pesky bug populations that present <br />problems during the summer. If you enjoy gardening, you'll <br />find November and December good months in the south.&lt;/p&gt;<br /></code></dd></dl><br /><br />A few questions:<br />1. It doesnâ€™t work if the â€˜Click hereâ€™ sentence is before the main paragraph.<br />2. How do I change the color of the incorrect sentence?<br />3. I would also like the answer to remain highlighted after clicking â€˜Click hereâ€™.<br /><br />Please forgive my lack of knowledge. Iâ€™m very new to javascript.<br /><br />Thanks again,<br />Mike<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=6039">emike</a> — Fri Mar 28, 2008 6:25 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2008-03-28T17:34:59+00:00</updated>
<published>2008-03-28T17:34:59+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=758#p758</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=758#p758"/>
<title type="html"><![CDATA[AJAX • ]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=758#p758"><![CDATA[
Just put whatever line you want to highlight in &lt;div&gt;....&lt;/div&gt; tags and then in your hyperlink use onclick or whatever event you want to use to highlight the line.<br /><br />So simple buddy....<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Fri Mar 28, 2008 5:34 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[emike]]></name></author>
<updated>2008-03-28T02:24:03+00:00</updated>
<published>2008-03-28T02:24:03+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=754#p754</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=754#p754"/>
<title type="html"><![CDATA[AJAX • Scriptaculous HighlightEffect function to highlight sentenc]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=684&amp;p=754#p754"><![CDATA[
I need some help with the Scriptaculous HighlightEffect function to highlight one entire sentence of a paragraph. The onclick action needs to come from outside the paragraph. In the example below, the third sentence will be highlighted in red after clicking on the &quot;Click here to check your answer,&quot; sentence that follows the paragraph.<br /><br />For example:<br /><br />November and December are wonderful months for gardening in the south. While residents of northern states are more concerned with preparations for winter, gardeners in southern states can enjoy natural circumstances that enhance their efforts. Football enthusiasts in November and December can enjoy the sport throughout the country. Temperatures in the south are warm enough to grow abundant amounts of flowers and vegetables. Plants and gardeners are relatively free from the pesky bug populations that present problems during the summer. If you enjoy gardening, you'll find November and December good months in the south.<br /><br />Click here to check your answer.<br /><br /><br />Any ideas on how to do this? I'm new to script.aculo.us if it's not obvious. Just need a little help.<br /><br />Thanks,<br />Mike<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=6039">emike</a> — Fri Mar 28, 2008 2:24 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2007-07-05T19:47:11+00:00</updated>
<published>2007-07-05T19:47:11+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=95&amp;p=115#p115</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=95&amp;p=115#p115"/>
<title type="html"><![CDATA[AJAX • A simple and complete tutorial on AJAX]]></title>

<category term="AJAX" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=18" label="AJAX"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=95&amp;p=115#p115"><![CDATA[
Hi!<br /><br />If you are really serious to learn AJAX then check out our tutorial<br /><br /><!-- m --><a class="postlink" href="http://www.tutorialspoint.com/ajax">http://www.tutorialspoint.com/ajax</a><!-- m --><br /><br />You can explore another tutorial AJAX on Rails<br /><br /><!-- m --><a class="postlink" href="http://www.tutorialspoint.com/ruby-on-rails/rails-and-ajax.htm">http://www.tutorialspoint.com/ruby-on-r ... d-ajax.htm</a><!-- m --><br /><br /><br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Thu Jul 05, 2007 7:47 pm</p><hr />
]]></content>
</entry>
</feed>