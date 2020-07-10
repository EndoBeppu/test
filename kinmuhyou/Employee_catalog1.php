<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" href="sample.css" type="text/css">
<style>
}
.success {
	border: 2px solid limegreen;
}

.error {
	border: 2px solid crimson;
}
</style>
</head>
<body>



	<div align="center">
		<h3>社員情報収集</h3>
	</div>

	<div align="center">
		<form action="" class="signup-form">

			<table>
				<tr>

					<td><strong>社員番号</strong>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			</table>
			<br> <font color="red">
				<div class="feedback"></div>
				<div class="feedback2"></div>
			</font>
			<table>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

					<strong>姓</strong>&nbsp; <input type="text" id="username"
						style="width: 60px; padding: 8px;">&nbsp;</td>

					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;
					<strong>名</strong>&nbsp;&nbsp;<input type="text" id="username2"
						style="width: 60px; padding: 8px;"></td>
				</tr>


			</table>
			<br> <font color="red">
				<div class="feedback3"></div>
				<div class="feedback4"></div>
			</font>
			<table>

				<tr>

					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<strong>姓(カナ)</strong> &nbsp;<input type="text" id="username3"
						style="width: 60px; padding: 8px;"></td>

					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<strong>名(カナ)</strong>&nbsp;<input type="text" id="username4"
						style="width: 60px; padding: 8px;"></td>
				</tr>


			</table>

			<br> <font color="red">
				<div class="feedback5"></div>
			</font>
			<table>

				<tr>

					<td>&nbsp;<strong>メールアドレス</strong> <input type="text" id="email"
						style="width: 250px; padding: 5px;"></td>


				</tr>


			</table>
			<br> <font color="red">
				<div class="feedback6"></div>
			</font>
			<table>
				<tr>

					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>入社日</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" id="nyuusha" placeholder="年月日"
						style="width: 250px; padding: 5px;"></td>


				</tr>


			</table>
			<br> <font color="red">
				<div class="feedback7"></div>
			</font>
			<table>
				<tr>

					<td><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;退職日</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" id="taishoku" placeholder="年月日"
						style="width: 250px; padding: 5px;"></td>


				</tr>


			</table>
			<br> <font color="red">
				<div class="feedback8"></div>
			</font>
			<table>

				<tr>

					<td>&nbsp;&nbsp;&nbsp;<strong>有給残日数</strong>&nbsp;&nbsp;&nbsp; <input
						type="number" id="yuukyuu" style="width: 250px; padding: 5px;"></td>


				</tr>


			</table>

			<br>
			<table>

				<tr>

					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>権限</strong>&nbsp; <input type="checkbox" id="">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;

					</td>


				</tr>


			</table>







			<br> <br> <input type="submit" value="変更"onClick="kakunin();" class="submit"
				style="width: 110px; padding: 10px;">&nbsp;&nbsp; <input type="submit"
				value="追加" class="" style="width: 110px; padding: 10px;">&nbsp;&nbsp; <input
				type="button" onclick="history.back()" value="キャンセル" class=""
				style="width: 110px; padding: 10px;">






		<script src="sandbox.js"></script>

</body>
</html>