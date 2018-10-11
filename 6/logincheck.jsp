<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JSP Page</title>
</head>

<body>
    <%
        String username=request.getParameter("username");
        String password=request.getParameter("password");
       
        if((username.equals("admin") && password.equals("password")))
            {
    %>
    <center>
        <bottom>
            <p>Login successful.Welcome to the new world.</p>
        </bottom>
    </center>
    <%
            }
        else{
        %>
    <p>Login failed.</p>

    <%}%>
</body>

</html>