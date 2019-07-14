<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=25" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-04-02T12:08:25+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=25</id>
<entry>
<author><name><![CDATA[nguyenhai00dn]]></name></author>
<updated>2013-04-02T12:08:25+00:00</updated>
<published>2013-04-02T12:08:25+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811"/>
<title type="html"><![CDATA[JAVA Lobby • Re: User Defined Method]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2811#p2811"><![CDATA[
Hi Overcranked !<br /><br />You must declare method 'Method for counting white space' outside method main.<br /><br />You can test again.<br /><br />If you are not clear, I will help. Good luck !<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=18792">nguyenhai00dn</a> — Tue Apr 02, 2013 12:08 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[booboo0187]]></name></author>
<updated>2013-01-27T04:23:35+00:00</updated>
<published>2013-01-27T04:23:35+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2168&amp;p=2510#p2510</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2168&amp;p=2510#p2510"/>
<title type="html"><![CDATA[JAVA Lobby • »Multithreading ? - something w/ wait() and notify() ?]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2168&amp;p=2510#p2510"><![CDATA[
Hi all. I bought Osborne's &quot;Teach Yourself Java&quot; book about 5 weeks ago and I have run into an issue with one of the exercises and wanted to get some input from you guys. Here is the exercise:<br /><br />A set of ten mice continually enter and exit a box. Each mouse spends between 10 and 20 seconds out of the box, enters, spends between 5 and 8 seconds in the box, and exits. A maximum of four mice may be in the box at any time. If the box is full when another mouse wishes to enter, that animal must wait. Write a multithreaded program to simulate the behavior of this system. Establish a separate thread to manage the behavior of each mouse. Display the number of mice inside the box each time a mouse enters or exits.<br /><br />Here is my code:<br /><br />class Box {<br />  static int count = 0;<br /><br />  synchronized int enter(String s) {<br />    try {<br />      while(count==4) {<br />        wait();<br />      }<br />    }<br />    catch(InterruptedException e) {<br />      e.printStackTrace();<br />    }<br />    int timein = (int)(Math.random()*3000+5000);<br />    System.out.println(s + &quot;: enters, &quot; + (timein/1000) + &quot; secs. &quot; + (++count) + &quot; mice in.&quot;);<br />    return timein;<br />  }<br /><br />  synchronized int exit(String s) {<br />    int timeout = (int)(Math.random()*10000+10000);<br />    System.out.println(&quot;Mouse exits. &quot; + (--count) + &quot; mice in.&quot;);<br />    notifyAll();<br />    return timeout;<br />  }<br />}<br /><br />class Mouse extends Thread {<br />  String s;<br />  Box b = new Box();<br /><br />  Mouse(String s) {<br />    this.s = s;<br />  }<br /><br />  public void run() {<br />    while(true) {<br />      try {<br />        Thread.sleep(b.enter(s));<br />        Thread.sleep(b.exit(s));<br />      }<br />      catch(InterruptedException e) {<br />        e.printStackTrace();<br />      }<br />    }<br />  }<br />}<br /><br />class MiceInBox {<br />  public static void main(String args[]) {<br />    Mouse m[] = new Mouse[10];<br />    for(int i = 0; i &lt; 10; i++) {<br />      new Mouse(args[i]).start();<br />    }<br />  }<br />}<br /><br /><br />Here is sample output from the program:<br /><br />java MiceInBox Harold Jason George Henry Mickey Bernie Milhouse Jack Jill Minnie<br />Jason: enters, 6 secs. 2 mice in.<br />Henry enters, 7 secs. 3 mice in.<br />Harold: enters, 5 secs. 1 mice in.<br />Bernie: enters, 7 secs. 4 mice in.<br />Mouse exits. 3 mice in.<br />Mouse exits. 2 mice in.<br />Mouse exits. 1 mice in.<br />Mouse exits. 0 mice in.<br />Jason: enters, 5  secs. 1 mice in.<br />Harold: enters, 6 secs. 2 mice in.<br />Bernie: enters, 5 secs. 3 mice in.<br />Mouse exits. 2 mice in.<br />Henry: enters, 7 secs. 3 mice in.<br />Mouse exits. 2 mice in.<br />Mouse exits. 1 mice in.<br />Mouse exits. 0 mice in.<br />Bernie: enters, 5 secs. 1 mice in.<br />Jason: enters, 6 secs. 2 mice in.<br />Henry: enters, 5 secs. 3 mice in.<br />Harold: enters, 5 secs. 4 mice in.<br />Mouse exits. 3 mice in.<br /><br /><br />Now, the program compiles and encounters no errors while running. It allows only 4 mice to be &quot;in the box&quot; at any given time. However, it never lets any mice but the first four in. And as you can see from the beginning of the sample output, it doesn't display the mice going in for the first time in the right order - &quot;2 mice in, 3 mice in, 1 mice in, 4 mice in.  Can anyone explain to me what my code is missing or what is happening behind the scenes that I am unaware of to cause these 2 problems? Thanks in advance.<br /><br />- Brian<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16316">booboo0187</a> — Sun Jan 27, 2013 4:23 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[hbquikcomjamesl]]></name></author>
<updated>2013-01-26T03:36:24+00:00</updated>
<published>2013-01-26T03:36:24+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2507#p2507</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2507#p2507"/>
<title type="html"><![CDATA[JAVA Lobby • »]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2507#p2507"><![CDATA[
(The above was posted on my behalf, after my own attempt somehow false-positived the spam-detector)<br /><br />At any rate, I was eventually able to stick a primary key into the database (if the JDBC tutorial mentions anything about that, it's buried), after a fair amount of digging through the docs for both MySQL and SequelPro (you'd think they'd have been a bit more forward about how to do something so essential), and once I did, the tutorial worked just fine.<br /><br />I wonder if I'm going to find the same situation when I go through the whole tutorial again with DB2/400 (a database engine that, unlike MySQL, <span style="font-style: italic">does</span> recognize the concept of RRNs).<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16308">hbquikcomjamesl</a> — Sat Jan 26, 2013 3:36 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2013-01-26T03:15:45+00:00</updated>
<published>2013-01-26T03:15:45+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2506#p2506</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2506#p2506"/>
<title type="html"><![CDATA[JAVA Lobby • I just tried the &quot;JDBC - Updating a Result Set Example&]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2167&amp;p=2506#p2506"><![CDATA[
It bombs out at<br /><br />Code:<br />rs.updateDouble( &quot;age&quot;, newAge );<br /><br /><br />throwing:<br />Code:<br />com.mysql.jdbc.NotUpdatable: Result Set not updatable (referenced table has no primary keys).This result set must come from a statement that was created with a result set type of ResultSet.CONCUR_UPDATABLE, the query must select only one table, can not use functions and must select all primary keys from that table. See the JDBC 2.1 API Specification, section 5.6 for more details.<br />   at com.mysql.jdbc.UpdatableResultSet.generateStatements(UpdatableResultSet.java:621)<br />   at com.mysql.jdbc.UpdatableResultSet.syncUpdate(UpdatableResultSet.java:1530)<br />   at com.mysql.jdbc.UpdatableResultSet.updateDouble(UpdatableResultSet.java:2056)<br />   at com.mysql.jdbc.UpdatableResultSet.updateDouble(UpdatableResultSet.java:2084)<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Sat Jan 26, 2013 3:15 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ajitpaswan]]></name></author>
<updated>2012-12-30T01:47:10+00:00</updated>
<published>2012-12-30T01:47:10+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443"/>
<title type="html"><![CDATA[JAVA Lobby • [Solved] get characters, vowels, digits and whitespaces]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2443#p2443"><![CDATA[
import java.io.BufferedReader;<br />import java.io.IOException;<br />import java.io.InputStreamReader;<br /><br />public class test {<br />public static void main(String[] args) {<br />System.out.print(&quot;Enter your name and press Enter: &quot;);<br />BufferedReader br = new BufferedReader(new InputStreamReader(System.in));<br />String name = null;<br />int length = 0, spaces = 0, vowels = 0, characters = 0, digits = 0;<br />try {<br />name = br.readLine();<br />if(name != null) {<br />length = name.length();<br />for(int i = 0; i &lt; length; i++) {<br />char x = name.charAt(i);<br />int cast = (int)x;<br />if(cast == 32) {<br />spaces = spaces + 1;<br />} else if(cast &gt;= 48 &amp;&amp; cast &lt;= 57) {<br />digits = digits + 1;<br />}  else if((cast &gt;= 65 &amp;&amp; cast &lt;= 90) || (cast &gt;= 97 &amp;&amp; cast &lt;= 122)) {<br />characters = characters + 1;<br />if(cast == 97 || cast == 101 || cast == 105 || cast == 111 || cast == 117<br />|| cast == 65 || cast == 69 || cast == 73 || cast == 79 || cast == 85) {<br />vowels = vowels + 1;<br />}<br />}<br />}<br />System.out.println(&quot;Total spaces are: &quot;+spaces);<br />System.out.println(&quot;Total characters are: &quot;+characters);<br />System.out.println(&quot;Total vowels are: &quot;+vowels);<br />System.out.println(&quot;Total digits are: &quot;+digits);<br />}<br />} catch (IOException e) {<br />System.out.println(&quot;Error!&quot;);<br />System.exit(1);<br />}<br />}<br />}<br /><br />OUTPUT : Enter your name and press Enter: 1ajit  2<br />Total spaces are: 2<br />Total characters are: 4<br />Total vowels are: 2<br />Total digits are: 2[/b]<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16143">ajitpaswan</a> — Sun Dec 30, 2012 1:47 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ajitpaswan]]></name></author>
<updated>2012-12-25T05:04:28+00:00</updated>
<published>2012-12-25T05:04:28+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2438#p2438</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2438#p2438"/>
<title type="html"><![CDATA[JAVA Lobby • ]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2438#p2438"><![CDATA[
import java.util.Calendar;<br /><br />public class DateDemo {<br />private int date;<br />private int month;<br />private int year;<br /><br />public int getDate() {<br />return date;<br />}<br /><br />public void setDate(int date) {<br />this.date = date;<br />}<br /><br />public int getMonth() {<br />return month;<br />}<br /><br />public void setMonth(int month) {<br />this.month = month;<br />}<br /><br />public int getYear() {<br />return year;<br />}<br /><br />public void setYear(int year) {<br />this.year = year;<br />}<br /><br />public String toString() {<br />String modifiedMonth = getMonthInString(month);<br />if(date == 1 || date == 31) {<br />return &quot;\n &quot;+date+ &quot;st &quot;+ modifiedMonth+&quot; &quot;+year;<br />} else if(date == 2) {<br />return &quot;\n &quot;+date+ &quot;nd &quot;+ modifiedMonth+&quot; &quot;+year;<br />} else if(date == 3) {<br />return &quot;\n &quot;+date+ &quot;rd &quot;+ modifiedMonth+&quot; &quot;+year;<br />}<br />return &quot;\n &quot;+date+ &quot;th &quot;+ modifiedMonth+&quot; &quot;+year;<br />}<br /><br />public String getMonthInString(int month) {<br />String[] monthName = {&quot;January&quot;, &quot;February&quot;,<br />  &quot;March&quot;, &quot;April&quot;, &quot;May&quot;, &quot;June&quot;, &quot;July&quot;,<br />  &quot;August&quot;, &quot;September&quot;, &quot;October&quot;, &quot;November&quot;,<br />  &quot;December&quot;<br />  };<br />Calendar cal = Calendar.getInstance();<br />cal.set(0, month, 0);<br />String monthInString = monthName[cal.get(Calendar.MONTH)];<br />return monthInString;<br />}<br /><br />public static void main(String args[]) {<br />DateDemo dateDemo = new DateDemo();<br />int date  = 25, month = 11, year = 2012;<br />dateDemo.setDate(date);<br />dateDemo.setMonth(month);<br />dateDemo.setYear(year);<br />System.out.println(dateDemo);<br />}<br />}<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16143">ajitpaswan</a> — Tue Dec 25, 2012 5:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ajitpaswan]]></name></author>
<updated>2012-12-25T03:32:13+00:00</updated>
<published>2012-12-25T03:32:13+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2437#p2437</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2437#p2437"/>
<title type="html"><![CDATA[JAVA Lobby • ]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2437#p2437"><![CDATA[
This example is working fine with my ecllipse helios , no errors  <img src="http://www.tutorialspoint.com/forums/images/smilies/icon_lol.gif" alt=":lol:" title="Laughing" /><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16143">ajitpaswan</a> — Tue Dec 25, 2012 3:32 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[morph34a]]></name></author>
<updated>2012-12-19T12:49:13+00:00</updated>
<published>2012-12-19T12:49:13+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1987&amp;p=2430#p2430</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1987&amp;p=2430#p2430"/>
<title type="html"><![CDATA[JAVA Lobby • »JAVA Tutorials]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1987&amp;p=2430#p2430"><![CDATA[
Thanks for the useful java tutorials.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16124">morph34a</a> — Wed Dec 19, 2012 12:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dragonfly6373]]></name></author>
<updated>2012-11-29T10:41:03+00:00</updated>
<published>2012-11-29T10:41:03+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419"/>
<title type="html"><![CDATA[JAVA Lobby • Hibernate many-to-many]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2003&amp;p=2419#p2419"><![CDATA[
hi everyone.<br /><br />I have some trouble about this relationship<br />I have 2 table student and cerfiticate which is many-to-many relationship. How can I list all studen have name like '%an%' and have cerfiticate A, B, C<br /><br />how can i do that?<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16029">dragonfly6373</a> — Thu Nov 29, 2012 10:41 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ganesh]]></name></author>
<updated>2012-11-26T05:16:24+00:00</updated>
<published>2012-11-26T05:16:24+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2418#p2418</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2418#p2418"/>
<title type="html"><![CDATA[JAVA Lobby • Java program to print date in the format: 25th November 2011]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2130&amp;p=2418#p2418"><![CDATA[
You are required to write a Java class, called Date, that can be used to represent dates.<br />The date object should be represented as three integers for day, month and year. The year must be stored in full, example, 2004 and not 04.<br />Provide appropriate constructors, get() and set() methods for day, month, year.  getYear() should return the year in full ( 1998, 2004 etc. ) and getMonth() should return a String representing the name of the month. Finally, you should provide a toString() method that returns a String representation of the date in full, for example, <br />22nd December, 1999<br />12th January, 2006<br />The day should be followed by an appropriate suffix on the day, â€˜thâ€™, â€˜stâ€™, â€˜ndâ€™ or â€˜rdâ€™<br />Provide a main() method that tests your class thoroughly.<br /><br />Source filename: DateEx.java<br /><br />PLEASE HELP ME OUT !! ITS URGENT<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16017">ganesh</a> — Mon Nov 26, 2012 5:16 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2012-11-23T23:00:05+00:00</updated>
<published>2012-11-23T23:00:05+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2414#p2414</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2414#p2414"/>
<title type="html"><![CDATA[JAVA Lobby • ]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2414#p2414"><![CDATA[
Sir I have fixed it, here is  correct example:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>import java.util.Date;<br />  <br />public class DateDemo &#123;<br />   public static void main&#40;String args&#91;&#93;&#41; &#123;<br />       // Instantiate a Date object<br />       Date date = new Date&#40;&#41;;<br />        <br />       // display time and date using toString&#40;&#41;<br />       System.out.println&#40;date.toString&#40;&#41;&#41;;<br />   &#125;<br />&#125;</code></dd></dl><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Fri Nov 23, 2012 11:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[SteveE]]></name></author>
<updated>2012-11-08T19:40:35+00:00</updated>
<published>2012-11-08T19:40:35+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2401#p2401</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2401#p2401"/>
<title type="html"><![CDATA[JAVA Lobby • Tutorial example code not compiling]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2122&amp;p=2401#p2401"><![CDATA[
Hello everyone,<br /><br />I have been learning JavaSe &amp; FX for only a few months, although I was once a programmer in COBOL, Assembler and Basic, long ago  <img src="http://www.tutorialspoint.com/forums/images/smilies/icon_smile.gif" alt=":)" title="Smile" /> <br /><br />I have been looking at the date/time stuff on TutorialsPoint and have tried a bit of sample code and it does not compile. I gives the error 'IllegalFormatConversionException'.<br />The code is at URL <!-- m --><a class="postlink" href="http://www.tutorialspoint.com/java/java_date_time.htm">http://www.tutorialspoint.com/java/java_date_time.htm</a><!-- m --><br /><br />It is this;<br /><br />import java.util.Date;<br />  <br />class DateDemo {<br />   public static void main(String args[]) {<br />       // Instantiate a Date object<br />       Date date = new Date();<br />        <br />       // display time and date using toString()<br />       System.out.printf(&quot;%tc&quot;, &quot;Current Time : &quot;, date);<br />   }<br />}<br />Could someone tell me what the problem is.<br />Thank you.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15952">SteveE</a> — Thu Nov 08, 2012 7:40 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[inChrist]]></name></author>
<updated>2012-10-22T02:11:00+00:00</updated>
<published>2012-10-22T02:11:00+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2116&amp;p=2392#p2392</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2116&amp;p=2392#p2392"/>
<title type="html"><![CDATA[JAVA Lobby • Java Network]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2116&amp;p=2392#p2392"><![CDATA[
Hi, <br />I took an example from  server socket example The example is GreetingServer, its not compiling. It displays an index out of bounds error.<br /><br /><br />Please i need help how can i do. URGENT<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15834">inChrist</a> — Mon Oct 22, 2012 2:11 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[baranbilgi]]></name></author>
<updated>2012-10-10T05:04:00+00:00</updated>
<published>2012-10-10T05:04:00+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2113&amp;p=2385#p2385</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2113&amp;p=2385#p2385"/>
<title type="html"><![CDATA[JAVA Lobby • Data Structure  in Java, please help]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2113&amp;p=2385#p2385"><![CDATA[
I am trying to add comparison and swap, I am freak out, what am I supposed to do? I really dont have any idea, please someone help, I need missing part.<br /><br />[/code]public class BubbleSort{<br />public static void main(String a[]){<br />int i;<br /><br />int array[] = {21,33,7,25};<br /><br />bubblesort(array, array.length);<br />for(i = 0; i &lt;array.length; i++){<br />System.out.print(array[i]+&quot; &quot;);<br /><br />}}<br /><br />public static void bubblesort( int a[], int N ){<br />int i, j, t=0;<br />for(i = 0; i &lt; N; i++){<br />for(j = 1; j &lt; (N-i); j++){<br />if(a[j-1] &gt; a[j]){<br />SWAP(a[j-1],a[j]);<br />t = a[j-1];<br />a[j-1]=a[j];<br />a[j]=t;<br />}<br />}<br />}}<br /><br />private static void SWAP(int i, int j) {<br />// TODO Auto-generated method stub<br /><br />}}[code][/code]<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15759">baranbilgi</a> — Wed Oct 10, 2012 5:04 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2012-09-14T19:59:59+00:00</updated>
<published>2012-09-14T19:59:59+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2107&amp;p=2371#p2371</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2107&amp;p=2371#p2371"/>
<title type="html"><![CDATA[JAVA Lobby • ]]></title>

<category term="JAVA Lobby" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=25" label="JAVA Lobby"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2107&amp;p=2371#p2371"><![CDATA[
Hi,<br /><br />You can find source code from internet, from any magazine like Dr. Dobe, or in your organization your seniors must have written source code for various projects or products.  There are lots of open source products which you can study.<br /><br />Hope this will help you.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Fri Sep 14, 2012 7:59 pm</p><hr />
]]></content>
</entry>
</feed>