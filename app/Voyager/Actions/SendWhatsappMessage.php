<?php

namespace App\Voyager\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SendWhatsappMessage extends AbstractAction
{
    public function getTitle()
    {
        return 'Send Whatsapp';
    }


    public function getIcon()
    {
        return 'voyager-bubble';
    }


    public function getPolicy()
    {
        return 'read';
    }


    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-success pull-right'
        ];
    }


    public function getDefaultRoute()
    {
        return route('voyager.guests.send-whatsapp', [ 'id' => $this->data->id ]);
    }


    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'guests';
    }
}