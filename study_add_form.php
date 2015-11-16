<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
<head><title>회원가입</title></head>
<script>
	function chk_input(){
		if(addform.userid.value==''){
			alert('아이디를 입력하세요');
			addform.userid.focus();
			return false;
		}
		else if(addform.stu_name.value==''){
			alert('이름을 입력하세요');
			addform.stu_name.focus();
			return false;
		}
		else if(addform.password.value==''){
			alert('비밀번호를 입력하세요');
			addform.password.focus();
			return false;
		}
		else if(addform.password2.value==''){
			alert('비밀번호 확인을 입력하세요');
			addform.password2.focus();
			return false;
		}
		else if(addform.password.value != addform.password2.value) {
			alert("비밀번호 입력오류/ 비밀번호를 다시 입력하세요");
			addform.password.value="";
			addform.password2.value="";
			addform.password.focus();
			return false;
		}
		else {
			return true;
		}
	}

	function chk_id()
	{
		if(addform.userid.value==''){
			alert('학번을 입력하세요');
			addform.userid.focus();
		}
		else{
			window.open('study_id_chk.php?userid='+addform.userid.value,'IDwin','width=400, height=200');
		}
	}
</script>
<body>
	<form name="addform" method="post" action="study_add_db.php" onSubmit="return chk_input()">
	<center><h1>회 원 가 입</h1></center>
	<hr>
	<center><a href="study_login.php">로 그 인</a></center>
	<table border="2" width="700" align=center cellspacing=0 cellpadding="3">
	<tr>
		<td width="696" colspan="2" height="30" bgcolor="blue">#회원가입(*표는 반드시 기입할 사항입니다)</td>
	</tr> 
	<tr>
		<td bgcolor="#FFFF99"> * 아이디</td>
		<td> <input type="text" name="userid" maxlength="12" onblur="if(userid.value!=''){chk_id();}"> 
			<input type="button" value="중복검사" onclick="chk_id();">
		(영문과 숫자 12자리까지)
	</tr>
	<tr>
		<td bgcolor="#FFFF99">* 이름</td>
		<td> <input type="text" name="stu_name" maxlength="10">(5글자까지 가능)</td>
	</tr>
	<tr>
		<td bgcolor="#FFFF99">* 비밀번호</td>
		<td> <input type="password" name="password" maxlength="10">(영문과 숫자 혼합 10자리까지)</td>
	</tr>
	<tr>
		<td bgcolor="#FFFF99">* 비밀번호 확인</td>
		<td> <input type="password" name="password2" maxlength="10" onblur="chk_password();">(비밀번호와 똑같이 입력하세요.)</td>
	</tr>

	<tr>
		<td bgcolor="#FFFF99">몸무게</td>
		<td><input type="number" name="weight"></td>
	</tr>
		<tr>
		<td bgcolor="#FFFF99">나이</td>
		<td><input type="radio" name="age" value="10">10대
			<input type="radio" name="age" value="20">20대
			<input type="radio" name="age" value="30">30대
			<input type="radio" name="age" value="40">40대
			<input type="radio" name="age" value="50">50대
		</td>
	</tr>
		<tr>
		<td bgcolor="#FFFF99">키</td>
		<td><input type="number" name="height">
		</td>
		</tr>
		<tr>
		<td bgcolor="#FFFF99">희망 몸무게</td>
		<td><input type="number" name="wanted_weight">
		</td>
		</tr>
		<tr>
		<td bgcolor="#FFFF99">싫어하는 음식을 입력해주세요.</td>
		<td><textarea rows="10" cols="30"> </textarea>
		</td>
		</tr>


	<tr>
		<td colspan="2" align="center"> <input type="submit" value="가입하기" 
			name="added">
			<input type="reset" value="다시하기" name="reset">
		</td>
	</tr>
	</table>
</form>
</body>
</html>


