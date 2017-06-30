<%@ page language="java" contentType="text/html; charset=UTF-8"
pageEncoding="UTF-8"%>

<%
request.setCharacterEncoding("UTF-8");
%>
<!DOCTYPE html>
<html>
<title>BACKOFFICE</title>
<jsp:include page="header_section.jsp" />
<style>
	.table {
		/*width: 100%;*/
		/*max-width: 100%;*/
		margin-bottom: 0px!important; 
	}
</style>
<body class="" onload="initMap()">
	<div id="page-wrapper" class="sign-in-wrapper">
		<div class="sign-in-form">
			<div class="sign-in-form-top">
				<p><a href="sign_in.jsp">LOGO</a></p>
			</div>
			<div class="signin">
				<form action="index.jsp">
					<div class="log-input">
						<div class="col-lg-1 col-mg-1">
							<img src="./images/user.png" alt="">
						</div>
						<div class="col-lg-11 col-md-11">
							<input type="text" class="user" value="" placeholder="Email Address" />
						</div>
					</div>
					<div class="log-input">
						<div class="col-lg-1 col-mg-1">
							<img src="./images/lock.png" alt="">
						</div>
						<div class="col-lg-11 col-md-11">
							<input type="password" class="lock" value="" placeholder="Password" />
						</div>
					</div>
					<div class="row">
						<input type="submit" value="Login to your account" class="col-lg-12 col-md-12">
					</div>
				</form>	 
			</div>
		</div>
	</div>
</body>
</html>