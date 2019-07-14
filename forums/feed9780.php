<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="http://www.tutorialspoint.com/forums/feed.php?f=14" />

<title>www.tutorialspoint.com</title>
<subtitle>Tutorials and Manuals</subtitle>
<link href="http://www.tutorialspoint.com/forums/index.php" />
<updated>2012-11-01T20:14:03+00:00</updated>

<author><name><![CDATA[www.tutorialspoint.com]]></name></author>
<id>http://www.tutorialspoint.com/forums/feed.php?f=14</id>
<entry>
<author><name><![CDATA[Ragavarajan. J]]></name></author>
<updated>2012-11-01T20:14:03+00:00</updated>
<published>2012-11-01T20:14:03+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2120&amp;p=2399#p2399</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2120&amp;p=2399#p2399"/>
<title type="html"><![CDATA[Apache Server • Sending Email with attachment using jsp(gmail provider)]]></title>

<category term="Apache Server" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=14" label="Apache Server"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2120&amp;p=2399#p2399"><![CDATA[
I want exactly working code for <span style="color: red">sending Email with attachment in JSP,</span> with all details.<br /><br />I am using Appache tomcat Server. <br /><br /><span style="color: red">And this is my code working without attachment...</span><br /><br />&lt;%@ page contentType=&quot;text/html; charset=iso-8859-1&quot; language=&quot;java&quot; import=&quot;java.sql.*&quot; errorPage=&quot;&quot; %&gt;<br /><br />&lt;%@page import=&quot;javax.mail.*&quot; %&gt;<br />&lt;%@page import=&quot;javax.activation.*&quot; %&gt;<br />&lt;%@page import=&quot;java.security.Security&quot; %&gt;<br />&lt;%@page import=&quot;java.util.Properties&quot; %&gt;<br />&lt;%@page import=&quot;javax.mail.Message&quot; %&gt;<br />&lt;%@page import=&quot;javax.mail.Session&quot; %&gt;<br />&lt;%@page import=&quot;javax.mail.Transport&quot; %&gt;<br />&lt;%@page import=&quot;javax.mail.internet.InternetAddress&quot;%&gt;<br />&lt;%@page import=&quot;javax.mail.internet.MimeMessage&quot;%&gt;<br />&lt;%@page import=&quot;java.util.Random&quot; %&gt;<br />&lt;%@page import=&quot;javax.mail.internet.*&quot;%&gt;<br />&lt;%@page import=&quot;java.io.*&quot;%&gt; <br />  <br /><br />&lt;%<br />//Security.addProvider(new com.sun.net.ssl.internal.ssl.Provider());<br />try<br />{ <br />String email=request.getParameter(&quot;mailaddress&quot;);<br />Random r = new Random();<br />int no=r.nextInt();<br />if(no&lt;0)<br />{<br />no=no*-1;<br />}<br />String username=&quot;give u r username of mailid&quot;;<br />String password=&quot;password of u r mailid&quot;;<br />String recipients=email;<br />String block= new Integer(no).toString();<br /><br />// seekerRegbean ob=new seekerRegbean();<br /><br />//System.out.println(&quot;Usrename is**************&quot;+recipients); <br />System.out.println(&quot;mail iddddddddddddddd&quot;+email);<br />String mailhost =&quot;smtp.gmail.com&quot;;<br />String subject=&quot;WWW.Uours.com&quot;;<br />System.out.println(&quot;SUBJECT:&quot;+subject);<br />String sender=username;<br />//String body=block;<br /><br /><br /><br /><br />System.out.println(&quot;*try block&quot;);<br />Properties props = new Properties();<br />props.setProperty(&quot;mail.transport.protocol&quot;, &quot;smtp&quot;);<br />props.setProperty(&quot;mail.host&quot;, mailhost);<br />props.put(&quot;mail.smtp.auth&quot;, &quot;true&quot;);<br />props.put(&quot;mail.smtp.port&quot;, &quot;465&quot;);<br />props.put(&quot;mail.smtp.socketFactory.port&quot;, &quot;465&quot;);<br />props.put(&quot;mail.smtp.socketFactory.class&quot;,&quot;javax.net.ssl.SSLSocketFactory&quot;);<br />props.put(&quot;mail.smtp.socketFactory.fallback&quot;, &quot;false&quot;);<br />props.setProperty(&quot;mail.smtp.quitwait&quot;, &quot;false&quot;);<br />javax.mail.Authenticator pa;<br /><br />System.out.println(&quot;**try block&quot;);<br /><br />pa = new javax.mail.Authenticator()<br />{<br />public javax.mail.PasswordAuthentication getPasswordAuthentication()<br />{<br />return new javax.mail.PasswordAuthentication(&quot;uername@xx.com&quot;,&quot;your password&quot;);<br /><br />}<br />};<br />Session session1 = Session.getInstance(props,pa);<br />MimeMessage message = new MimeMessage(session1);<br />message.setSender(new InternetAddress(sender));<br />BodyPart messageBodyPart = new MimeBodyPart();<br /><br />message.setSubject(subject);<br />                  <br />//message.setContent(&quot;hello&quot;, &quot;text/html&quot;);<br /><br /><br />Multipart multipart = new MimeMultipart();<br />  multipart.addBodyPart(messageBodyPart);<br /><br />  // Part two is attachment<br />  messageBodyPart = new MimeBodyPart();<br />  String filename = &quot;file.txt&quot;;<br />  DataSource source = new FileDataSource(filename);<br />  messageBodyPart.setDataHandler(new DataHandler(source));<br />  messageBodyPart.setFileName(filename);<br />  multipart.addBodyPart(messageBodyPart);<br /><br />  // Put parts in message<br />  message.setContent(multipart);<br /><br />  // Send the message<br />  Transport.send(message);<br /><br /><br /><br />//Transport.send(message);<br />response.sendRedirect(&quot;success.jsp&quot;);<br /><br /><br /><br />}<br /><br />catch(Exception e)<br />{<br />System.out.println(e);<br />}<br /><br /><br />System.out.println(&quot;*****End1*****&quot;);<br /><br />%&gt;<br /><br /><p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15894">Ragavarajan. J</a> — Thu Nov 01, 2012 8:14 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Suresh kumar Pandey]]></name></author>
<updated>2012-10-03T21:58:49+00:00</updated>
<published>2012-10-03T21:58:49+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2111&amp;p=2380#p2380</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2111&amp;p=2380#p2380"/>
<title type="html"><![CDATA[Apache Server • error while running HelloWorldStruts2 project from the apac]]></title>

<category term="Apache Server" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=14" label="Apache Server"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2111&amp;p=2380#p2380"><![CDATA[
when i am trying to run the HelloWorldStruts2 dynamic project after deploying the WAR file in the webapps folder of the tomcat it is giving error&quot;file not found&quot;.what i need to do .i did the same as was described in the tutorial.<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=15723">Suresh kumar Pandey</a> — Wed Oct 03, 2012 9:58 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Hugh75]]></name></author>
<updated>2012-01-12T19:39:15+00:00</updated>
<published>2012-01-12T19:39:15+00:00</published>
<id>http://www.tutorialspoint.com/forums/viewtopic.php?t=2069&amp;p=2282#p2282</id>
<link href="http://www.tutorialspoint.com/forums/viewtopic.php?t=2069&amp;p=2282#p2282"/>
<title type="html"><![CDATA[Apache Server • Apache Server]]></title>

<category term="Apache Server" scheme="http://www.tutorialspoint.com/forums/viewforum.php?f=14" label="Apache Server"/>
<content type="html" xml:base="http://www.tutorialspoint.com/forums/viewtopic.php?t=2069&amp;p=2282#p2282"><![CDATA[
The Apache HTTP Server is a â€œheavy dutyâ€<p>Statistics: Posted by <a href="http://www.tutorialspoint.com/forums/memberlist.php?mode=viewprofile&amp;u=14622">Hugh75</a> — Thu Jan 12, 2012 7:39 pm</p><hr />
]]></content>
</entry>
</feed>