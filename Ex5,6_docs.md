# Helper for Setting up Servlet and jsp

Tomcat Home : `/var/lib/tomcat7/webapps/ROOT/`

Restart Tomcat : `$ sudo service tomcat7 restart`

- Create a folder on webapps `cd webapps/ && sudo mkdir SSHITSTUFF`
- Make directory as `/var/lib/tomcat7/webapps/SSHITSTUFF/WEB-INF/classes`
- Make """ cd WEB-INF/
  touch web.xml
  echo "<web-app>
  <servlet>
  <servlet-name>HelloWorld</servlet-name>
  <servlet-class>HelloWorld</servlet-class>
  </servlet>
  <servlet-mapping>
  <servlet-name>HelloWorld</servlet-name>
  <url-pattern>/HelloWorld</url-pattern>
  </servlet-mapping>
  </web-app>
  " >> web.xml
  cat web.xml"""

* Make the servlet file in `/WEB-INF/classes/`
* Compile `javac -cp /usr/share/tomcat7/lib/servlet-api.jar HelloWorld.java`
* Run `http://localhost:8080/SSHITSTUFF/HelloWorld`
