# Guide to run a servet program on Windows OS with Tomcat solely

##### Disclamer: Windows should be avoided unless you wish to boil your skull or are forced to do so. 
---
## Begin by installing JDK
* Once you've installed,Setup the env path's as followed
* create a new path called `JAVA_HOME` and in value enter the location where JDK is installed by default its `C:\Program Files\Java\jdk-11`
* Append a new path `%JAVA_HOME%\bin` to `PATH` variable.
 
 **Congrats stage 1 complete**

 ## Download tomcat, install it, then proceed
 * Ensure that java and javac is installed by `java --version` and `javac --version`
 * If it doesn't work, recheck previous env config and restart the damn pc this time.
 * Assuming the tomcat installed at `C:\apache-tomcat-7.0.91` add that path to another new env variable as followed.
 * Assign name as `CATALINA_HOME` and value as the address above use i.e `C:\apache-tomcat-7.0.91`
 * Run `startup.bat` from `C:\apache-tomcat-7.0.91\bin`. If it runs, go to `localhost:8080` to verify.

**Congrats stage  2 complete**

## Well done, Now create a servlet program with `.java` extension and follow along
* On cmd, go to the location where the file with `.java ` file is store.
* run `javac -cp <Path to servlet-api.jar i.e C:\apache-tomcat-7.0.91\lib\servlet-api.jar> filename.java`
* You must have got a `filename.class` file in same location
  
### Time to make some folders
* go to `C:\apache-tomcat-7.0.91\webapps`
* make folder of project e.g `C:\apache-tomcat-7.0.91\webapp\HelloServlet`
* Additional folders inside it `C:\apache-tomcat-7.0.91\webapp\HelloServlet\WEB-INF\classes`
* make a `web.xml` inside `WEB-INF` folder.
* copy the `filename.class` to the  `C:\apache-tomcat-7.0.91\webapp\HelloServlet\WEB-INF\classes`

## Write the configuration and mapping servlet, Use example code below
   <web-app xmlns="http://java.sun.com/xml/ns/javaee"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://java.sun.com/xml/ns/javaee
                        http://java.sun.com/xml/ns/javaee/web-app_3_0.xsd"
    version="3.0"
    metadata-complete="true">

    <display-name>Welcome to Tomcat</display-name>
    <description>
        Welcome to Tomcat
    </description>
        <servlet> 
        <servlet-name>HelloServlet</servlet-name> 
        <servlet-class>HelloServlet</servlet-class>         
        </servlet> 
        <servlet-mapping> 
        <servlet-name>HelloServlet</servlet-name> 
        <url-pattern>/HelloServlet</url-pattern>  
        </servlet-mapping>

    </web-app>

  ## restart tomcat and access `localhost:8080/Hello/HelloServlet`
