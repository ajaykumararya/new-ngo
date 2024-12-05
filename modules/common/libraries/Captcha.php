<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captcha {

    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->helper('captcha');
        $this->CI->load->library('session');
    }

    /**
     * Generate CAPTCHA
     * @param array $config Custom configurations
     * @return array CAPTCHA details (image and word)
     */
    public function create($config = []) {
        // Default configuration
        $defaultConfig = [
            'word'          => random_string('alnum', 6),
            'img_path'      => './captcha/',
            'img_url'       => base_url('captcha/'),
            'img_width'     => 150,
            'img_height'    => 50,
            'expiration'    => 7200,
            'font_path'     => '',
            'colors'        => [
                'background' => [255, 255, 255],
                'border'     => [0, 0, 0],
                'text'       => [0, 0, 0],
                'grid'       => [220, 220, 220]
            ]
        ];

        // Merge custom configurations
        $config = array_merge($defaultConfig, $config);

        // Generate CAPTCHA
        $captcha = create_captcha($config);

        // Store the CAPTCHA word in the session
        $this->CI->session->set_userdata('captcha_word', $captcha['word']);

        return $captcha;
    }

    /**
     * Verify CAPTCHA
     * @param string $userInput User input
     * @return bool Verification result
     */
    public function verify($userInput) {
        $storedCaptcha = $this->CI->session->userdata('captcha_word');
        return ($userInput === $storedCaptcha);
    }
}
