<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User extends Controller {
    
    public function __construct() {
        parent::__construct();
        $this->call->model('user_model');
    }

    public function read() {
        $data['users'] = $this->user_model->read(); 
        $data['name'] = "Lavalust Framework";
        $this->call->view('display', $data); 
    }

    public function create() {
        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('jmr_last_name')
                    ->required('Last name is required')
                ->name('jmr_first_name')
                    ->required('First name is required')
                ->name('jmr_email')
                    ->required('Email is required')
                ->name('jmr_gender')
                    ->required('Gender is required')
                ->name('jmr_address')
                    ->required('Address is required');
                    
            if ($this->form_validation->run()) {
                $jmr_last_name = $this->io->post('jmr_last_name');
                $jmr_first_name = $this->io->post('jmr_first_name');
                $jmr_email = $this->io->post('jmr_email');
                $jmr_gender = $this->io->post('jmr_gender');
                $jmr_address = $this->io->post('jmr_address');

                if ($this->user_model->create($jmr_last_name, $jmr_first_name, $jmr_email, $jmr_gender, $jmr_address)) {
                    set_flash_alert('success', 'User was added successfully.');
                    redirect('user/add');
                } else {
                    set_flash_alert('danger', 'Failed to add user.');
                    redirect('user/add');
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('user/add');
            }
        }

        $this->call->view('user/create'); 
    }

    public function update($id) {
        $data['u'] = $this->user_model->get_one($id);

        if ($this->form_validation->submitted()) {
            $this->form_validation
                ->name('jmr_last_name')
                    ->required('Last name is required')
                ->name('jmr_first_name')
                    ->required('First name is required')
                ->name('jmr_email')
                    ->required('Email is required')
                ->name('jmr_gender')
                    ->required('Gender is required')
                ->name('jmr_address')
                    ->required('Address is required');
        
            if ($this->form_validation->run()) {
                $jmr_last_name = $this->io->post('jmr_last_name');
                $jmr_first_name = $this->io->post('jmr_first_name');
                $jmr_email = $this->io->post('jmr_email');
                $jmr_gender = $this->io->post('jmr_gender');
                $jmr_address = $this->io->post('jmr_address');

                if ($this->user_model->update($jmr_last_name, $jmr_first_name, $jmr_email, $jmr_gender, $jmr_address, $id)) {
                    set_flash_alert('success', 'User was updated successfully.');
                    redirect('user/display');
                } else {
                    set_flash_alert('danger', 'Failed to update user.');
                    redirect('user/update/'.$id);
                }
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('user/update/'.$id);
            }
        }
        $this->call->view('user/update', $data);                    
    }

    public function delete($id) {
        if ($this->user_model->delete($id)) {
            set_flash_alert('success', 'User was deleted successfully.');
        } else {
            set_flash_alert('danger', 'Failed to delete user.');
        }
        redirect('user/display');
    }
}
