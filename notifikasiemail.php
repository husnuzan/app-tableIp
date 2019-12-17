<?php 

require 'koneksi.php';
require 'PHPMailer/PHPMailerAutoload.php';

	$result = mysqli_query($koneksi, "SELECT * FROM iptable"); 
 
	
	while ($user_data = mysqli_fetch_array($result)) {

			$id =$user_data['id'];
		
			$tglperemajaan=$user_data['tglperemajaan'];
			// $nomorserial=$user_data['nomorserial'];

			//notifikasi email		 
			$date = date_create($tglperemajaan);
			date_modify($date, '-7 days');
			$notifikasiemail = date_format($date, 'Y-m-d');

			$waktusekarang = date('Y-m-d');
			
			if ( $waktusekarang === $notifikasiemail) {
				
				$mail = new PHPMailer;                              

				$mail->isSMTP();                                     
				$mail->Host = 'smtp.gmail.com';  
				$mail->SMTPAuth = true;                               
				$mail->Username = 'husnuzanid@gmail.com';                 
				$mail->Password = 'accang123';                           
				$mail->SMTPSecure = 'tls';                            
				$mail->Port = 587;                                    

				$mail->setFrom('husnudaeng@gmail.com', 'Server');
				$mail->addAddress('husnuzanid@gmail.com', 'Admin');     
				$mail->isHTML(true);                                  

				$mail->Subject = 'Peringatan Masa Peremajaan';
				$mail->Body    = 'masa peremajaan untuk barang dengan nomor serial '.$nomorserial;
				$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

				$mail->Send();

			}

		
		}


?>