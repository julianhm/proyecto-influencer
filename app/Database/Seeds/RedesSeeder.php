<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RedesSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('redes_sociales')->where('idredes >',0)->delete();

        $redes=['Behance','Instagram','Pinterest',
        'Reddit','TikTok', 'Twitch', 'Weibo',
        'Ello', 'Linkedin','QQ','Snapchat', 'Tumblr',
        'Vimeo','Youtube', 'Facebook', 'OnlyFans',
        'Qzone', 'Telegram','Twitter','Wechat',
        'blog'];
        $redeslogo=['Behance.png','Instagram.png','Pinterest.png',
        'Reddit.png','TikTok.png', 'Twitch.png', 'Weibo.png',
        'Ello.png', 'Linkedin.png','QQ.png','Snapchat.png', 'Tumblr.png',
        'Vimeo.png','Youtube.png', 'Facebook.png', 'OnlyFans.png',
        'Qzone.png', 'Telegram.png','Twitter.png','Wechat.png',
        'blog.png'];
        

        for ($i=0; $i <count($redes) ; $i++) { 
            $data = [
                'nombre' => $redes[$i],
                'icono'=>$redeslogo[$i],
                'activa'=>1,
               
            ];
            $this->db->table('redes_sociales')->insert($data);
        }
        
    }
}