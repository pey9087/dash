<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <title>Hwik Pinepass Dashboard</title>
	<link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrap">
	<header id="header">
		<h1 class="brand"><a href="./dashboard.php" class="logo">Hwik Pinepass Dashboard</a></h1>
		<input type="text" id="datetimepicker" class="date-select" value="2021년 01월 19일 05:11">
	</header>
	<nav id="gnb">
		<ul>
			<li class="dashboard on"><a href="./dashboard.php">대쉬보드</a></li>
			<li class="map"><a href="./map.html">지도</a></li>
		</ul>
	</nav>
	<main id="content">
		<div class="main-cont">

			<div class="row odd">
				<div class="brd-box">
					<h2 class="brd-title">킥보드 현황</h2>
					<ul class="state-value">
						<li>
							<p class="part-tit">탑승중</p>
							<p class="part-val"><span id="kick_A">0</span></p>
						</li>
						<li>
							<p class="part-tit">대기중</p>
							<p class="part-val"><span id="kick_B">0</span></p>
						</li>
						<li>
							<p class="part-tit">충전중</p>
							<p class="part-val"><span id="kick_C">0</span></p>
						</li>
						<li>
							<p class="part-tit">지역이탈</p>
							<p class="part-val">0</p>
						</li>
					</ul>
				</div>
				<div class="brd-box">
					<h2 class="brd-title">전기자전거 현황</h2>
					<ul class="state-value">
						<li>
							<p class="part-tit">탑승중</p>
							<p class="part-val"><span id="bike_A">0</span></p>
						</li>
						<li>
							<p class="part-tit">대기중</p>
							<p class="part-val"><span id="bike_B">0</span></p>
						</li>
						<li>
							<p class="part-tit">충전중</p>
							<p class="part-val"><span id="bike_C">0</span></p>
						</li>
						<li>
							<p class="part-tit">지역이탈</p>
							<p class="part-val">0</p>
						</li>
					</ul>
				</div>
				<div class="brd-box">
					<h2 class="brd-title">PM배터리 현황</h2>
					<table>
						<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col" class="high">80%↑</th>
							<th scope="col">60%↑</th>
							<th scope="col">40%↑</th>
							<th scope="col" class="low">30%↓</th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">킥보드</th>
								<td class="high"><span id="pm_kick_80">0</span></td>
								<td><span id="pm_kick_60">0</span></td>
								<td><span id="pm_kick_40">0</span></td>
								<td class="low"><span id="pm_kick_30">0</span></td>
							</tr>
							<tr>
								<th scope="row">전기자전거</th>
								<td class="high"><span id="pm_bike_80">0</span></td>
								<td><span id="pm_bike_60">0</span></td>
								<td><span id="pm_bike_40">0</span></td>
								<td class="low"><span id="pm_bike_30">0</span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="brd-box accident">
					<h2 class="brd-title">사고현황</h2>
					<ul class="state-value">
						<li>
							<p class="part-tit">사고접수</p>
							<p class="part-val">0</p>
						</li>
						<li>
							<p class="part-tit">처리완료</p>
							<p class="part-val">0</p>
						</li>
					</ul>
				</div>
			</div>


			<div class="row even">
				<div class="brd-box user-number">
					<h2 class="brd-title">일별 앱사용자 (1월)</h2>
					<p class="summary">일평균 사용자 <span>309 </span></p>
					<div id="user_number"></div>
				</div>
				<div class="brd-box pm-number">
					<h2 class="brd-title">시간대별 PM이용 현황</h2>
					<div id="pm_number"></div>
				</div>
				<div class="brd-box qna-state">
					<h2 class="brd-title">1:1문의 현황</h2>
					<ul class="state-value">
						<li>
							<p class="part-tit">미처리</p>
							<p class="part-val"><span id="inquiry_A">0</span></p>
						</li>
						<li>
							<p class="part-tit">완료</p>
							<p class="part-val"><span id="inquiry_B">0</span></p>
						</li>
					</ul>
					<p class="treat-time">평균 처리시간 <span class="green"><span id="inquiry_C">0</span>분</span></p>
				</div>
			</div>


			<div class="row odd">
				<div class="brd-box use-state">
					<h2 class="brd-title">이용현황</h2>
					<ul class="state-value">
						<li>
							<p class="part-tit">이동거리</p>
							<div class="part-val">
								<p class="current"><span id="status_A">0</span>m</p>
								<p class="average">평균 <span id="status_A2">0</span>m</p>
							</div>
						</li>
						<li>
							<p class="part-tit">이용시간</p>
							<div class="part-val">
                                <p class="current"><span id="status_B"><span class="hour">0</span>시간 <span class="min">0</span>분</span></p>
								<p class="average">평균 <span id="status_B2">0</span>분</p>
							</div>
						</li>
						<li>
							<p class="part-tit">이용횟수</p>
							<div class="part-val">
								<p class="current"><span id="status_C">0</span>건</p>
								<p class="average">평균 <span id="status_C2">0</span>건</p>
							</div>
						</li>
						<li>
							<p class="part-tit">사고건수</p>
							<div class="part-val">
								<p class="current"><span id="status_D">0</span>건</p>
								<p class="average">평균 <span id="status_C">0</span>건</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="brd-box pass-sales">
					<h2 class="brd-title">Day 패스 구매 현황</h2>
					<div class="summary">
                        <p>누적 <span id="pass_A">0</span></p>
                        <p>금일 <span><span id="pass_B">0</span>건</span></p>
                    </div>

					<div id="pass_sales"></div>
				</div>
			</div>

			<div class="row even">
				<div class="brd-box">
					<h2 class="brd-title">회원 가입 현황</h2>
					<table>
						<thead>
							<tr>
								<th scope="col"></th>
								<th scope="col">누적 <span id="join_A">6,051</span></th>
								<th scope="col">Today <span id="join_B">51</span></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">휴대폰</th>
								<td><span id="PHONE_A">1,301</span></td>
								<td><span id="PHONE_B">31</span> <span id="PHONE_C"><span class="low">↓ 1</span></span></td>
							</tr>
							<tr>
								<th scope="row">카카오톡</th>
								<td><span id="KAKAO_A">2,584</span></td>
								<td><span id="KAKAO_B">54</span> <span id="KAKAO_C"><span class="high">↑ 5</span></span></td>
							</tr>
							<tr>
								<th scope="row">네이버</th>
								<td><span id="NAVER_A">4,166</span></td>
								<td><span id="NAVER_B">66</span> <span id="NAVER_C"><span class="high">↑ 5</span></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="brd-box gen-distribution">
					<h2 class="brd-title">이용자 성별/연령 현황</h2>
					<div class="summary">
                        <p class="male">
                            <span class="tit">남자</span>
                            <span id="sex_man">58</span>%
                        </p>
                        <p class="female">
                            <span class="tit">여자</span>
                            <span id="sex_woman">42</span>%
                        </p>
                    </div>
					<div id="age_distribution"></div>
				</div>
				<div class="brd-box app-user">
					<h2 class="brd-title">앱사용자 현황</h2>
					<div class="summary">
                        <p class="android">
                            <span class="tit">Android</span>
                            <span id="phone_A">54</span>%
                        </p>
                        <p class="android">
                            <span class="tit">iOS</span>
                            <span id="phone_B">46</span>%
                        </p>
                    </div>
					<div id="user_device"></div>
				</div>
				<div class="brd-box">
					<h2 class="brd-title">매장 예약 현황</h2>
					<p class="summary">금일예약 <span>6건</span></p>
					<div id="time_booking"></div>
				</div>
			</div>
		</div>
	</main>
	<footer id="footer">Hwik Pinepass Dashboard © 2020 All Rights Reserved</footer>
</div>
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script src="js/core.js"></script>
<script src="js/charts.js"></script>
<script src="js/animated.js"></script>
<script src="js/custom_script.js"></script>
<script>
	$(function(){
		if(localStorage.getItem("data_num") == null){
			localStorage.setItem("data_num", 0);
		}else{
			console.log(localStorage.getItem("data_num"));
		}
		get_dashboard_data();
		setInterval(get_dashboard_data,300000);
		// setInterval(get_dashboard_data,2000);
	})

	function get_dashboard_data(){
		let data_num = localStorage.getItem("data_num");
		let next_data_num;
		if(data_num >= 9){
			next_data_num = 0;
		}else{
			next_data_num = Number(data_num) + 1;
		}

		$.ajax({
			url: "get_data.php",
			type: "GET",
			cache: false,
			dataType: "json",
			data: {num : data_num},
			success: function(data){
				$.each(data,(key,value) => {
					$('#'+key).html(value);
				});
				chart3(data.pass_C,data.pass_D,data.pass_E);
				chart4(data.sex_10,data.sex_20,data.sex_30,data.sex_40,data.sex_50);
				chart5(data.phone_A,data.phone_B);
				chart6(data.reservation_10,data.reservation_11,data.reservation_12,data.reservation_13,data.reservation_14,data.reservation_15,data.reservation_16,data.reservation_17,data.reservation_18,data.reservation_19,data.reservation_20,data.reservation_21,data.reservation_22);
				
				localStorage.setItem("data_num", next_data_num);
			}
		});
	}
</script>
</body>
</html>
