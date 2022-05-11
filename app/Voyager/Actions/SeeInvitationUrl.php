<?php

namespace App\Voyager\Actions;

use TCG\Voyager\Actions\AbstractAction;

class SeeInvitationUrl extends AbstractAction
{
    public function getTitle()
    {
        return 'Invitation URL';
    }


    public function getIcon()
    {
        return 'voyager-world';
    }


    public function getPolicy()
    {
        return 'read';
    }


    public function getAttributes()
    {
        return [
            'target' => '_blank',
            'class' => 'btn btn-sm btn-primary pull-right'
        ];
    }


    public function getDefaultRoute()
    {
        return route('homepage', [ 'invitation' => $this->data->code ]);
    }


    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'guests';
    }
}