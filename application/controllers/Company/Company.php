<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Company extends CI_Controller
{

    /*
    !--------------------------------------------------------
    !       Constructor Load During Creation of Object
    !--------------------------------------------------------
    */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('security');
    }

    /*
    !--------------------------------------------------------
    !       Default Function Admin for Homepage
    !--------------------------------------------------------
    */
    public function registration()
    {
        
        $this->load->view('front/company/log_reg/registration');
        
    }



    /*
    !--------------------------------------------------------
    !       Save Company
    !--------------------------------------------------------
    */
    public function save_company()
    {

        $email = $this->input->post('email');

        $explode = explode('@', $email);
        $data =  explode('.', $explode[1]);
       

        if ($data[0] == 'gmail') {
            $this->session->set_flashdata('error', 'You must have to use company email');
            redirect(base_url()."provider_registration");
        }elseif ($this->db->where('email',$this->input->post('email'))->get('tbl_company')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email already exist');
            redirect(base_url()."provider_registration");
        }elseif($this->input->post('password') != $this->input->post('password_confirm')){
            $this->session->set_flashdata('error', 'Password not matched');
            redirect(base_url()."provider_registration");
        }else{
            $this->db->insert('tbl_company',array(
                'company_name' => $this->input->post('company_name'),
                'email' => $this->input->post('email'),
                'full_name' => $this->input->post('full_name'),
                'location' => $this->input->post('location'),
                'password' => md5($this->input->post('password'))
            ));
            $insert_id = $this->db->insert_id();

            $session  = array(
                    'company'        => true,
                    'company_id'     => $insert_id,
                    'company_name'   => $this->input->post('company_name'),
                    'company_author'   => $this->input->post('full_name'),
                    'company_email'  =>$this->input->post('email'),
            );
           $this->session->set_userdata($session);
            $this->session->set_flashdata('success', 'Registered successfully');
            redirect(base_url());
        }
      
    }

    /*
    !--------------------------------------------------------
    !      Job Profile
    !--------------------------------------------------------
    */
    public function company_profile()
    {
        
        $this->load->view('front/lib/header',$data);
        $this->load->view('front/company/job/add_job');
        $this->load->view('front/lib/footer');
        
    }

    /*
    !--------------------------------------------------------
    !      Company Password
    !--------------------------------------------------------
    */
    public function forgot_password()
    {
        $this->sendMail();
        exit;

        $this->load->view('front/lib/header');
        $this->load->view('front/company/forgot_password/forgot_password');
        $this->load->view('front/lib/footer');
        
    }

    /*
    !--------------------------------------------------------
    !      Company Password
    !--------------------------------------------------------
    */
    public function sendMail()
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'onlinejobportalbd@gmail.com';                     // SMTP username
            $mail->Password   = 'LKJLKD&&^%D+5674';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to
            //Recipients
            $mail->setFrom('onlinejobportalbd@gmail.com', 'Mailer');
            //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress('arif98741@gmail.com');               // Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        
    }

    
    
    /*
    !--------------------------------------------------------
    !      Company Logout
    !--------------------------------------------------------
    */
    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'Logged out successfully');
        redirect(base_url());

    }

}