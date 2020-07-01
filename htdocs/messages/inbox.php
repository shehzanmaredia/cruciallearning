<?php include $_SERVER['DOCUMENT_ROOT'] . '/header_files/header.php';?>
	<div class='inbox'>
	<table>
		<tr>
			<th>From</th>
			<th>Subject</th>
			<th>Message</th>
		</tr>
	<?php foreach ($_SESSION['message_list'] as $message): //each message should be an associative array containing sender, subject, and message?>
		<tr>
			<td><?php echo $message['message_sender_id']?></td>
			<td><?php echo $message['message_receiver_id']?></td>
			<td><?php echo $message['message_content']?></td>
		</tr>
	<?php endforeach;?>
	</table>
	</div>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/footer_files/footer.php';?>