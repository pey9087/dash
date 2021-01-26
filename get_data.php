<?php
include_once('../common.php');

$get_data = $_GET['num'];

$data = [];

$data['kick']['A'] = array(16,14,10,8,8,7,9,12,13,17);
$data['kick']['B'] = array(52,60,60,61,67,63,67,59,56,44);
$data['kick']['C'] = array(31,26,30,30,25,28,24,29,31,38);
$data['kick']['D'] = array(1,0,0,1,0,2,0,0,0,1);

$data['bike']['A'] = array(5,5,4,3,2,3,4,5,5,6);
$data['bike']['B'] = array(14,14,14,15,16,15,13,13,10,10);
$data['bike']['C'] = array(11,11,12,12,12,12,13,12,15,14);
$data['bike']['D'] = array(0,0,0,0,0,0,0,0,0,0);

$data['pm_kick']['80'] = array(74,81,80,75,77,77,80,80,88,90);
$data['pm_kick']['60'] = array(20,16,17,23,22,20,18,20,12,8);
$data['pm_kick']['40'] = array(5,3,1,2,1,3,2,0,0,2);
$data['pm_kick']['30'] = array(1,0,2,0,0,0,0,0,0,0);

$data['pm_bike']['80'] = array(18,20,24,26,25,26,28,29,28,25);
$data['pm_bike']['60'] = array(10,5,3,1,4,3,1,0,1,3);
$data['pm_bike']['40'] = array(2,5,2,3,1,0,1,1,1,2);
$data['pm_bike']['30'] = array(0,0,1,0,0,1,0,0,0,0);

$data['accident']['A'] = array(0,0,0,0,0,0,0,0,0,0);
$data['accident']['B'] = array(0,0,0,0,0,0,0,0,0,0);

$data['inquiry']['A'] = array(5,3,0,1,2,1,3,4,1,2);
$data['inquiry']['B'] = array(3,5,8,8,9,11,13,16,16,17);
$data['inquiry']['C'] = array(2,1,1,1,1,1,2,2,1,1);

$data['status']['A'] = array('127,520','128,640','129,520','129,840','130,400','131,520','132,240','132,400','132,480','132,960');
$data['status']['A2'] = array('10,641','9,491','9,986','8,984','9,946','8,984','9,894','9,979','10,791','10,879');
$data['status']['B'] = array(
    '<span class="hour">140</span>시간 <span class="min">01</span>분',
    '<span class="hour">140</span>시간 <span class="min">16</span>분',
    '<span class="hour">140</span>시간 <span class="min">35</span>분',
    '<span class="hour">140</span>시간 <span class="min">56</span>분',
    '<span class="hour">141</span>시간 <span class="min">33</span>분',
    '<span class="hour">141</span>시간 <span class="min">08</span>분',
    '<span class="hour">141</span>시간 <span class="min">16</span>분',
    '<span class="hour">141</span>시간 <span class="min">27</span>분',
    '<span class="hour">141</span>시간 <span class="min">41</span>분',
    '<span class="hour">142</span>시간 <span class="min">04</span>분');
$data['status']['B2'] = array(28,29,28,31,30,31,32,33,31,29);
$data['status']['C'] = array('1,409','1,411','1,411','1,416','1,423','1,425','1,425','1,426','1,430','1,432');
$data['status']['C2'] = array(8,7,8,9,8,8,7,9,8,9);
$data['status']['D'] = array(0,0,0,0,0,0,0,0,0,0);
$data['status']['D2'] = array(0,0,0,0,0,0,0,0,0,0);

$data['pass']['A'] = array(1198,1205,1214,1224,1234,1247,1260,1274,1289,1305);
$data['pass']['B'] = array(7,9,10,10,13,13,14,15,16,17);
$data['pass']['C'] = array(4,5,5,5,7,7,7,8,9,10);
$data['pass']['D'] = array(3,4,5,5,6,6,7,7,7,7);
$data['pass']['E'] = array(0,0,0,0,0,0,0,0,0,0);

$data['join']['A'] = array(4981,4990,5021,5055,5097,5142,5172,5215,5241,5251);
$data['join']['B'] = array(16,28,31,35,46,54,63,71,75,82);
$data['join']['PHONE_A'] = array('1,245','1,248','1,252','1,257','1,264','1,274','1,286','1,299','1,314','1,331');
$data['join']['PHONE_B'] = array(1,3,4,6,10,13,13,13,14,15);
$data['join']['PHONE_C'] = array(
    '<span class="low">↓ 10</span>',
    '<span class="low">↓ 8</span>',
    '<span class="low">↓ 7</span>',
    '<span class="low">↓ 5</span>',
    '<span class="low">↓ 1</span>',
    '<span class="high">↑ 2</span>',
    '<span class="high">↑ 2</span>',
    '<span class="high">↑ 2</span>',
    '<span class="high">↑ 3</span>',
    '<span class="high">↑ 4</span>'
);
$data['join']['KAKAO_A'] = array('2,092','2,097','2,103','2,111','2,124','2,140','2,160','2,183','2,208','2,235');
$data['join']['KAKAO_B'] = array(8,9,10,10,15,17,21,24,25,28);
$data['join']['KAKAO_C'] = array(
    '<span class="low">↓ 15</span>',
    '<span class="low">↓ 14</span>',
    '<span class="low">↓ 13</span>',
    '<span class="low">↓ 8</span>',
    '<span class="low">↓ 6</span>',
    '<span class="low">↓ 2</span>',
    '<span class="high">↑ 1</span>',
    '<span class="high">↑ 2</span>',
    '<span class="high">↑ 5</span>'
);
$data['join']['NAVER_A'] = array('1,644','1,648','1,653','1,659','1,669','1,681','1,697','1,715','1,734','1,756');
$data['join']['NAVER_B'] = array(0,0,1,3,5,8,13,18,20,23);
$data['join']['NAVER_C'] = array(
    '<span class="low">↓ 18</span>',
    '<span class="low">↓ 18</span>',
    '<span class="low">↓ 17</span>',
    '<span class="low">↓ 15</span>',
    '<span class="low">↓ 13</span>',
    '<span class="low">↓ 10</span>',
    '<span class="low">↓ 5</span>',
    '<span class="high">↑ 0</span>',
    '<span class="high">↑ 2</span>',
    '<span class="high">↑ 5</span>'
);

$data['sex']['man'] = array(59,59,59,58,58,57,57,58,58,57);
$data['sex']['woman'] = array(41,41,41,42,42,43,43,42,42,43);
$data['sex']['10'] = array(13,14,14,14,14,16,16,17,16,16);
$data['sex']['20'] = array(44,43,43,44,46,47,49,48,48,49);
$data['sex']['30'] = array(19,19,20,21,21,19,18,18,21,20);
$data['sex']['40'] = array(17,18,18,17,15,15,15,15,14,14);
$data['sex']['50'] = array(6,6,5,4,4,3,2,2,1,1);

$data['phone']['A'] = array(51,50,51,49,48,49,50,51,53,52);
$data['phone']['B'] = array(49,50,49,51,52,51,50,49,47,48);

$data['reservation']['hot'] = array(14,14,13,13,12,13,12,14,13,13);
$data['reservation']['10'] = array(0,1,1,0,0,1,0,0,0,0);
$data['reservation']['11'] = array(5,4,3,3,4,4,5,4,3,2);
$data['reservation']['12'] = array(9,6,5,6,10,5,10,8,6,5);
$data['reservation']['13'] = array(8,7,10,10,4,10,6,8,10,10);
$data['reservation']['14'] = array(10,9,8,7,7,6,8,10,5,4);
$data['reservation']['15'] = array(4,3,4,4,5,4,3,3,4,3);
$data['reservation']['16'] = array(3,2,1,0,1,3,1,1,0,1);
$data['reservation']['17'] = array(6,6,4,5,4,4,3,3,2,2);
$data['reservation']['18'] = array(8,8,9,8,6,5,6,6,5,5);
$data['reservation']['19'] = array(7,6,6,8,7,6,5,4,6,4);
$data['reservation']['20'] = array(5,4,4,2,0,1,0,1,1,2);
$data['reservation']['21'] = array(1,0,0,1,0,0,0,0,0,0);
$data['reservation']['22'] = array(0,0,0,0,0,0,0,0,0,0);



$rs_data = [
    'kick_A' => $data['kick']['A'][$get_data],
    'kick_B' => $data['kick']['B'][$get_data],
    'kick_C' => $data['kick']['C'][$get_data],
    'kick_D' => $data['kick']['D'][$get_data],
    'bike_A' => $data['bike']['A'][$get_data],
    'bike_B' => $data['bike']['B'][$get_data],
    'bike_C' => $data['bike']['C'][$get_data],
    'bike_D' => $data['bike']['D'][$get_data],
    'pm_kick_80' => $data['pm_kick']['80'][$get_data],
    'pm_kick_60' => $data['pm_kick']['60'][$get_data],
    'pm_kick_40' => $data['pm_kick']['40'][$get_data],
    'pm_kick_30' => $data['pm_kick']['30'][$get_data],
    'pm_bike_80' => $data['pm_bike']['80'][$get_data],
    'pm_bike_60' => $data['pm_bike']['60'][$get_data],
    'pm_bike_40' => $data['pm_bike']['40'][$get_data],
    'pm_bike_30' => $data['pm_bike']['30'][$get_data],

    'accident_A' => $data['accident']['A'][$get_data],
    'accident_B' => $data['accident']['B'][$get_data],

    'inquiry_A' =>$data['inquiry']['A'][$get_data],
    'inquiry_B' =>$data['inquiry']['B'][$get_data],
    'inquiry_C' =>$data['inquiry']['C'][$get_data],

    'status_A' => $data['status']['A'][$get_data],
    'status_A2' => $data['status']['A2'][$get_data],
    'status_B' => $data['status']['B'][$get_data],
    'status_B2' => $data['status']['B2'][$get_data],
    'status_C' => $data['status']['C'][$get_data],
    'status_C2' => $data['status']['C2'][$get_data],
    'status_D' => $data['status']['D'][$get_data],
    'status_D2' => $data['status']['D2'][$get_data],

    'pass_A' => $data['pass']['A'][$get_data],
    'pass_B' => $data['pass']['B'][$get_data],
    'pass_C' => $data['pass']['C'][$get_data],
    'pass_D' => $data['pass']['D'][$get_data],
    'pass_E' => $data['pass']['E'][$get_data],

    'join_A' => $data['join']['A'][$get_data],
    'join_B' => $data['join']['B'][$get_data],
    'PHONE_A' => $data['join']['PHONE_A'][$get_data],
    'PHONE_B' => $data['join']['PHONE_B'][$get_data],
    'PHONE_C' => $data['join']['PHONE_C'][$get_data],
    'KAKAO_A' => $data['join']['KAKAO_A'][$get_data],
    'KAKAO_B' => $data['join']['KAKAO_B'][$get_data],
    'KAKAO_C' => $data['join']['KAKAO_C'][$get_data],
    'NAVER_A' => $data['join']['NAVER_A'][$get_data],
    'NAVER_B' => $data['join']['NAVER_B'][$get_data],
    'NAVER_C' => $data['join']['NAVER_C'][$get_data],

    'sex_man' => $data['sex']['man'][$get_data],
    'sex_woman' => $data['sex']['woman'][$get_data],
    'sex_10' => $data['sex']['10'][$get_data],
    'sex_20' => $data['sex']['20'][$get_data],
    'sex_30' => $data['sex']['30'][$get_data],
    'sex_40' => $data['sex']['40'][$get_data],
    'sex_50' => $data['sex']['50'][$get_data],

    'phone_A' => $data['phone']['A'][$get_data],
    'phone_B' => $data['phone']['B'][$get_data],
    'reservation_hot' => $data['reservation']['hot'][$get_data],
    'reservation_10' => $data['reservation']['10'][$get_data],
    'reservation_11' => $data['reservation']['11'][$get_data],
    'reservation_12' => $data['reservation']['12'][$get_data],
    'reservation_13' => $data['reservation']['13'][$get_data],
    'reservation_14' => $data['reservation']['14'][$get_data],
    'reservation_15' => $data['reservation']['15'][$get_data],
    'reservation_16' => $data['reservation']['16'][$get_data],
    'reservation_17' => $data['reservation']['17'][$get_data],
    'reservation_18' => $data['reservation']['18'][$get_data],
    'reservation_19' => $data['reservation']['19'][$get_data],
    'reservation_20' => $data['reservation']['20'][$get_data],
    'reservation_21' => $data['reservation']['21'][$get_data],
    'reservation_22' => $data['reservation']['22'][$get_data]
];

echo json_encode($rs_data);
