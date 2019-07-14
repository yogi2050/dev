<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?mode=topics" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-04-03T19:42:15+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?mode=topics</id>
<entry>
<author><name><![CDATA[DeepakJakhwal]]></name></author>
<updated>2013-04-03T19:42:15+00:00</updated>
<published>2013-04-03T19:42:15+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2375&amp;p=2815#p2815</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2375&amp;p=2815#p2815"/>
<title type="html"><![CDATA[General Discussion • difference between interface and abstractions]]></title>

<category term="General Discussion" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=2" label="General Discussion"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2375&amp;p=2815#p2815"><![CDATA[
please explain difference between interface and abstractions.<br /><br />And how static work in this two concepts.?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18873">DeepakJakhwal</a> — Wed Apr 03, 2013 7:42 pm — Replies 0 — Views 1436</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[subratmca85]]></name></author>
<updated>2013-04-03T15:48:12+00:00</updated>
<published>2013-04-03T15:48:12+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2374&amp;p=2814#p2814</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2374&amp;p=2814#p2814"/>
<title type="html"><![CDATA[General Discussion • Can not delete a row in PHP]]></title>

<category term="General Discussion" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=2" label="General Discussion"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2374&amp;p=2814#p2814"><![CDATA[
Here is the codes:<br />&lt;?php<br />//error_reporting(0);<br /><br />$id = $_GET['id'];<br /><br />$sql= &quot;delete * From student WHERE rollno=$id&quot;;<br /><br />if(!mysqli_query($con,$sql))<br />  {<br />  die('Deletion failed...Please try again.'. mysqli_error());<br />  }<br />else<br />{<br />echo &quot;Record deleted successfully&quot;;<br />}<br />?&gt;<br />Please help...<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17923">subratmca85</a> — Wed Apr 03, 2013 3:48 pm — Replies 0 — Views 549</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[subratmca85]]></name></author>
<updated>2013-04-03T15:47:09+00:00</updated>
<published>2013-04-03T15:47:09+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2373&amp;p=2813#p2813</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2373&amp;p=2813#p2813"/>
<title type="html"><![CDATA[General Discussion • Can not update a row in PHP]]></title>

<category term="General Discussion" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=2" label="General Discussion"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2373&amp;p=2813#p2813"><![CDATA[
Here is the update codes:<br />&lt;?php<br /><br />//$id = $_GET['id'];<br /><br />if(isset($_POST['update']))<br />{<br />$sql= &quot;UPDATE student SET rollno='&quot;.$_POST[rollno].&quot;',name='&quot;.$_POST['name'].&quot;', phone='&quot;.$_POST[phone].&quot;',address='&quot;.$_POST['address'].&quot;',salary='&quot;.$_POST[salary].&quot;'<br />    WHERE rollno='&quot;.$rollno.&quot;'&quot;;<br /><br />if (!mysqli_query($con,$sql))<br />  {<br />  die('Updation failed...Please try again.'. mysqli_error());<br />  }<br />else<br />{<br />echo &quot;Database updated successfully&quot;;<br />}<br />}<br /><br />$result = mysqli_query($con,&quot;SELECT * FROM student order by rollno&quot;);<br /><br />echo &quot;&lt;table border='3' bgcolor='#FF66FF'&gt;<br />&lt;tr&gt;<br />&lt;th&gt;Roll&lt;/th&gt;<br />&lt;th&gt;Name&lt;/th&gt;<br />&lt;th&gt;Phone&lt;/th&gt;<br />&lt;th&gt;Address&lt;/th&gt;<br />&lt;th&gt;Salary&lt;/th&gt;<br />&lt;th&gt;Edit/Delete&lt;/th&gt;<br />&lt;/tr&gt;&quot;;<br /><br />while($row = mysqli_fetch_array($result))<br />  {<br />  echo &quot;&lt;tr&gt;&quot;;<br />  echo &quot;&lt;td&gt;&quot; . $row[rollno] . &quot;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;td&gt;&quot; . $row['name'] . &quot;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;td&gt;&quot; . $row[phone] . &quot;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;td&gt;&quot; . $row['address'] . &quot;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;td&gt;&quot; . $row[salary] . &quot;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;td colspan='6' align='center'&gt;&lt;a href=edit.php?id=&quot;.$row['rollno'].&quot;&gt;Edit&lt;/a&gt;&amp;nbsp;/&lt;a href=delete.php?id=&quot;.$row['rollno'].&quot;&gt;Delete&lt;/a&gt;&lt;/td&gt;&quot;;<br />  echo &quot;&lt;/tr&gt;&quot;;<br />  }<br /> echo &quot;&lt;/table&gt;&quot;;<br />?&gt;<br /><br />Please help...<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17923">subratmca85</a> — Wed Apr 03, 2013 3:47 pm — Replies 0 — Views 435</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[sohailbangash]]></name></author>
<updated>2013-04-01T13:38:10+00:00</updated>
<published>2013-04-01T13:38:10+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2372&amp;p=2810#p2810</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2372&amp;p=2810#p2810"/>
<title type="html"><![CDATA[Wireless Technology • How many user or CPE can be connected to Wimax]]></title>

<category term="Wireless Technology" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=21" label="Wireless Technology"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2372&amp;p=2810#p2810"><![CDATA[
Can some one let me know how many CPE or user can be connected to WIMAX base station and how many base station are required for coverage of 360 degree area or what kind of attena is required .<br /><br />Regards<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18725">sohailbangash</a> — Mon Apr 01, 2013 1:38 pm — Replies 0 — Views 1027</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[python1982]]></name></author>
<updated>2013-04-01T04:59:26+00:00</updated>
<published>2013-04-01T04:59:26+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2371&amp;p=2809#p2809</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2371&amp;p=2809#p2809"/>
<title type="html"><![CDATA[Python Programming • regular expression]]></title>

<category term="Python Programming" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=26" label="Python Programming"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2371&amp;p=2809#p2809"><![CDATA[
I want to remove the letters repeated that exceed over two consecutive letters with regular expressions, for example, replace gooood by good. someone can help me? <img src="http://www.tutorialspoint.com/forums/images/smilies/icon_redface.gif" alt=":oops:" title="Embarassed" />  .<br />thank you in advance<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18697">python1982</a> — Mon Apr 01, 2013 4:59 am — Replies 0 — Views 995</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[TSPksky]]></name></author>
<updated>2013-03-28T02:32:04+00:00</updated>
<published>2013-03-28T02:32:04+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2368&amp;p=2806#p2806</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2368&amp;p=2806#p2806"/>
<title type="html"><![CDATA[Python Programming • How do you apply the function in sort()?]]></title>

<category term="Python Programming" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=26" label="Python Programming"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2368&amp;p=2806#p2806"><![CDATA[
I need an exhaustive explanation of how to apply the function in sort().  I have seen references to &quot;key&quot; and &quot;lambda&quot;, but I am not able to find any documentation on how any of that works.<br /><br />Any and all tips or clues would be appreciated.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18416">TSPksky</a> — Thu Mar 28, 2013 2:32 am — Replies 0 — Views 297</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ashleyarly]]></name></author>
<updated>2013-03-23T10:39:15+00:00</updated>
<published>2013-03-23T10:39:15+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2366&amp;p=2804#p2804</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2366&amp;p=2804#p2804"/>
<title type="html"><![CDATA[C/C++ Programming • How important is it to master C language bfor proceeding for]]></title>

<category term="C/C++ Programming" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=28" label="C/C++ Programming"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2366&amp;p=2804#p2804"><![CDATA[
How important is it to master C language bfor proceeding for C++ java and other high level langgs?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18141">Ashleyarly</a> — Sat Mar 23, 2013 10:39 am — Replies 0 — Views 1032</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Ashleyarly]]></name></author>
<updated>2013-03-23T10:37:53+00:00</updated>
<published>2013-03-23T10:37:53+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2365&amp;p=2803#p2803</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2365&amp;p=2803#p2803"/>
<title type="html"><![CDATA[Suggestions • advice]]></title>

<category term="Suggestions" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=3" label="Suggestions"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2365&amp;p=2803#p2803"><![CDATA[
Look up - just a little.See it now, yep that's right - this forum is called Suggestions / Ideas.We don't care if they are dumb, we don't care if they have been posted before, we don't care if you don't like it.If you can't be constructive with your criticism - then don't post.Consider this a first and only warning.Thanks in advance for your co-operation.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18141">Ashleyarly</a> — Sat Mar 23, 2013 10:37 am — Replies 0 — Views 1332</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[thor0298]]></name></author>
<updated>2013-03-19T21:36:14+00:00</updated>
<published>2013-03-19T21:36:14+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2364&amp;p=2802#p2802</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2364&amp;p=2802#p2802"/>
<title type="html"><![CDATA[Python Programming • tkinter label frame]]></title>

<category term="Python Programming" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=26" label="Python Programming"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2364&amp;p=2802#p2802"><![CDATA[
I looked at some examples and made a little gui program where you enter a number and it goes into a file and gets some data back.<br /><br />Right now it prints the data to labelvariable.  I want this gui to look more professional, so I was trying get get labelframe to work.  When I try to add it in, I click run on pyscriptor and it just hangs.<br />I can't quite seem to figure out what is wrong.<br />I attached my original working code<br /><br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import Tkinter<br />from random import Random<br />file1 = open('survivor.txt')<br />final=&#91;&#93;<br />finalnum=&#91;&#93;<br />##int = 0<br />x = 0<br />for lineA in file1:<br />    final.append(lineA.rstrip() )<br />file1.close()<br /><br />while x &lt; len(final):<br />    finalnum.append(x)<br />    x = x+1<br /><br />class simpleapp_tk(Tkinter.Tk):<br />    def __init__(self,parent):<br />        Tkinter.Tk.__init__(self,parent)<br />        self.parent = parent<br />        self.initialize()<br /><br />    def initialize(self):<br /><br />        self.grid()<br /><br />        self.entryVariable = Tkinter.StringVar()<br />        self.entry = Tkinter.Entry(self,textvariable=self.entryVariable)<br />        self.entry.grid(column=0,row=0,sticky='EW')<br />        self.entry.bind(&quot;&lt;Return&gt;&quot;, self.OnPressEnter)<br />        self.entryVariable.set(u&quot;Enter Number.&quot;)<br /><br />        button = Tkinter.Button(self,text=u&quot;Randomize!&quot;,<br />                                command=self.OnButtonClick)<br />        button.grid(column=1,row=0)<br /><br />        self.labelVariable = Tkinter.StringVar()<br />        label = Tkinter.Label(self,textvariable=self.labelVariable,<br />                              anchor=&quot;w&quot;,fg=&quot;white&quot;,bg=&quot;blue&quot;)<br />        label.grid(column=0,row=1,columnspan=3,sticky='EW')<br />        self.labelVariable.set(u&quot;Survivors&quot;)<br /><br />        self.grid_columnconfigure(0,weight=1)<br />        self.resizable(True,False)<br />        self.update()<br />##        self.geometry(self.geometry())<br />        self.geometry('500x100-5+40')<br /><br />        self.entry.focus_set()<br />        self.entry.selection_range(0, Tkinter.END)<br /><br />    def OnButtonClick(self):<br />        file1 = open('survivor.txt')<br />        final=&#91;&#93;<br />        finalnum=&#91;&#93;<br />##        int = 0<br />        x = 0<br />        for lineA in file1:<br />            final.append(lineA.rstrip() )<br />        file1.close()<br /><br />        while x &lt; len(final):<br />            finalnum.append(x)<br />            x = x+1<br /><br />        num = 0<br />        finalnum = 0<br />        num =self.entryVariable.get()<br />        if (float(num) &lt; float((len(final)))):<br />##            self.labelVariable.set(len(final))<br />            finalnum = int(num)<br />            finalsurvivors = &#91;&#93;<br />            Random().shuffle(final)<br />            for count in range(0,finalnum):<br />                finalsurvivors.append(final&#91;count&#93;)<br />##            finalsurvivors = final&#91;finalnum&#93;<br />            self.labelVariable.set(finalsurvivors)<br /><br />        self.entry.focus_set()<br />        self.entry.selection_range(0, Tkinter.END)<br /><br />    def OnPressEnter(self,event):<br />        file1 = open('survivor.txt')<br />        final=&#91;&#93;<br />        finalnum=&#91;&#93;<br />##        int = 0<br />        x = 0<br />        for lineA in file1:<br />            final.append(lineA.rstrip() )<br />        file1.close()<br /><br />        while x &lt; len(final):<br />            finalnum.append(x)<br />            x = x+1<br /><br />        num = 0<br />        finalnum = 0<br />        num =self.entryVariable.get()<br />        if (float(num) &lt; float((len(final)))):<br />##            self.labelVariable.set(len(final))<br />            finalnum = int(num)<br />            finalsurvivors = &#91;&#93;<br />            Random().shuffle(final)<br />            for count in range(0,finalnum):<br />                finalsurvivors.append(final&#91;count&#93;)<br />##            finalsurvivors = final&#91;finalnum&#93;<br />            self.labelVariable.set(finalsurvivors)<br /><br />        self.entry.focus_set()<br />        self.entry.selection_range(0, Tkinter.END)<br /><br /><br />if __name__ == &quot;__main__&quot;:<br />    app = simpleapp_tk(None)<br />    app.title('Randomizer')<br />    app.mainloop()</code></dd></dl><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17878">thor0298</a> — Tue Mar 19, 2013 9:36 pm — Replies 0 — Views 291</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[neek]]></name></author>
<updated>2013-03-19T15:56:46+00:00</updated>
<published>2013-03-19T15:56:46+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2363&amp;p=2800#p2800</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2363&amp;p=2800#p2800"/>
<title type="html"><![CDATA[Suggestions • CSS examples are broken by site CSS]]></title>

<category term="Suggestions" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=3" label="Suggestions"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2363&amp;p=2800#p2800"><![CDATA[
Just something I noticed passing through, e.g.:<br /><br /><!-- m --><a class="postlink" href="http://www.tutorialspoint.com/css/css_border-collapse.htm">http://www.tutorialspoint.com/css/css_b ... llapse.htm</a><!-- m --><br /><br />There's an inline example that tries to demonstrate borders on tables, but they are overridden by more specific styles from tp.css.<br /><br />Suggest you guard your examples or change your site CSS so they don't clash <img src="http://www.tutorialspoint.com/forums/images/smilies/icon_smile.gif" alt=":)" title="Smile" /><br /><br />Nick<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17859">neek</a> — Tue Mar 19, 2013 3:56 pm — Replies 0 — Views 457</p><hr />
]]></content>
</entry>
</feed>