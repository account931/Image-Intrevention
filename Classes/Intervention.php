 <?php	
    //NOT USED!!!
    //Устанавливаем отображение сообщений об ошибках
    ini_set ("display_errors", "1");
    error_reporting(E_ALL);
  
                            //Устанавливаем тип содержимого 
                            //header('content-type: image/png');
  
                            //Определяем размеры изображения 
                            //125px width, 125px height
                            $image = imagecreate(125, 125);
  
                           //Выбираем цвет фона
                           $blue = imagecolorallocate($image, 0, 0, 255);
  
                           //Устанавливаем еще один цвет – просто чтобы убедиться, что при отображении рисунка фоновым будет именно цвет, установленный первым () 
                           //Обратите внимание – квадрат будет синего, а не красного цвета.
                           $red = imagecolorallocate($image, 255, 0, 0);
  
                           //Сохраняем файл в формате png и выводим его 
                           imagepng($image);
  
                           //Чистим использованную память
                           imagedestroy($image);
                         ?>