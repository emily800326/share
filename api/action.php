<?php
	include("db.php");
$action = $_POST["action"];
	switch ($action) {
		case "mail":
					$email = $_POST['email'];

		include("/PHPMailer/class.phpmailer.php");   // 匯入PHPMailer類別
			    $mail = new PHPMailer();                        // 建立新物件

			    $mail->IsSMTP();                                // 設定使用SMTP方式寄信
			    $mail->SMTPAuth = true;                         // 設定SMTP需要驗證

			    $mail->SMTPSecure = "ssl";                      // Gmail的SMTP主機需要使用SSL連線
			    $mail->Host = "smtp.gmail.com";                 // Gmail的SMTP主機
			    $mail->Port = 465;                              // Gmail的SMTP主機的port為465 587
			    $mail->CharSet = "utf-8";                       // 設定郵件編碼
			    $mail->Encoding = "base64";
			    $mail->WordWrap = 50;                           // 每50個字元自動斷行

			    $mail->Username = "emily800326@gmail.com";     // 設定驗證帳號
			    $mail->Password = "bear520520";              // 設定驗證密碼

			    $mail->From = "emily800326@gmail.com";         // 設定寄件者信箱
			    $mail->FromName = "SHARE系統管理員";                 // 設定寄件者姓名

			    $mail->Subject = "[SHARE]論文系統資料，請確認。"; // 設定郵件標題

			    $mail->IsHTML(true);                            // 設定郵件內容為HTML
			    //單人
			    $mail->AddAddress($email);  // 收件者郵件及名稱
		        $mail->Body =                                   // AddAddress(receiverMail, receiverName)
		            "
		            使用者您好: <br/><br/>
		            歡迎使用論文查詢系統。<br/><br/>
		            
		            本信為系統自動通知，<br/>
                    有任何問題請到mail至emily800326@gmail.com中詢問。<br/>


		            系統網址：<a href='140.115.126.235/share/'>140.115.126.235/share/<a><br/><br/>
		            SHARE關心您<br/><br/>
		            ";
					$mail->AddAddress($email);  // 想要寄的信箱位置  
					if(!$mail->Send()) 
					{ 
					    exit("警告：\n\n網路發生異常！請確認「網路連線」是否正常！");       
					} 
					else{
						exit("已將資料寄送至信箱，請檢查信箱內容！");
					}
					break;

		case "mail2":
		            $name = $_POST['name'];
					$email = $_POST['email'];
					$content = $_POST['content'];
		include("/PHPMailer/class.phpmailer.php");   // 匯入PHPMailer類別
			    $mail = new PHPMailer();                        // 建立新物件

			    $mail->IsSMTP();                                // 設定使用SMTP方式寄信
			    $mail->SMTPAuth = true;                         // 設定SMTP需要驗證

			    $mail->SMTPSecure = "ssl";                      // Gmail的SMTP主機需要使用SSL連線
			    $mail->Host = "smtp.gmail.com";                 // Gmail的SMTP主機
			    $mail->Port = 465;                              // Gmail的SMTP主機的port為465 587
			    $mail->CharSet = "utf-8";                       // 設定郵件編碼
			    $mail->Encoding = "base64";
			    $mail->WordWrap = 50;                           // 每50個字元自動斷行

			    $mail->Username = "emily800326@gmail.com";     // 設定驗證帳號
			    $mail->Password = "bear520520";              // 設定驗證密碼

			    $mail->From = "emily800326@gmail.com";         // 設定寄件者信箱
			    $mail->FromName = "SHARE系統管理員";                 // 設定寄件者姓名

			    $mail->Subject = "[SHARE]論文系統資料，請確認。"; // 設定郵件標題

			    $mail->IsHTML(true);                            // 設定郵件內容為HTML
			    //單人
			    $mail->AddAddress($email);              // 收件者郵件及名稱
			    $mail->AddAddress("wuret1@gmail.com"); 

		        $mail->Body =                                   // AddAddress(receiverMail, receiverName)
		            "
		             ".$name."使用者(".$email.")您好: <br/><br/>

		            本信為系統自動通知，<br/>
		            感謝您使用論文查詢系統。<br/><br/>
		            -----------------------------此為您提出的問題------------------------- <br/>

		             ".$content."
		             <br/>
		             ------------------------------------------------------------------------<br/>

		            系統管理員會盡快給您回覆，有任何問題請到mail至emily800326@gmail.com中詢問。<br/>

		            系統網址：<a href='140.115.126.235/share/'>140.115.126.235/share/<a><br/><br/>
		            
		            論文系統管理員關心您<br/><br/>

		            ";
					$mail->AddAddress($email);  // 想要寄的信箱位置  
					if(!$mail->Send()) 
					{ 
					    exit("警告：\n\n網路發生異常！請確認「網路連線」是否正常！");       
					} 
					else{
						exit("已將資料寄送至信箱，請檢查信箱內容！");
					}
					break;





   }
?>