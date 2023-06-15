<?php 
use App\Models\Aboutapp;

    if(!function_exists('define_aboutapp'))
    {
        function define_aboutapp($status)
        {
            // ----------------------------------------------------------- Initialize  
                $data = Aboutapp::findOrFail(1);

            // ----------------------------------------------------------- Action   
                if($status == 'name')
                {
                    $isi = $data->name;
                }
                elseif($status == 'logo')
                {
                    $link = asset('/public/storage/aboutapp');
                    $isi = '<img src="'.$link.'/'.$data->logo.'" alt="" height="20" />'; 
                } 
                elseif($status == 'ico')
                {
                    $link = asset('/public/storage/aboutapp');
                    $isi = '<link rel="icon" type="image/x-icon" href="'.$link.'/'.$data->ico.'">';
                }  
                elseif($status == 'color')
                {
                    $isi = $data->color;
                }
                elseif($status == 'mode')
                {
                    $isi = $data->mode;
                }

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    } 