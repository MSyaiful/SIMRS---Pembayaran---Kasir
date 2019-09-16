<?php defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mailer {
    protected $_ci;
    protected $email_pengirim = 'msyaifuliskandar@gmail.com'; // Isikan dengan email pengirim
    protected $nama_pengirim = 'MSyaiful Iskandar'; // Isikan dengan nama pengirim
    protected $password = 'szopogedfelouelw'; // Isikan dengan password email pengirim
    public function __construct(){
        $this->_ci = &get_instance(); // Set variabel _ci dengan Fungsi2-fungsi dari Codeigniter
        require_once(APPPATH.'third_party/phpmailer/Exception.php');
        require_once(APPPATH.'third_party/phpmailer/PHPMailer.php');
        require_once(APPPATH.'third_party/phpmailer/SMTP.php');
    }
    public function send($data){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        $mail->Subject = $data['subjek'];
        $mail->Body = $data['content'];
        $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
        $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
        }else{ // Jika Email Gagal dikirim
            $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
        }
        return $response;
    }
    public function send_with_attachment($data){
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = $this->email_pengirim; // Email Pengirim
        $mail->Password = $this->password; // Isikan dengan Password email pengirim
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        // $mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging
        $mail->setFrom($this->email_pengirim, $this->nama_pengirim);
        $mail->addAddress($data['email_penerima'], '');
        $mail->isHTML(true); // Aktifkan jika isi emailnya berupa html
        $mail->Subject = $data['subjek'];
        $mail->Body = $data['content'];
        $mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
        $mail->addAttachment($data['attachment']);
        $send = $mail->send();
        if($send){ // Jika Email berhasil dikirim
            $response = array('status'=>'Sukses', 'message'=>'Email berhasil dikirim');
        }else{ // Jika Email Gagal dikirim
            $response = array('status'=>'Gagal', 'message'=>'Email gagal dikirim');
        }
        return $response;
    }
}