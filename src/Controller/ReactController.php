<?php
declare(strict_types=1);

namespace App\Controller;
use App\Controller\AppController;
/**
 * React Controller
 *
 * @property \App\Controller\Component\ReactEmbedComponent $ReactEmbed
 */
class ReactController extends AppController
{
    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('ReactEmbed');
    }

    public function embed(){
        $this->ReactEmbed->assets('react-app');
    }

    public function loadApi(){

    }
}
