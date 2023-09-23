<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SmtpSettingsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $smtp = new \App\Models\SmtpSetting();
        $smtp->mail_driver = 'smtp';
        $smtp->mail_host = '127.0.0.1';
        $smtp->mail_port = '8025';
        $smtp->mail_username = 'null';
        $smtp->mail_password = 'null';
        $smtp->mail_from_name = 'Airdge';
        $smtp->mail_encryption = 'tls';
        // $smtp = new \App\Models\SmtpSetting();
        // $smtp->mail_driver = 'smtp';
        // $smtp->mail_host = 'smtp.gmail.com';
        // $smtp->mail_port = '465';
        // $smtp->mail_username = 'myemail@gmail.com';
        // $smtp->mail_password = 'mypassword';
        // $smtp->mail_from_name = 'Worksuite';
        // $smtp->mail_encryption = 'ssl';
        $smtp->save();
    }

}
