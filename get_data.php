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

$data['status']['A'] = array(127520,128640,129520,129840,130400,131520,132240,132400,132480,132960);
$data['status']['A2'] = array(10641,9491,9986,8984,9946,8984,9894,9979,10791,10879);
$data['status']['B'] = array('85시간01분','86시간16분','86시간35분','86시간56분','87시간33분','88시간08분','88시간16분','88시간27분','88시간41분','89시간04분');
$data['status']['B2'] = array(28,29,28,31,30,31,32,33,31,29);
$data['status']['C'] = array(12752,12864,12952,12984,13040,13152,13224,13240,13248,13296);
$data['status']['C2'] = array(8,7,8,9,8,8,7,9,8,9);
$data['status']['D'] = array(0,0,0,0,0,0,0,0,0,0);
$data['status']['D2'] = array(0,0,0,0,0,0,0,0,0,0);

$data['pass']['A'] = array(1594,1601,1610,1620,1630,1643,1656,1670,1685,1701);
$data['pass']['B'] = array(7,9,10,10,13,13,14,15,16,17);
$data['pass']['C'] = array(4,5,5,5,7,7,7,8,9,10);
$data['pass']['D'] = array(3,4,5,5,6,6,7,7,7,7);
$data['pass']['E'] = array(0,0,0,0,0,0,0,0,0,0);

$data['join']['A'] = array(4981,4990,5021,5055,5097,5142,5172,5215,5241,5251);
$data['join']['B'] = array(9,31,34,42,45,30,43,26,10,19);
$data['join']['C'] = array(1,10,8,11,11,9,14,6,3,7);
$data['join']['D'] = array(8,15,17,25,25,16,22,15,5,10);
$data['join']['E'] = array(0,6,9,6,9,5,7,5,2,2);

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
    'join_C' => $data['join']['C'][$get_data],
    'join_D' => $data['join']['D'][$get_data],
    'join_E' => $data['join']['E'][$get_data],

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
