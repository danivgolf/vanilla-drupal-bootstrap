<?php
/**
 * @file
 * Contains \Drupal\forcontu_hello\Controller\ForcontuHelloController.
 */

namespace Drupal\forcontu_hello\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class ForcontuHelloController
 * @package Drupal\forcontu_hello\Controller
 */
/**
 * Controlador para devolver el contenido de las páginas definidas
 */
class ForcontuHelloController extends ControllerBase {

    public function hello() {
        return[
            '#markup' => '<p>' . $this->t('hello, Forcontu! This is my first module in drupal 8!') . '</p>',
        ];
    }

}