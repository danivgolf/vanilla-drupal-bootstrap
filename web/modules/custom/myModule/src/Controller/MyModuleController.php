<?php
/**
 * Created by PhpStorm.
 * User: dani
 * Date: 21/02/18
 * Time: 12:44
 */

namespace Drupal\myModule\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal;


class MyModuleController extends ControllerBase{

    public function registro(){

        $peliculas = array();
        $consulta = Drupal::entityQuery('node')->condition('type', 'pelicula')->execute();
        if(!empty($consulta)){
            foreach($consulta as $peliculaId){
                $pelicula = Node::load($peliculaId);
                $peliculas[] = $pelicula;
            }
        }

        return array(
            '#theme' => 'registro',
            '#titulo' => $this->t('Mi titulo traducido'),
            '#descripcion' => $this->t('Página donde se registran los usuarios'),
            '#peliculas' => $peliculas,
        );

    }

}