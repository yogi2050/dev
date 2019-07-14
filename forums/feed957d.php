<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=8" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2013-03-07T02:06:53+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=8</id>
<entry>
<author><name><![CDATA[spluskhan]]></name></author>
<updated>2013-03-07T02:06:53+00:00</updated>
<published>2013-03-07T02:06:53+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2358&amp;p=2786#p2786</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2358&amp;p=2786#p2786"/>
<title type="html"><![CDATA[SQL and MySQL • I Have A An Error On This Script]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2358&amp;p=2786#p2786"><![CDATA[
This is error:<br /><br />Parse error: syntax error, unexpected '.', expecting ']' in /home/eccop.com.pk/main_u_pk/userppoo09923/insert.php on line 12<br /><br />This is code:<br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;?php<br />$con=mysqli_connect(&quot;exapmle.com&quot;,&quot;user&quot;,&quot;pass&quot;,&quot;d atabase&quot;);<br />// Check connection<br />if (mysqli_connect_errno())<br />{<br />echo &quot;Failed to connect to MySQL: &quot; . mysqli_connect_error();<br />}<br /> <br />$sql=&quot;INSERT INTO Products (name, available_conditions, v.good, good, poor, faulty)<br />VALUES<br />('$_POST&#91;name&#93;','$_POST&#91;available_conditions&#93;','$_POST&#91;v.good&#93;','$_POST&#91;good&#93;','$_POST&#91;poor&#93;','$_POST&#91;faulty&#93;')&quot;;<br /> <br />if (!mysqli_query($con,$sql))<br />{<br />die('Error: ' . mysqli_error());<br />}<br />echo &quot;1 record added&quot;;<br /> <br />mysqli_close($con);<br />?&gt;</code></dd></dl><br /><br /><br />And This is Forrm:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>&lt;div id=&quot;wb_Form1&quot; style=&quot;position:absolute;width:361px;height:270px;&quot;&gt;<br />&lt;form name=&quot;Add_New_Items&quot; method=&quot;post&quot; action=&quot;insert.php&quot; enctype=&quot;text/plain&quot; id=&quot;Form1&quot;&gt;<br />&lt;div id=&quot;wb_Text1&quot; style=&quot;position:absolute;left:10px;top:15px;width:121px;height:16px;z-index:30;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;name:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox1&quot; style=&quot;position:absolute;left:141px;top:15px;width:198px;height:23px;line-height:23px;z-index:31;&quot; name=&quot;Editbox1&quot; value=&quot;&quot;&gt;<br />&lt;div id=&quot;wb_Text2&quot; style=&quot;position:absolute;left:10px;top:45px;width:121px;height:32px;z-index:32;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;available_conditions:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox2&quot; style=&quot;position:absolute;left:141px;top:45px;width:198px;height:23px;line-height:23px;z-index:33;&quot; name=&quot;Editbox2&quot; value=&quot;&quot;&gt;<br />&lt;div id=&quot;wb_Text3&quot; style=&quot;position:absolute;left:10px;top:75px;width:121px;height:16px;z-index:34;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;v.good:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox3&quot; style=&quot;position:absolute;left:141px;top:75px;width:198px;height:23px;line-height:23px;z-index:35;&quot; name=&quot;Editbox3&quot; value=&quot;&quot;&gt;<br />&lt;div id=&quot;wb_Text4&quot; style=&quot;position:absolute;left:10px;top:105px;width:121px;height:16px;z-index:36;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;good:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox4&quot; style=&quot;position:absolute;left:141px;top:105px;width:198px;height:23px;line-height:23px;z-index:37;&quot; name=&quot;Editbox4&quot; value=&quot;&quot;&gt;<br />&lt;div id=&quot;wb_Text5&quot; style=&quot;position:absolute;left:10px;top:135px;width:121px;height:16px;z-index:38;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;poor:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox5&quot; style=&quot;position:absolute;left:141px;top:135px;width:198px;height:23px;line-height:23px;z-index:39;&quot; name=&quot;Editbox5&quot; value=&quot;&quot;&gt;<br />&lt;div id=&quot;wb_Text7&quot; style=&quot;position:absolute;left:10px;top:165px;width:121px;height:16px;z-index:40;text-align:left;&quot;&gt;<br />&lt;span style=&quot;color:#000000;font-family:Arial;font-size:13px;&quot;&gt;faulty:&lt;/span&gt;&lt;/div&gt;<br />&lt;input type=&quot;text&quot; id=&quot;Editbox6&quot; style=&quot;position:absolute;left:141px;top:165px;width:198px;height:23px;line-height:23px;z-index:41;&quot; name=&quot;Editbox6&quot; value=&quot;&quot;&gt;<br />&lt;input type=&quot;submit&quot; id=&quot;Button1&quot; name=&quot;&quot; value=&quot;Submit&quot; style=&quot;position:absolute;left:141px;top:195px;width:96px;height:25px;z-index:42;&quot;&gt;<br />&lt;input type=&quot;reset&quot; id=&quot;Button2&quot; name=&quot;&quot; value=&quot;Reset&quot; style=&quot;position:absolute;left:141px;top:225px;width:96px;height:25px;z-index:43;&quot;&gt;<br />&lt;/form&gt;<br />&lt;/div&gt;</code></dd></dl><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17272">spluskhan</a> — Thu Mar 07, 2013 2:06 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[gamalrashed]]></name></author>
<updated>2013-03-03T23:31:48+00:00</updated>
<published>2013-03-03T23:31:48+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2781#p2781</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2781#p2781"/>
<title type="html"><![CDATA[SQL and MySQL • Re: How to insert date in table]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2781#p2781"><![CDATA[
Your order number = 102 (3 digits) but you created the order nuber as only (2 digits), this is the reason of the error.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=17127">gamalrashed</a> — Sun Mar 03, 2013 11:31 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[onlysk]]></name></author>
<updated>2013-02-21T03:29:59+00:00</updated>
<published>2013-02-21T03:29:59+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2755#p2755</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2755#p2755"/>
<title type="html"><![CDATA[SQL and MySQL • How to insert date in table]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2342&amp;p=2755#p2755"><![CDATA[
I have crated a table orders having date as a one of the attribute<br /> as follows:<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>create table orders(oid number(2), dates date, customer_id number(2), amount number(4));</code></dd></dl><br /><br />and when I insert the value <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>insert into orders values(102, 2009-10-08, 3, 3000)</code></dd></dl><br />it give me an error as <br /><span style="font-weight: bold">ORA-00932: inconsistent datatypes: expected DATE got NUMBER</span><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16813">onlysk</a> — Thu Feb 21, 2013 3:29 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[onlysk]]></name></author>
<updated>2013-02-21T03:17:32+00:00</updated>
<published>2013-02-21T03:17:32+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2341&amp;p=2754#p2754</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2341&amp;p=2754#p2754"/>
<title type="html"><![CDATA[SQL and MySQL • How to insert date in table]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2341&amp;p=2754#p2754"><![CDATA[
I have created table orders with date as an attribute which will accept date here is my query for creating table <br /><br /><dl class="codebox"><dt>Code: </dt><dd><code> create table orders(oid number(2), dates date, customer_id number(2), amount number(4));<br /></code></dd></dl><br /><br />now i have tried to insert data as<br /><br /><dl class="codebox"><dt>Code: </dt><dd><code>insert into orders values(102, 2009-10-08, 3, 3000)</code></dd></dl><br /><br />and it is giving me error as<br /><br /><span style="font-weight: bold">ORA-00932: inconsistent datatypes: expected DATE got NUMBER</span><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16813">onlysk</a> — Thu Feb 21, 2013 3:17 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[manroger4]]></name></author>
<updated>2013-02-09T14:09:16+00:00</updated>
<published>2013-02-09T14:09:16+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2573#p2573</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2573#p2573"/>
<title type="html"><![CDATA[SQL and MySQL • Re: What is Schema?]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2573#p2573"><![CDATA[
A database schema (/ˈski.mə/SKEE-ma) of a database system is its structure described in a formal language supported by the database management system (DBMS) and refers to the organization of data to create a blueprint of how a database will be constructed (divided into database tables). The formal definition of database schema is a set of formulas (sentences) called integrity constraints imposed on a database. These integrity constraints ensure compatibility between parts of the schema. All constraints are expressible in the same language. A database can be considered a structure in realization of the database language.[1] The states of a created conceptual schema are transformed into an explicit mapping, the database schema. This describes how real world entities are modeled in the database.<br /><br />&quot;A database schema specifies, based on the database administrator's knowledge of possible applications, the facts that can enter the database, or those of interest to the possible end-users.&quot;[2] The notion of a database schema plays the same role as the notion of theory in predicate calculus. A model of this “theory” closely corresponds to a database, which can be seen at any instant of time as a mathematical object. Thus a schema can contain formulas representing integrity constraints specifically for an application and the constraints specifically for a type of database, all expressed in the same database language.[1] In a relational database, the schema defines the tables, fields, relationships, views, indexes, packages, procedures, functions, queues, triggers, types, sequences, materialized views, synonyms, database links, directories, Java, XML schemas, and other elements.<br /><br />Schemas are generally stored in a data dictionary. Although a schema is defined in text database language, the term is often used to refer to a graphical depiction of the database structure. In other words, schema is the structure of the database that defines the objects in the database.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16203">manroger4</a> — Sat Feb 09, 2013 2:09 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Vadz]]></name></author>
<updated>2013-02-04T08:20:42+00:00</updated>
<published>2013-02-04T08:20:42+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2531#p2531</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2531#p2531"/>
<title type="html"><![CDATA[SQL and MySQL • »]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2531#p2531"><![CDATA[
hi adams<br /><br />go to this link..<!-- m --><a class="postlink" href="http://www.tutorialspoint.com/mysql/mysql-transactions.htm">http://www.tutorialspoint.com/mysql/mys ... ctions.htm</a><!-- m --><br /><br />regards<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16350">Vadz</a> — Mon Feb 04, 2013 8:20 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adams369]]></name></author>
<updated>2013-02-01T17:51:03+00:00</updated>
<published>2013-02-01T17:51:03+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2528#p2528</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2528#p2528"/>
<title type="html"><![CDATA[SQL and MySQL • What is rollback and commit in sql]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2177&amp;p=2528#p2528"><![CDATA[
Hi.<br />What is rollback and commit in sql.<br />Please give me differences between them.<br />Please help me.<br /><br />Thanks &amp; Regards<br />Adams<br />Uschemistoncall<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16123">adams369</a> — Fri Feb 01, 2013 5:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[adams369]]></name></author>
<updated>2013-01-28T19:03:41+00:00</updated>
<published>2013-01-28T19:03:41+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2515#p2515</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2515#p2515"/>
<title type="html"><![CDATA[SQL and MySQL • What is Schema?]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2172&amp;p=2515#p2515"><![CDATA[
Hi what is Schema in database?<br />Please give me answer.<br /><br /><br />Thanks &amp; Regards<br />Adams<br />Uschemistoncall<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16123">adams369</a> — Mon Jan 28, 2013 7:03 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[ajitpaswan]]></name></author>
<updated>2012-12-25T03:21:15+00:00</updated>
<published>2012-12-25T03:21:15+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2436#p2436</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2436#p2436"/>
<title type="html"><![CDATA[SQL and MySQL • ]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2436#p2436"><![CDATA[
This should help you : <br />SELECT *<br />FROM userfield AS userfield<br />LEFT JOIN user AS user ON (user.userid = userfield.userid)<br />WHERE user.usergroupid = 15<br />AND user.userfield IN(19, 20, 13, 14, 15, 16, 17, 18)<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16143">ajitpaswan</a> — Tue Dec 25, 2012 3:21 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tutorialspoint]]></name></author>
<updated>2012-11-23T22:49:47+00:00</updated>
<published>2012-11-23T22:49:47+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2412#p2412</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2412#p2412"/>
<title type="html"><![CDATA[SQL and MySQL • ]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2412#p2412"><![CDATA[
Check the following link<br /><br /><!-- m --><a class="postlink" href="http://www.tutorialspoint.com/php/php_sending_emails.htm">http://www.tutorialspoint.com/php/php_s ... emails.htm</a><!-- m --><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=2">tutorialspoint</a> — Fri Nov 23, 2012 10:49 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[mikieno]]></name></author>
<updated>2012-11-23T20:56:58+00:00</updated>
<published>2012-11-23T20:56:58+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2408#p2408</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2408#p2408"/>
<title type="html"><![CDATA[SQL and MySQL • Re: php mail functions]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2068&amp;p=2408#p2408"><![CDATA[
<blockquote><div><cite>nameranjeet wrote:</cite><br />How to configuration of mail function with smtp.<br />there are another options of send mail  through php script<br /></div></blockquote><br /><br />And please i will like to know how to create an email address with my control panel host<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=16009">mikieno</a> — Fri Nov 23, 2012 8:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[CrazyEyes955]]></name></author>
<updated>2012-05-22T05:51:24+00:00</updated>
<published>2012-05-22T05:51:24+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2094&amp;p=2336#p2336</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2094&amp;p=2336#p2336"/>
<title type="html"><![CDATA[SQL and MySQL • MySQL DB Sim]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2094&amp;p=2336#p2336"><![CDATA[
Hello.<br />I was just wondering if anyone here has found a small program that lets you create by hand tables and test queries. I used to have a program like that, but I can't find it anymore. Just want something I can use without installing a server program.<br />Thanks<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15093">CrazyEyes955</a> — Tue May 22, 2012 5:51 am</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[remotedba]]></name></author>
<updated>2012-01-16T22:32:29+00:00</updated>
<published>2012-01-16T22:32:29+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=94&amp;p=2286#p2286</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=94&amp;p=2286#p2286"/>
<title type="html"><![CDATA[SQL and MySQL • Nice Site]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=94&amp;p=2286#p2286"><![CDATA[
Thank you for sharing, this is nice site<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14629">remotedba</a> — Mon Jan 16, 2012 10:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[remotedba]]></name></author>
<updated>2012-01-16T22:30:27+00:00</updated>
<published>2012-01-16T22:30:27+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2285#p2285</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2285#p2285"/>
<title type="html"><![CDATA[SQL and MySQL • You can use IN clause]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=1977&amp;p=2285#p2285"><![CDATA[
You can use IN clause as well for this query<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14629">remotedba</a> — Mon Jan 16, 2012 10:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[remotedba]]></name></author>
<updated>2012-01-16T22:28:22+00:00</updated>
<published>2012-01-16T22:28:22+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=40&amp;p=2284#p2284</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=40&amp;p=2284#p2284"/>
<title type="html"><![CDATA[SQL and MySQL • Thank you]]></title>

<category term="SQL and MySQL" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=8" label="SQL and MySQL"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=40&amp;p=2284#p2284"><![CDATA[
Thank you<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14629">remotedba</a> — Mon Jan 16, 2012 10:28 pm</p><hr />
]]></content>
</entry>
</feed>