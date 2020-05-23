<?

include "connect.php";
$no = $_GET['no'];

$query = "select no, domain from guard2 where no=$no";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<style>
		li{
			color: white;
			list-style: none;
		}
		a{
			color: white;
		}
		a:hover {
			color: white;
			text-decoration: none;
		}
	</style>
</head>
<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 bg-light" style="height: 600px;">
	<div class="col-md-5 p-lg-5 mx-auto my-5">
		<table class="table" style="border: 0.1px black">
			<form action="guard2_modify2.php" method="post">
				<?
				while($row = mysqli_fetch_row($result))
				{
					?>
					<tr>
						<th><h3 style="font-weight: 700">차단된 도메인</h3></th>
					</tr>
					<tr>
						<td>번호 : <input type="text" name="no" value="<? echo $row[0] ?>" style="margin-left: 30px" readonly/></td>
					</tr>
					<tr>
						<td>도메인: <input type="text" name="domain" value="<? echo $row[1] ?>" style="margin-left: 18px"></td>
					</tr>
					<?
				}
				?>
			</table>
			<button style="background-color: #0B2161; margin-left: 60%" type="submit" class="btn btn-primary"> 수정하기</button>
		</form>
	</div>
</div>