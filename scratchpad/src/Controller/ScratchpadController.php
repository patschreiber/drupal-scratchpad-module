<?php

namespace Drupal\scratchpad\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

/**
 * A basic controller for use with testing.
 *
 */
class ScratchpadController extends ControllerBase {

  /**
   * A basic endpoint for use with testing.
   * @return Response The HTTP response.
   */
  public function testEndpoint() {
    return new Response();
  }
}
