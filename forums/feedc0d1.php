<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=25&amp;t=2003" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-04-02T12:08:25+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=25&amp;t=2003</id>
<entry>
<author><name><![CDATA[nguyenhai00dn]]></name></author>
<updated>2013-04-02T12:08:25+00:00</updated>
<published>2013-04-02T12:08:25+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811"/>
<title type="html"><![CDATA[Re: User Defined Method]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811"><![CDATA[
Hi Overcranked !<br /><br />You must declare method 'Method for counting white space' outside method main.<br /><br />You can test again.<br /><br />If you are not clear, I will help. Good luck !<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18792">nguyenhai00dn</a> — Tue Apr 02, 2013 12:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ajitpaswan]]></name></author>
<updated>2012-12-30T01:47:10+00:00</updated>
<published>2012-12-30T01:47:10+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443"/>
<title type="html"><![CDATA[[Solved] get characters, vowels, digits and whitespaces]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443"><![CDATA[
import java.io.BufferedReader;<br />import java.io.IOException;<br />import java.io.InputStreamReader;<br /><br />public class test {<br />public static void main(String[] args) {<br />System.out.print(&quot;Enter your name and press Enter: &quot;);<br />BufferedReader br = new BufferedReader(new InputStreamReader(System.in));<br />String name = null;<br />int length = 0, spaces = 0, vowels = 0, characters = 0, digits = 0;<br />try {<br />name = br.readLine();<br />if(name != null) {<br />length = name.length();<br />for(int i = 0; i &lt; length; i++) {<br />char x = name.charAt(i);<br />int cast = (int)x;<br />if(cast == 32) {<br />spaces = spaces + 1;<br />} else if(cast &gt;= 48 &amp;&amp; cast &lt;= 57) {<br />digits = digits + 1;<br />}  else if((cast &gt;= 65 &amp;&amp; cast &lt;= 90) || (cast &gt;= 97 &amp;&amp; cast &lt;= 122)) {<br />characters = characters + 1;<br />if(cast == 97 || cast == 101 || cast == 105 || cast == 111 || cast == 117<br />|| cast == 65 || cast == 69 || cast == 73 || cast == 79 || cast == 85) {<br />vowels = vowels + 1;<br />}<br />}<br />}<br />System.out.println(&quot;Total spaces are: &quot;+spaces);<br />System.out.println(&quot;Total characters are: &quot;+characters);<br />System.out.println(&quot;Total vowels are: &quot;+vowels);<br />System.out.println(&quot;Total digits are: &quot;+digits);<br />}<br />} catch (IOException e) {<br />System.out.println(&quot;Error!&quot;);<br />System.exit(1);<br />}<br />}<br />}<br /><br />OUTPUT : Enter your name and press Enter: 1ajit  2<br />Total spaces are: 2<br />Total characters are: 4<br />Total vowels are: 2<br />Total digits are: 2[/b]<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16143">ajitpaswan</a> — Sun Dec 30, 2012 1:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dragonfly6373]]></name></author>
<updated>2012-11-29T10:41:03+00:00</updated>
<published>2012-11-29T10:41:03+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419"/>
<title type="html"><![CDATA[Hibernate many-to-many]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419"><![CDATA[
hi everyone.<br /><br />I have some trouble about this relationship<br />I have 2 table student and cerfiticate which is many-to-many relationship. How can I list all studen have name like '%an%' and have cerfiticate A, B, C<br /><br />how can i do that?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16029">dragonfly6373</a> — Thu Nov 29, 2012 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Overcranked]]></name></author>
<updated>2010-04-07T16:31:29+00:00</updated>
<published>2010-04-07T16:31:29+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2134#p2134</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2134#p2134"/>
<title type="html"><![CDATA[User Defined Method]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2134#p2134"><![CDATA[
Whats the point of a forum if it takes over 24 hours to get posts approved?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=13837">Overcranked</a> — Wed Apr 07, 2010 4:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Overcranked]]></name></author>
<updated>2010-04-06T15:39:16+00:00</updated>
<published>2010-04-06T15:39:16+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2132#p2132</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2132#p2132"/>
<title type="html"><![CDATA[User Defined Method]]></title>

<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2132#p2132"><![CDATA[
Hey All Newbie here, I have a project due in a couple days for school that I need a little help with.<br />The project is to take a user inputed string and print out how many Characters,Digits,Vowels,whitespace and letters are in the string. I was able to get the string and character length ok, but I need to create Used defined method for all the other parts.<br /><br />Here is my code so far the problem I am having is the method that I am trying to develop for whitespace counts. I keep compiling a &quot;Illegal start of expression&quot; fault. Can any one simply point me in the right direction please?<br />This is an intro course so I can not use Regular expression yet.<br />Thanks<br />import java.util.*;<br />public class p6<br />{<br /><br /><br /><br />static Scanner kb = new Scanner(System.in);<br />public static void main(String [] args)<br /><br />{<br />String x; // declared string variables<br /><br /><br />System.out.print(&quot;Enter a string for character classification: (EOF to end): &quot;);<br />while (kb.hasNext())//while loop needed to run EOF<br />{<br />x = kb.nextLine();// Reads input<br />System.out.println(&quot;The inputLine is &quot; + x.length() + &quot; characters long and contains the following:.&quot;);<br /><br />System.out.print(&quot;Enter a string for character classification: (EOF to end): &quot;);}<br /><br /><br />    // Method for counting white space<br />public int whiteSpace(){<br /><br />int whiteSpaceCount=0;<br /><br />for(int i=0;i&lt;s.length();i++)<br />{<br />if (x.charAt(i) ==' ');<br /><br />whiteSpaceCount++;<br /><br />}<br />}<br /><br /><br /><br />}<br />}<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=13837">Overcranked</a> — Tue Apr 06, 2010 3:39 pm</p><hr />
]]></content>
</entry>
</feed>