<?php
header('Content-Type: text/json');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: key=AAAAW-BvAsI:APA91bGzNe7ML1OUDc3t_hRCjdsS2nDFT9RZI3Z-trI8BOgyVSBoMQQLRk5b1nGTgxkJ2hlrR7211RAcWTv1JXnPQ-rFVyEC_htODkQL4SZhkUUbfEAfno_biVR42e_mb8nWTL3lhqa1', 'Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array(
	'registration_ids' => array('dLZ7sM6WosM:APA91bGrlXOr47BiHhyqWqt-CMw-U9rmoly8VmEKP3Em6EHrRk_AGnsQZ9e1TD3ys33--KkhsO1O0tpGwUJKV6ezca7aqh1D8IPgs0DJeGThy7JhKjb0FWXUkPuRzFtyCl7t-GwGCV2J'),
	'data' => array(
		'message' => json_encode(array(
			'type' => 'order.completed',
			'title' => 'Order Completed',
			'body' => 'Your Order #9201 has just been completed. It will be delivered in the next 24 hours.',
			'image_url' => 'https://lisk.ng/cp/public/img/logo.jpg'
		))
	),
	'notification' => array(
		'title' => 'Order Completed',
		'body' => 'Your Order #9201 has just been completed. It will be delivered in the next 24 hours.',
		'sound' => 'default',
		'icon' => 'https://lisk.ng/cp/public/img/logo.jpg',
		'badge' => 1,
		'android_channel_id' => 'main'
	),
	'priority' => 'high',
	'content_available' => true
)));
$reponse = curl_exec($ch);
print($reponse);
curl_close($ch);
exit;
