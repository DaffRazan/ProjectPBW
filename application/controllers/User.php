<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $user = $this->session->userdata('email');

        if ($user) {
            if ($this->session->userdata('role_id') == 2) {
                $data['title'] = 'Solusikenyang - Homepage';
                $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

                $this->load->view('navbar_user', $data);
                $this->load->view('homepage_user', $data);
            } else {
                redirect('admin');
            }
        } else {
            redirect('auth');
        }
    }

    public function order()
    {
        $data['title'] = 'Solusikenyang - Order Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['order'] = $this->db->get_where('order', ['id_user' => $this->session->userdata('id')])->row_array();

        $this->form_validation->set_rules('food', 'drink', 'required|trim');
        $this->form_validation->set_rules('drink', 'drink', 'required|trim');

        if ($data2['order']) {
            redirect('user/tampilOrder');
        } else {
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('navbar_user', $data);
                $this->load->view('order_user', $data);
            } else {
                date_default_timezone_set("Asia/Jakarta");
                $waktu_order =  date('Y-m-d H:i:s');

                $total = 0;
                $makanan = $this->Order_model->getHargaMakananByJenisMakanan($this->input->post('food'));
                $minuman = $this->Order_model->getHargaMinumanByJenisMinuman($this->input->post('drink'));
                $seat = $this->Order_model->getHargaSeatById((int)$this->input->post('id_seat'));

                $temp = $makanan[0]['harga_makanan'] + $minuman[0]['harga_minuman'] + $seat[0]['price'];

                $total += $temp;

                $data = [
                    "id_seat" => $this->input->post('id_seat', true),
                    "food" => $this->input->post('food', true),
                    "drink" => $this->input->post('drink', true),
                    "total" => $total,
                    "waktu_order" => $waktu_order,
                    "id_user" => $this->session->userdata('id')
                ];

                $this->db->insert('order', $data);
                $this->session->set_flashdata('flash', 'Success!');
                redirect('user/tampilOrder');
            }
        }
    }

    public function cancelOrder($id)
    {
        $this->Order_model->cancelOrder($id);
        $this->session->set_flashdata('flash', 'dicancel');
        redirect('user/index');
    }


    public function tampilOrder()
    {
        $data['title'] = 'Solusikenyang - Order Menu';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data2['order'] = $this->db->get_where('order', ['id_user' => $this->session->userdata('id')])->row_array();

        if ($data2['order']) {
            $this->load->view('navbar_user', $data);
            $this->load->view('tampil_orderan', $data2);
        } else {
            redirect('user/order');
        }
    }

    public function profile()
    {
        $data['title'] = 'Solusikenyang - Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $email = $this->input->post('email');

        $user = $this->db->get_where('user', ['email ' => $email])->row_array();

        $this->load->view('navbar_user', $data);
        $this->load->view('profile_user', $data);
    }

    public function editProfile()
    {
        $data['title'] = 'Solusikenyang - Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('fullname', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('navbar_user', $data);
            $this->load->view('editprofile_user', $data);
        } else {
            $name = $this->input->post('username');
            $fullname = $this->input->post('fullname');
            $email = $this->input->post('email');

            //cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = 'assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->set('fullname', $fullname);
            $this->db->set('username', $name);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated.
            </div>');
            redirect('user/profile');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Solusikenyang - Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('navbar_user', $data);
            $this->load->view('change_password', $data);
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');


            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong current password!
                </div>');
                redirect('user/changepassword');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    New password cannot be the same as current password!
                    </div>');
                    redirect('user/changepassword');
                } else {
                    //password ganti
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Password successfully changed!
                    </div>');
                    redirect('user/changepassword');
                }
            }
        }
    }
}
