<?php

namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContract;
use \CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract
{
    public function getDimension()
    {
        echo (new Mailer())->sendMail();
        echo "100X100\n";
    }
}
